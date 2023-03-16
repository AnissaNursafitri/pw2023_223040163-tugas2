<?php 

// GANJIL
//Cek jika $angka dibagi 2, sisa 1
$angka1 = 10;
$angka2 = 5;
if ($angka1 % 2 == 1){
    echo "$angka1 adalah bilangan GANJIL";
}else {
    echo "$angka1 adalah bilangan GENAP<br>";
}
if ($angka2 % 2 == 1){
    echo "$angka2 adalah bilangan GANJIL!";
}else {
    echo "$angka2 adalah bilangan GENAP!";
}
//membuat function

$angka = 10 ;
$angka = 5 ;
$angka = 102;

function cek_ganjil_genap ($angka) {//parameter
    {
        if ($angka % 2 == 1){
            return "$angka adalah bilangan GANJIL";
        }else {
            return"$angka adalah bilangan GENAP<br>";

            
    }
    echo cek_ganjil_genap($angka);//argument
    echo '<br>';
    echo cek_ganjil_genap(5);
    echo '<br>';
    echo cek_ganjil_genap(102);

}
}

    






?>