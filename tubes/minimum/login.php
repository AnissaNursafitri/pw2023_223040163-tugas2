<?php
// session_start();
// if (isset($_SESSION["login"])) {
//     header("Location: janji.php");
//     exit;
// }


require 'functions.php';

//ketika tombol login ditekan
if (isset($_POST["login"])) {
    $login = login($_POST);
    if (isset($login['error']) && ($login['error'])) {
        echo "<script>
             alert('password salah');
             </script>";
    }
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM usertable WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            //set session
            $_SESSION["login"] = true;

            header("Location: janji.php");
            exit;
        }
    }

    $error = true;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,600;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <!-- Navbar -->
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
                    <a class="nav-link active" href="#">Artikel</a>
                    <a class="nav-link active" href="regist.php">Daftar</a>
                    <a class="nav-link active bg-danger" style="color:white;" href="login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="login">
        <div class="regist">
            <form action="" method="post" class="form-login">
                <div class="teks">
                    <h2>Login</h2>
                    <p>Silahkan Login terlebih dahulu</p>
                </div>

                </i><input type="text" name="username" id="username" placeholder="Masukan Username" required autocomplete="off"><br>
                <br>
                <input type="password" name="password" id="password" placeholder="Masukan Kata Sandi" required autocomplete="off"><br>
                <br>
                <button name="login" type="login" class="btn bg-primary"><a class="link active bg-primary" style="color: white;">login</a></button>
                </li>
                </ul>
            </form>
        </div>
    </section>
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