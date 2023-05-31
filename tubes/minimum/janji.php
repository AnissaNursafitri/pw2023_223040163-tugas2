<?php
require 'functions.php';


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {





    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'backend.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'backend.php';
            </script
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>tambah data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,600;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: aliceblue !important;">
        <div class="container-fluid">
            <img src="img/logo-tanyadoc.png" alt="logo" width="300">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto navh">
                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    <a class="nav-link active" href="#a">Artikel</a>
                    <a class="nav-link active" href="regist.php"></a>
                    <a class="nav-link active bg-danger" style="color:white;" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!--navbar end -->

    <!--container janji start-->

    <div class="container-fluid kotak">
        <br>
        <div class="line2"></div>
        <div style="display:inline-block;">
        </div>
        <div class="line2"></div>
        <br>
        <br>

        <section class="daftar">
            <div class="regist">
                <form action="" method="post" class="form-control">
                    <div class="teks">
                        <h4>Silahkan Melakukan Perjanjian!</h4>
                        <h5>Langkah 1</h5>
                    </div>
                    <input type="text" name="nama" id="nama" placeholder="Masukan nama" required autocomplete="off"><br>
                    <br>
                    <input type="text" name="email" id="email" placeholder="Masukan Email" required autocomplete="off"><br>
                    <br>
                    <input type="text" name="nik" id="nik" placeholder="Masukan NIK" required autocomplete="off"><br>
                    <br>
                    <br>
                    <br>
                    <!--select spesialiast start-->
                    <div class="fore-group">
                        <label>
                            <h5>Langkah 2 </h5>
                        </label>
                        <br>
                        <div class="select">
                            <select id="spesialis" name="spesialis" required>
                                <option>Pilih Spesialis</option>
                                <option value="Spesialis Gigi"> Spesialis Gigi</option>
                                <option value="Spesialis Mata"> Spesialis Mata</option>
                                <option value="Spesialis Anak"> Spesialis Anak</option>
                                <option value="Spesialis Umum"> Spesialis Umum</option>
                            </select>
                        </div>
                        <br>
    
                        <!--select spesialiast end-->

                        <!--select waktu start-->
                        <div class="fore-group">
                            <label>
                                <h5>Langkah 3</h5>
                            </label>
                            <br>
                            <select id="pilih waktu" name="waktu" required>
                                <option>Pilih Waktu</option>
                                <option value="08.00"> 08.00</option>
                                <option value="09.00"> 09.00</option>
                                <option value="10.00"> 10.00</option>
                                <option value="11.00"> 11.00</option>
                                <option value="13.00"> 13.00</option>
                                <option value="14.00"> 14.00</option>
                            </select>
                            <br>
                            <input type = "text" name ="gambar" id="nama"placeholder="masukan gambar"><br>
        
                            <button type="submit" name="submit" class="btn bg-primary"><a class="link active bg-primary" style="color: white;">Submit</a></button>
                        </div>
                    </div>
                    <br>
                
    
                    






















</body>

</html>