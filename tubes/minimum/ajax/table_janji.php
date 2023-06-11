<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM table_janji
              WHERE
          nama LIKE  '%$keyword%' OR
          nik LIKE  '%$keyword%' OR
          email LIKE  '%$keyword%' OR
          spesialis LIKE  '%$keyword%' OR
          waktu LIKE  '%$keyword% OR
          gambar LIKE' 
              
          ";        
          
$table_janji = query($query);


?>
<table class="table table-hover text-center">
      <ul class="pagination">
        <li class="page-item ">
        <a href="?page=<?= $halamanAktif - 1; ?>">&laquo;</a>
          <a href="?page=1" class="page-link bg-primary border-none box-shadow text-white">1</a>
        </li>
        <li class="page-item ">
          <a href="?page=2" class="page-link bg-primary border-none box-shadow text-white">2</a>
        </li>
        <li class="page-item ">
          <a href="?page=3" class="page-link bg-primary border-none box-shadow text-white">3</a>
          <a href="?page=<?= $halamanAktif + 1; ?>">&raquo;</a>
        </li>

      </ul>
        <thead>
            <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Spesialis</th>
            <th>Waktu</th>
            <th colspan="3">Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($table_janji as $row) : ?>
            <tr>
              <th><?= $i; ?></th>
              <th><?= $row["nama"]; ?></th>
              <th><?= $row["spesialis"]; ?></th>
              <th><?= $row["waktu"]; ?></th>  
                <td style="width: 4rem">
                  <a href="ubah.php?id=<?= $row["id"];?>">
                  <i class="fa-solid fa-pen"></i>
                </a>
                </td>
                <td style="width: 4rem">
                  <a href="detailpsn.php">
                  <i class="fa-solid fa-eye"></i>
                </a>
                </td>
                <td style="width: 4rem">
                  <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm ('apakah anda yakin ingin menghapus?');">
                  <i class="fa-solid fa-trash"></i>
                </a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

            </table>