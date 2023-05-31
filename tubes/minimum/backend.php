<?php
require 'functions.php';
$table_janji = query("SELECT *FROM table_janji");

//tombol cari diekan
if(isset($_POST["cari"])){
    $table_janji = cari($_POST["keyword"]);

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin backend</title>
</head>
<body>
    
<h4>Daftar Pasien</h4>

<a href="janji.php">Tambah Data Pasien</a>
<br><br>

<form action="" method="post">

<input type="text" name ="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian.." autocomplete="off">
<button type="submit" name ="cari"> Cari!</button>
</form>

<br>
<table border ="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>Email</th>
    <th>Spesialis</th>
    <th>Waktu</th>
    <th>Gambar</th>
   
</tr>

<?php $i = 1; ?>
<?php foreach ($table_janji as $row) :?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm ('apakah anda yakin ingin menghapus?');">Hapus</a>
    </td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["NIK"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["spesialis"]; ?></td>
    <td><?= $row["waktu"]; ?></td>  
    <td><?= $row["gambar"]; ?></td>  
    
 
    
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>