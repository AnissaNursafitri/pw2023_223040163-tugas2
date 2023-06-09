<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';

//pagination
//konfigurasi
$jumlahDataPerhalaman = 3;
$jumlahData = count(query("SELECT * FROM table_janji"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
$awalData = ( $jumlahDataPerhalaman * $halamanAktif ) - $jumlahDataPerhalaman;






$table_janji = query("SELECT * FROM table_janji LIMIT $awalData, $jumlahDataPerhalaman");

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
    <link rel="stylesheet" href="ubah.css">
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
          <input type="text" name ="keyword"class="form-control" autofocus placeholder="Search pasien(s).."autofocus autocomplete="off" id="keyword">
          <span class="input-group-btn">
            <button type="submit" name ="cari" id="tombol-cari" class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>

      <div id="container">
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
      <ul class="pagination">
        <li class="page-item ">
        <a href="?page=<?= $halamanAktif - 1; ?>">&laquo;</a>
          <a href="?page=1" class="page-link bg-primary border-none box-shadow text-white">1</a>
        </li>
        <li class="page-item ">
          <a href="?page=2" class="page-link bg-primary border-none box-shadow text-white">2</a>
        </li>
        <li class="page-item ">
          <a href="?page=3" class="page-link bg-primary border-none box-shadow text-white">3</a>
        </li>
        <li class="page-item ">
          <a href="?page=4" class="page-link bg-primary border-none box-shadow text-white">4</a>
        </li>
        <li class="page-item ">
          <a href="?page=3" class="page-link bg-primary border-none box-shadow text-white">5</a>
          <a href="?page=<?= $halamanAktif + 1; ?>">&raquo;</a>
        </li>

      </ul>
        <thead>
            <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Spesialis</th>
            <th>Waktu</th>
            <th colspan="3">Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($table_janji as $row) : ?>
            <tr>
              <th><?= $i; ?></th>
              <th><?= $row["nama"]; ?></th>
              <th><?= $row["spesialis"]; ?></th>
              <th><?= $row["waktu"]; ?></th>  
                <td style="width: 4rem">
                  <a href="ubah.php?id=<?= $row["id"];?>">
                  <i class="fa-solid fa-pen"></i>
                </a>
                </td>
                <td style="width: 4rem">
                  <a href="detailpsn.php">
                  <i class="fa-solid fa-eye"></i>
                </a>
                </td>
                <td style="width: 4rem">
                  <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm ('apakah anda yakin ingin menghapus?');">
                  <i class="fa-solid fa-trash"></i>
                </a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

            </table>
</div>
<!-- <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="js/script.js"></script> -->
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