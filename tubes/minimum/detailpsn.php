<?php
// session_start();

// if( !isset($_SESSION["login"])){
//     header("Location: login.php");
//     exit;
// }

require 'functions.php';

$id = $_GET['id'];

$psn = query("SELECT * FROM table_janji WHERE id = $id")[0];





?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail pasien</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="ubah.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>

<body>
  <!--START NAVBAR-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Hallo, Admin</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
          <li class="active"><a href="backend.php"><i class="fa-solid fa-users"></i></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="janji.php"><i class="fa-solid fa-user-plus"></i></span>Tambah Data</a></li>
          <li><a href="login.php"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- END NAVBAR-->
  <h2>Detail Pasien</h2>
  <div class="container">
    <!-- <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $psn["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $psn["gambar"]; ?>">  -->
    <img src="img/person.webp" alt="image" class="image"><br>

    <div class="col-md-4">
      <div class="d-flex justify-content-center align-items-end flex-column h-100 text-right">
        <h2 class="text-muted">info</h2>
        <h5><?= $psn["nama"]; ?></h5>
        <h5><?= $psn["email"]; ?></h5>
        <h5><?= $psn["NIK"]; ?></h5>
        <h5><?= $psn["spesialis"]; ?></h5>
        <h5><?= $psn["waktu"]; ?></h5>
         
      </div>
        
    </div>

    <!-- <img src="img/<?= $psn['gambar']; ?>" width="500"><br> -->



  </div>



</body>

</html>