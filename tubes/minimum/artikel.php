<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>artikel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>

<body>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #61a5c2 !important;">
      <div class="container-fluid">
        <img src="img/logo-tanyadoc.png" alt="logo" width="300">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto navh">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            <a class="nav-link active" href="artikel.php">Artikel</a>
            <a class="nav-link active" href="regist.php">Daftar</a>
            <?php if (isset($_SESSION['login'])) : ?>
              <a class="nav-link active" href="janji.php">Janji</a>
              <a class="nav-link active bg-danger" style="color:white;" href="logout.php">logout</a>
            <?php else : ?>
              <a class="nav-link active bg-success" style="color:white;" href="login.php">Login</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container text-center">
        <h1>Artikel Kesehatan</h1>
        <h3>Jaga kesehatanmu dari mulai sekarang!</h3>
      </div>
    </div>




    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">No Smoking</div>
            <div class="panel-body"><img src="img/rokok.png" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Tidak merokok di area tempat umum dan hindari jangkauan anak-anak</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-danger">
            <div class="panel-heading">Mencuci Tangan</div>
            <div class="panel-body"><img src="img/cucitangan.png" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Mencuci tangan dengan sabun dan air bersih yang mengalir sebelum dan sesudah beraktivitas</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">Timbang Badan</div>
            <div class="panel-body"><img src="img/timbang.png" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Timbang berat dan tingg badan mu setiap satu bulan sekali secara teratur</div>
          </div>
        </div>
      </div>
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">Gizi Seimbang</div>
            <div class="panel-body"><img src="img/giziseimbang.png" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Selalu menerapkan pola hidup sehat dengan memakan makanan yang bergizi seimbang</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">Buanglah sampah pada tempatnya</div>
            <div class="panel-body"><img src="img/sampah.png" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Menjaga kebersihan dengan membuang sampah pada tempatnya sesuai dengan jenisnya</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">Rajin Berolahraga</div>
            <div class="panel-body"><img src="img/olahraga.png" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Olahraga secara teratur dan terukur agar stamina menjadi kuat</div>
          </div>
        </div>
      </div>
    </div><br><br>

    <!--Footer-->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



  </body>

</html>