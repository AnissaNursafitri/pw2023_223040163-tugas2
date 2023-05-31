<?php 
//Variabel Scope/Lingkup Varibel
//Nampilin function harus berada di dalam function itu sendiri
// $x =10;

// //variabel local
// function tampilX(){
//      $x=25;
//     echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

//variabel global
//bisa memanggil variabel yang diluar 
// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// }
//  tampilX ();


//Superglobals-Tipe array assosiative
//variabel global milik php
//1. $_GET
//2. $_POST
//3. $_REQUEST
//4. $_SESSION
//5. $_COOKIE
//6. $_SERVER
//7. $_ENV

// var_dump($_GET); akan muncul array(0){} dan bisa memunculkannya lewat url web
// var_dump($_SERVER); akan muncul semua yang kita ingin cari
// echo $_SERVER["SERVER_NAME"]; akan muncul localhost

var_dump($_GET);


 ?>