<?php
$arrNilai = array ("Ani" => 80, "Otim" => 90, "Sri" => 75, "Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array Setelah pengurutan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>Array Setelah pengurutan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>