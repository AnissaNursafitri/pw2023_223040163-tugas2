<?php 
echo "<h4> Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r){
    echo "jari jari = $r cm <br>";
    echo "luas lingkaran = " . (3.14 * $r * $r) . " cm²";
}
hitungLuasLingkaran(10);
echo "<h4> Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($h){
    echo "jari jari = $h cm <br>";
    echo "keliling lingkaran = " . (3.14 * ($h+$h)) . " cm²";
}
hitungKelilingLingkaran (20)

?>