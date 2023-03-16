<?php 
$nama_depan = "Anissa";
$nama_belakang = "Nursafitri";

for ($n = 1; $n <=100; $n++) {
    if ($n % 5 == 0 && $n % 3 == 0) {
        echo $nama_depan . $nama_belakang . '<br>';
     }elseif ($n % 3 == 0){
        echo $nama_depan . '<br>';
     }elseif ($n % 5 == 0){
        echo $nama_belakang . '<br>';
    } else   {
    echo $n . '</br>';
    
}
}

?>