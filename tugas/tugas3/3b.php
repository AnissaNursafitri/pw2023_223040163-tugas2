<?php 
function urutanAngka ($angka){
    $j = 1;
    for ($i = 1; $i <= $angka; $i++ ){
        for ($h = 1; $h <= $i; $h++ ){
            echo "$j" . " " ;
            $j++;
        }
        echo "<br>";
    }
}
urutanAngka(5);
?>