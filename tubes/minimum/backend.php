<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';
$table_janji = query("SELECT * FROM table_janji");

//tombol cari diekan
if(isset($_POST["cari"]) ){
    $table_janji = cari($_POST["keyword"]);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backend</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
  
</head>

<body>
<!--navbar start-->
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
      <form action ="" method ="post"class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" name ="keyword"class="form-control" autofocus placeholder="Search.." autocomplete="off">
          <span class="input-group-btn">
            <button type="submit" name ="cari"class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="logout.php"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar end-->
    
  


<h1>Daftar Pasien</h1>
<div class="main-table" id="main-table">
    <table class="table table-hover text-center">
        <thead>
            <tr>
            <th>No.</th>
            <th>nama</th>
            <th>spesialis</th>
            <th>waktu</th>
            <th colspan="3">aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($table_janji as $row) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $row["nama"]; ?></td>
              <td><?= $row["spesialis"]; ?></td>
              <td><?= $row["waktu"]; ?></td>  
                <td style="width: 3rem">
                  <a href="ubah.php?id=<?= $row["id"];?>" class= "btn btn-primaryd d-flex align-items-center justify-content-center box-shadow">
                  <i class="fa-solid fa-pen"></i>
                </a>
                </td>
                <td style="width: 3rem">
                  <a href="detailpsn.php" class= "btn btn-primaryd d-flex align-items-center justify-content-center box-shadow">
                  <i class="fa-solid fa-eye"></i>
                </a>
                </td>
                <td style="width: 3rem">
                  <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm ('apakah anda yakin ingin menghapus?');" class= "btn btn-primaryd d-flex align-items-center justify-content-center box-shadow">
                  <i class="fa-solid fa-trash"></i>
                </a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

            <!-- <div class="right d-flex flex-column h-100 mt-5 pt-5">
              <div class="right-table w-100 d-flex justify-content-center flex column">
                <div class="card box-shadow bg-primary text-white">
                  <div class="card-body">
                    <h5 class= "card title d-flex justify-content-between">
                    <span class="text"> total</span>
                    <span class="material-icons sharp text-white"> info</span>
                    </h5>
                    <h6 class="card-subtitle mb-2">total jumlah pasien</h6>
                    <div class="card-text d-flex">
                      <h2>10</h2>
              </div>
            </div> -->
</body>
</html>