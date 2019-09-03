<?php
$array = array("Barang" => "Buku Tulis",
            "Harga" => 4000,
            "Berat" => "100 gram");

foreach ($array as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>