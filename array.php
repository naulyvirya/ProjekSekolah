<?php
$a = array('Gobang', 19, true, 3.19);
//menampilkan array satu-satu
echo "Array Menggunakan Echo<br>";
echo "Array - " . $a[0] . "<br>";
echo "Array - " . $a[3] . "<br>";

echo "<br>";
echo "Array Menggunakan Looping For<br>";
for ($i=0; $i < count($a); $i++) { 
    echo "Array - " . $a[$i] . "<br>";
}

echo "<br>";
echo "Array Menggunakan Looping Foreach<br>";
foreach ($a as $index => $value) {
    echo "Array - " . $index . "&nbsp-> " . $value . "<br>";
}
?>