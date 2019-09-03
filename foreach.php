<?php
$array = array("Saya <br>", 10);
$aso = [
    [
        'Nama' => 'Nauly Virya',
        'Kelas' => 'XI RPL 2',
    ],
    [
        'Nama' => 'Abang',
        'Kelas' => 'Informatika',
    ],
    [
        'Nama' => 'Al',
        'Kelas' => 'Rpl 2',
    ]
];

foreach ($aso as $value) {
    echo $value["Nama"] . "<br>";
    echo $value["Kelas"] . "<br>";
}
echo '<hr>';
$countaso = count($aso);
for ($i=0; $i < $countaso; $i++) { 
    echo $aso[$i]["Nama"] . "<br>";
    echo $aso[$i]["Kelas"] . "<br>";
}
?>