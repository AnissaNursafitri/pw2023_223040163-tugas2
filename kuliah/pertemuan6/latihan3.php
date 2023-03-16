<?php 
//Array Assosiative : 
//Array yang indeksnya adalah string yang kita buat sendiri
//
$mahasiswa = 
[
'nama'=> 'Nissa',
'binatang'=> '🐢',
'makanan'=> '🧀'
],

[
'nama' => 'Ica',
'binatang' => '🕷️',
'makanan' => '🥞'
],

[

'nama' => 'Ika',
'binatang' => '🦋',
'makanan'=> '🍖'
],

[
'nama' => 'Yessi',
'binatang'=> '🐟',
'makanan'=> '🫔'
]



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3</title>
</head>
<body>
    <h2> Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as  $mhs) :?>
        <ul>
        <li>Nama : <?=$mhs['nama'];?></li>
        <li>Makanan Favorite : <?= $mhs ['makanan'] ;?></li>
        <li>Peliharaan : <?=$mhs['binatang'] ;?></li>
        </ul>
        <?php endforeach;?>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <ul>
                <li> Nama : <?= $mhs ['nama'];?></li>
                <li> Makanan Favorite :
                    <?php foreach ($mhs ['makanan'] as $mkn){ 
                        echo $mkn;
                    }?>

    
</body>
</html>