<?php
function cetak_ganjil ($awal, $akhir){
    for ($i=$awal; $i < $akhir; $i++) { 
        if ($i%2 == 1) {
            echo "$i<br>";
        }
    }
}
//pemanggilan fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan Ganjil dari $a sampai $b : </b><br>";
cetak_ganjil($a, $b);

// optional parameter
function perkenalan($nama = "Abang"){
    echo "Nama Saya : $nama";
}
echo "<hr>";
$a = "Sancaka";
perkenalan();

// basic parameter
function perkenalan2($nama = "Abang"){
    echo "Nama Saya : $nama";
}
echo "<hr>";
$a = "Nauly";
perkenalan2($a);
?>