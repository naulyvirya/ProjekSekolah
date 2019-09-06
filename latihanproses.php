<?php
if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $mapel1 = $_POST['mapel1'];
    $mapel2 = $_POST['mapel2'];
    $rata = ($mapel1 + $mapel2)/2;
    echo "Nama : $nama<br>";
    echo "Mapel 1 : $mapel1<br>";
    echo "Mapel 2 : $mapel2<br>";
    echo "Rata - Rata : $rata<br>";

    if ($rata > 75) {
        echo "Status : Lulus";
    } else {
        echo "Status : Tidak Lulus";
    }
}
?>