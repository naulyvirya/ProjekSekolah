<?php
function segitiga($alas, $tinggi, $luas)
{
    echo "<h1>Luas Segitiga<br></h1>";
    echo "Alas Segitiga : $alas<br>";
    echo "Tinggi Segitiga : $tinggi<br>";
    echo "Luas Segitiga : $luas";
}
$a = 5;
$t = 10;
$luas = ($a*$t)/2;
segitiga($a, $t, $luas);

function lingkaran($jari, $luas, $kl){
    echo "<h1>Lingkaran<br></h1>";
    echo "Jari - Jari : $jari<br>";
    echo "Luas Lingkaran: $luas<br>";
    echo "Keliling Lingkaran: $kl";
}
echo "<hr>";
$r = 8;
$phi=3.14;
$luas=$phi*($r*$r);
$kl = 2*($phi*$r);
lingkaran($r,$luas,$kl);

?>