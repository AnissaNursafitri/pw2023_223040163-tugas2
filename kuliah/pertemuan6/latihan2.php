<?php 
//Array Assosiative : 
$mahasiswa = [
['Nissa','🐢','🧀'],
['Ica','🕷️','🥞'],
['Ika','🦋','🍖'],
['Yessi','🐟','🫔'],
['Caca','🦐','🍘'],
['Nana','🐙','🍱']]



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<body>
    <h2> Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as  $m) :?>
        <ul>
        <li>Nama : <?=$m [0];?></li>
        <li>Makanan Favorite : <?= $m [2];?></li></li>
        <li>Peliharaan : <?=$m[1] ;?></li>
        </ul>
        <?php endforeach;?>
    
</body>
</html>