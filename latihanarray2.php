<?php
$arrData =[
    ['Nama' => 'Ujang', 'Kelas' => 'XI RPL 2', 'Alamat' => 'Bandung'],
    ['Nama' => 'Mahmud', 'Kelas' => 'X RPL 1', 'Alamat' => 'Kopo'],
    ['Nama' => 'Ucok', 'Kelas' => 'XI RPL 3', 'Alamat' => 'Cibaduyut']
];

echo "<pre>";
print_r($arrData);
echo "</pre>";

$mode = current($arrData[2]);
echo "$mode" . "<br>";
reset($arrData);

$mode = end($arrData[1]);
echo "$mode" . "<br>";
next($arrData);

$mode = key($arrData);
echo "$mode" . "<br>";


$mode = prev($arrData[2]);
echo "$mode" . "<br>";
reset($arrData);
?>