<?php 
// session_start();

// if( !isset($_SESSION["login"])){
//     header("Location: login.php");
//     exit;
// }


?>





<!DOCTYPE html>
<html>
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
<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 60%;
  height: auto;
}


.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-30%, -30%);
  -ms-transform: translate(-30%, -30%);
  transform: translate(-30%, -30%);
  text-align: center;
}
</style>
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

<!--END NAVBAR-->
<h2>Detail Pasien</h2>
<div class="container">
  <img src="img/dok1.jpg" alt="image" class="image">

              <img src="img/<?= $psn['gambar']; ?>" width="500"><br>
  
              <br>
              <input type = "file" name ="gambar" id="gambar"><br>
              <a href="ubah.php?id=35"button type="submit" name="submit" class="btn bg-primary" >Edit</a></button>
</div>



</body>
</html>
