<?php
// Koneksi ke Database
$conn = mysqli_connect('localhost', 'root',  '', 'tanyadoc');


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

//SAVE DATA//
function tambah($data)
{
  global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $nik = htmlspecialchars($data["nik"]);
  $spesialis = $data["spesialis"];
  $waktu = $data["waktu"];
  $gambar = $data["gambar"];


  $query = "INSERT INTO table_janji
                       VALUES
            (NULL, '$nama', '$email','$nik', '$spesialis', '$waktu', '$gambar')
            ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


//DELETE DATA
function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE  FROM table_janji WHERE id = $id");


  return mysqli_affected_rows($conn);
}

// UBAH DATA
function ubah($data)
{
  global $conn;

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $nik = htmlspecialchars($data["nik"]);
  $spesialis = $data["spesialis"];
  $waktu = $data["waktu"];
  $gambar = $data["gambar"];


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
function cari($keyword)
{
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
function registrasi($data)
{
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belum
  $user = query("SELECT * FROM usertable");

  if (isset($user['username'])) {
    echo "<script>
         alert('username sudah terdaftar!')
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
