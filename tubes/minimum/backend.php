<?php
// session_start();
// if( !isset($_SESSION["login"]) ){
//     header("Location: login.php");
//     exit;
// }
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
    <title>halaman admin backend</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
  
</head>

<body>

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
        <li><a href="janji.php"><i class="fa-solid fa-user-plus"></i></span> Tambah Data</a></li>
        <li><a href="logout.php"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>
    
  


<h4>Daftar Pasien</h4>

<br><br>
   
 <br>
 <table border ="5" cellpadding="2" cellspacing="4" margin-left= "25px">   
    
   
   
   

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>Email</th>
    <th>Spesialis</th>
    <th>Waktu</th>
    <th>Gambar</th>
   
</tr> 

<?php $i = 1; ?>
<?php foreach ($table_janji as $row) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm ('apakah anda yakin ingin menghapus?');">Hapus</a>
    </td>
    
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["NIK"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["spesialis"]; ?></td>
    <td><?= $row["waktu"]; ?></td>  
     
    <td><img src="img/<?=$row["gambar"]; ?>" width="50"></td>
       
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>
<br>

<!-- Footer
    <footer>
        <div class="kaki text-center">
            <h4>Tanyadoc</h4>
            <p>Jika kamu memiliki kendala silahkan hubungi contact dibawah ini!</p>
            <span><i class="fa-brands fa-facebook"></i></span>
            <span><i class="fa-brands fa-instagram"></i></span>
            <span><i class="fa-brands fa-linkedin"></i></i></span>
            <hr>
        </div>
        <div class="copyright">
            <p><i class="fa-regular fa-copyright"></i> copyright tanyadoc 2023, design by. Anissa Nursafitri</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script> -->


       



</body>
</html>