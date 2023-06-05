<?php
// Koneksi ke Database
$conn = mysqli_connect('localhost', 'root',  '', 'tanyadoc');


function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

//TAMBAH DATA//
function tambah($data) {
  global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $nik = htmlspecialchars($data["nik"]);
  $spesialis = $data["spesialis"];
  $waktu = $data["waktu"];

  //upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }


  $query = "INSERT INTO table_janji
                       VALUES
            (NULL, '$nama', '$email','$nik', '$spesialis', '$waktu', '$gambar')
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

//UPLOAD DATA//
function upload() {

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}

//DELETE DATA
function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE  FROM table_janji WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// UBAH DATA
function ubah($data) {
  global $conn;

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $nik = htmlspecialchars($data["nik"]);
  $spesialis = $data["spesialis"];
  $waktu = $data["waktu"];
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }
  $query = "UPDATE table_janji SET
            nama = '$nama',
            email = '$email',
            nik = '$nik',
            spesialis = '$spesialis',
            waktu = '$waktu',
            gambar = '$gambar'
          WHERE id = $id
          ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

//SEARCHING
function cari($keyword) {
  $query = "SELECT * FROM table_janji
              WHERE
              nama LIKE  '%$keyword%' OR
              nik LIKE  '%$keyword%' OR
              email LIKE  '%$keyword%' OR
              spesialis LIKE  '%$keyword%' OR
              waktu LIKE  '%$keyword% OR
              gambar LIKE' 
              
              ";
  return query($query);
}

// REGISTRASI
function registrasi($data) {
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belum
  if (query("SELECT * FROM usertable WHERE username='$username'")) {
    echo "<script>
         alert('username sudah terdaftar!')
         </script>";
    return false;
  }
  if (query("SELECT * FROM usertable WHERE email='$email'")) {
    echo "<script>
         alert('email sudah terdaftar!')
         </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
          alert('konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }


  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambhakan userbaru ke db
  mysqli_query($conn, "INSERT INTO usertable VALUES(NULL, '$username', '$nama', '$email', '$password')");

  return mysqli_affected_rows($conn);
}


//LOGIN
function login($data)
{
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($username === 'admin' && $password === '12345') {

    //set session
    $_SESSION['login'] = true;
    header('Location: janji.php');
    exit;
  } else {
    return [
      'error' => true,
      'pesan' => 'Username / Password Salah!'
    ];
  }
}
