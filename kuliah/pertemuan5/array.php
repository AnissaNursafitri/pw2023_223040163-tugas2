<?php 

//ARRAY
//Membuat Array
$day= array ('Senin', 'Selasa', 'Rabu','Kamis','Jumat','Sabtu','Minggu');
$mounth = ['Januari','Februari','Maret','April','Mei','Juni'];
$myArray = ['Anissa Nursafitri', '18', 'false'];
$animals = ['🦦','🐟','🐢','🦋','🕷️'];

//Mencetak Array
//Mnecetak 1 elemen array menggunakan echo
echo $day [1];
echo '<br>';
echo $animals [3];
echo '<br>';

//Mencetak banyak variabel
//var_dump
var_dump ($day);
echo '<br>';
var_dump ($mounth);
echo '<br>';
var_dump ($myArray);
echo '<br>';
var_dump ($animals);
echo '<br>';

//Manipulasi Array
//Menggunakan Array
$day[3]='Kamis';
print_r($day);
echo "<hr>";

// Menambahkan elemen di akhir dengan mengosongkan indexnya
// Menambahkan elemen di akhir menggunakan array_push
array_push($mounth,'April','Mei','Juni');
print_r($mounth);


?>