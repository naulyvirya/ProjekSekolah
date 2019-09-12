<?php
if (isset($_POST['sbm'])) {
    
    $angka = $_POST['bilangan'];
    $pangkat = $_POST['pangkat'];
    $number=0;
    $number2=0;
    
    for ($a=0; $a < count($angka); $a++) { 
        for ($z=1; $z <= $pangkat[$a]; $z++) { 
            echo $angka[$a];
            if ($z < $pangkat[$a]) {
                echo "x";
            }
        }
        $hasil = pow($angka[$a], $pangkat[$a]);
        echo " = " . $hasil . " -> ";
        if ($hasil % 2 == 1) {
            echo "Bilangan Ganjil";
        } else {
            echo "Bilangan Genap";
        } echo "<hr>";
    }
}
?>