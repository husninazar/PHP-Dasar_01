<?php

echo 'Hallo World';

//ini pemanggilan di php

//belajar variable
$namaSiswa = "nazar";
$umur = 21;
$berat_badan = 61;
$_pekerjaan = "mahasiswa";
$tes = "Coba";

echo '<hr>';
echo 'Nama Siswa :'.$namaSiswa;
echo 'Umur : ' .$umur;
echo ' <br> Berat Badan : ' .$berat_badan;
echo  '<br> Pekerjaan : '.$_pekerjaan;
?>

<hr>
Nama Siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat Badan : <?= $berat_badan ?>
<br> Pekerjaan : <?= $_pekerjaan ?>