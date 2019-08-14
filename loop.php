<?php
$loop = 20;
$num = 1;
for ($i = 0; $i <= $loop; $i++) {
    if ($i == 1) {     
    echo "Aku Data ke- " . $num++ . " dan mendapatkan medali emas<br>";
    } elseif ($i == 2) {
        echo "Aku Data ke- " . $num++ . " dan mendapatkan medali perak<br>";
    } elseif ($i == 3) {
        echo "Aku Data ke- " . $num++ . " dan mendapatkan medali perunggu<br>";
    } elseif ($i >= 4 && $i <= 6) {
        echo "Aku Data ke- " . $num++ . " dan mendapatkan tas laptop<br>";
    } elseif ($i >= 7 && $i <= 9) {
        echo "Aku Data ke- " . $num++ . " dan mendapatkan tas karung<br>";
    } elseif ($i >= 10) {
        echo "Aku Data ke- " . $num++ . " dan tidak mendapatkan apapun<br>";
    }
}
?>