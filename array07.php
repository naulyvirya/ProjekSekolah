<?php
$arrNilai = array ("Ani" => 80, "Otim" => 90, "Sri" => 75, "Budi" => 85); 
echo "<b>Array Sebelum Pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
"</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array Setelah Pengurutan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>Array Setelah Pengurutan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>