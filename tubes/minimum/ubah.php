<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data table_janji berdasarakan id
$psn = query("SELECT * FROM table_janji WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'backend.php';
            </script>
        ";
  } else {
    echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'backend.php';
            </script
            ";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="ubah.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

  <!--NAVBAR START-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">ADMIN</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="admin.php"><i class="fa-solid fa-house"></i></a></li>
          <li class="active"><a href="backend.php"><i class="fa-solid fa-users"></i></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--END NAVBAR-->

  <!--CONTAINER START-->
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $psn["id"]; ?>">
          <div class="row">
            <div class="col-50">
              <h3>Update Data</h3>
              <label for="name"><i class="fa fa-user"></i> Full Name</label><br>
              <input type="text" id="name" name="nama" placeholder="masukan nama" required value="<?= $psn["nama"]; ?>"><br>
              <label for="email"><i class="fa fa-envelope"></i> Email</label><br>
              <input type="text" id="email" name="email" placeholder="masukan email" required value="<?= $psn["email"]; ?>"><br>
              <label for="nik"><i class="fa fa-address-card-o"></i> NIK</label><br>
              <input type="text" id="nik" name="nik" placeholder="masukan nik" required value="<?= $psn["NIK"]; ?>"><br>
              <label for="spesialis"><i class="fa-sharp fa-solid fa-stethoscope"></i> Spesialis</label><br>
              <div class="select">
                <select id="spesialis" name="spesialis" required>
                  <option><?= $psn["spesialis"]; ?></option>
                  <option value="Spesialis Gigi"> Spesialis Gigi</option>
                  <option value="Spesialis Mata"> Spesialis Mata</option>
                  <option value="Spesialis Anak"> Spesialis Anak</option>
                  <option value="Spesialis Umum"> Spesialis Umum</option>
                </select>
              </div>
              <br>
              <label for="waktu"><i class="fa-solid fa-business-time"></i> Waktu</label><br>
              <select id="waktu" name="waktu" required>
                <option><?= $psn["waktu"]; ?></option>
                <option value="08.00"> 08.00</option>
                <option value="09.00"> 09.00</option>
                <option value="10.00"> 10.00</option>
                <option value="11.00"> 11.00</option>
                <option value="13.00"> 13.00</option>
                <option value="14.00"> 14.00</option>
              </select>
              <!--select tabel janji end-->
              <div class="col-50"><br><br>
                <button type="submit" name="submit" class="btn bg-primary">Ubah Data</a></button>
        </form>
      </div>
    </div>


</body>

</html>