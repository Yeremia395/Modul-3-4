<?php
$nis=$_POST['NIS'];
$Nama=$_POST['Nama'];
$Kelas=$_POST['Kelas'];
$jurusan=$_POST['jurusan'];
$Absen=$_POST['Absen'];
$Tempat=$_POST['Tempat'];
$Tgl=$_POST['Tgl'];
$Bln=$_POST['Bln'];
$Thn=$_POST['Thn'];
$JK=$_POST['JK'];
$alamat=$_POST['alamat'];

echo "NIS      : $nis<br>";
echo "Nama     : $Nama<br>";
echo "Kelas      : $Kelas<br>";
echo "Absen   : $Absen";
echo "Jurusan  : $jurusan<br>";
echo "Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn<br>";
echo "Jenis Kelamin : $JK<br>";
echo "Alamat : $alamat<br>";
?>