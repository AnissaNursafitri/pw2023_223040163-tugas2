<?php 

$user = 'root';
$password = '';
$db = 'tanyadoc';



session_start();

    $con = mysqli_connect('localhost', $user,$password,$db);

    mysqli_select_db($con, 'tanyadoc');

    $pengguna = $_POST ['user'];
    $pass = $_POST ['pswd'];

    $s = "select * from usertable where username = '$pengguna' && password = 'pass' ";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1){
        $_SESSION['username'] = $pengguna;
        header('location:indexlogin.php');

    }else{
        Print '<script>alert("Username atau Password Salah!");</script>';
        Print '<script>window.location.assign("login.php");</script>';
    }

?>