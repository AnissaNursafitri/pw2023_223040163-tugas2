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
    ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach( $mahasiswa  as $mhs): ?>
        <ul>
            <li><?= $mhs["nama"];?></li>
            <li><?= $mhs["nrp"];?></li>
    </ul>
    <?php endforeach; ?>

    
    <h2>Detail Mahasiswa</h2>
    <ul>
    <?php foreach( $mahasiswa  as $mhs): ?>
    
            <li>
                <a href="latihan3.php?nama=<?= $mhs["nama"];?>"><?= $mhs["nama"]; ?></a>
    </li>
        
    
    <?php endforeach; ?>
    </ul>
    


    
</body>
</html>