<?php
function cetak_ganjil ($awal, $akhir){
    for ($i=$awal; $i<$akhir; $i++){
        if($i%2 == 1){
            echo "$i";
        }
    }
}
//pemanggilan fungsi
$a = 10;
$b = 50;