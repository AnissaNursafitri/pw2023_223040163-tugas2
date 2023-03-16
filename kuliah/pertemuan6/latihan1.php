<?php 
$mahasiswa = ['Anissa', 'Ika','Yesi','Ica','Yaya','Nana'];
$binatang = ['🦦','🐟','🐢','🦋','🕷️'];
$makanan = ['🥞','🧀','🫔','🍖','🥩'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <h2> Daftar Mahasiswa</h2>
    <ul>
        <li> Nama : Anissa Nursafitri</li>
        <li> Makanan Favorite : 🥞</li>
        <li> Peliharaan : 🐟</li>
</ul>

<h2> Daftar Mahasiswa</h2>  
    <?php for ( $i = 0; $i < 5; $i++){ ?>
        <ul>
        <li>Nama : <?$mahasiswa[$i] ;?></li>
        <li>Makanan Favorite : <?$makanan[$i] ;?></li>
        <li>Peliharaan: <?$binatang[$i] ;?></li>
    </ul>
        <?php }?>

        <?php foreach ($mahasiswa as $i => $m) {?>
        <ul>
        <li>Nama : <?=$m ;?></li>
        <li>Makanan Favorite : <?= $makanan [$i];?></li></li>
        <li>Peliharaan : <?=$binatang[$i] ;?></li>
        </ul>
        <?php }?>   
        

        
        
</ul>


    
</body>
</html>