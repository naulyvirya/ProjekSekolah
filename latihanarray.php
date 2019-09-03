<?php
$arrNama = array("Ajeng" => 90, "Mamat" => 70, "Ucup" => 78, 
"Aang" => 95, "Sahrul" => 75);

foreach ($arrNama as $nama => $nilai) {
    if ($nilai > 85) {
    echo "Nama : $nama, Nilai : $nilai, Grade A<hr>";    
    }elseif ($nilai > 75) {
        echo "Nama : $nama, Nilai : $nilai, Grade B<hr>";
    }elseif ($nilai > 65) {
        echo "Nama : $nama, Nilai : $nilai, Grade C<hr>";
    }
}
?>