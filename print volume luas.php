<?php
$jarijari = $_POST["jarijari"];
$v=4/3;
$l=4;
$phi=22/7;

if($_POST["Submit"] == "volume"){
    $hasil=$v*$phi*$jarijari*$jarijari*$jarijari;
    echo $hasil;
}
else if($_POST["Submit"] == "luas"){
    $hasil=$l*$phi*$jarijari*$jarijari;
    echo $hasil;
}
?>