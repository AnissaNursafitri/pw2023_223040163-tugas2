<?php 
$mahasiswa = [
[
"nama" => "Anissa Nursafitri", 
"nrp"=> "223040163",
"email" => "anissa.223040163@mail.unpas.ac.id",
"jurusan" => "Teknik Informatika",
],
[
"nama" => "Wildan Aziz", 
"nrp" => "223010175",
"email" => "wildan.223010175@mail.unpas.ac.id",
"jurusan" => "Teknik Industri",
],
[
"nama" => "Mustika Weni",
"nrp" =>  "223040139",
"email" => "mustika.223040139@mail.unpas.ac.id",
"jurusan" => "Teknik Informatika",
],
[
"nama" => "Khoerul Mubin", 
"nrp" => "223020180",
"email" =>"khoerul.223020180@mail.unpas.ac.id",
"jurusan" => "Teknik Mesin",
],
[
"nama" => "M.Rinaldi Agus Pratama", 
"nrp" => "223040166",
"email" => "rinaldi.223040166@mail.unpas.ac.id",
"jurusan" => "Teknik Informatika",
],

[
"nama" => "Danis Woro",
"nrp" => "223030123",
"email" => "danis.223030123@mail.unpas.ac.id",
"jurusan" => "Teknik Pangan",
],
[
"nama" => "Sintia Marisa",
"nrp" => "223040145",
"email" => "sintia.223040145@mail.unpas.ac.id",
"jurusan" => "Akuntansi",
],
[
"nama" => "Annisa Septiyani",
"nrp" => "223040172",
"email" => "anissa.223040172@mail.unpas.ac.id",
"jurusan" =>"Teknik Informatika",
],
[
"nama" => "Farel Dirgantara",
"nrp" => "223010168",
"email" => "farel.223010168@mail.unpas.ac.id",
"jurusan" => "Teknik Industri",
],
[
"nama" => "Yesi Dedehidayati",
"nrp" => "223040179",
"email" => "yesi.223040179@mail.unpas.ac.id",
"jurusan" => "Teknik Informatika"
]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>

    <ul>
        <li>Nama : <?=$mhs["nama"];?></li>
        <li>NRP : <?= $mhs ["nrp"] ;?></li>
        <li>Email : <?=$mhs["email"] ;?></li>
        <li>Jurusan : <?=$mhs["jurusan"];?></li>
    </ul>
    <?php endforeach;?>


    
</body>
</html>