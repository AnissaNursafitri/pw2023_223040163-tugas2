<?php 
$mahasiswa = [
    [
        'nomor' => '1',
        'nama' => 'Sandhika Galih',
        'nrp' => '043040023',
        'email' => 'sandhikagalih@unpas.ac.id',
        'jurusan' => 'Teknik Informatika'
    ],
    [
        'nomor' => '2',
        'nama' => 'Doddy Ferdiansyah',
        'nrp' => '144040004',
        'email' => 'doddy@gmail.com',
        'jurusan' => 'Teknik Mesin'

    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>

    <ul>
        <li><?=$mhs["nomor"];?></li>
        <li>Nama : <?=$mhs["nama"];?></li>
        <li>NRP : <?= $mhs ["nrp"] ;?></li>
        <li>Email : <?=$mhs["email"] ;?></li>
        <li>Jurusan : <?=$mhs["jurusan"];?></li>
    </ul>
    <?php endforeach;?>


    
</body>
</html>






