<?php
$nim="0411500400";
$nama='Nauly Virya Huska Putra';
$umur=15;
$nilai=85.25;
$status=TRUE;

echo "NIM  : " . $nim . "<br>";
echo "NAMA : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";


?>