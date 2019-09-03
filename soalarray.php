<?php
$aso = [
    [
        'Judul' => '<strong>Belajar PHP & MySQL untuk pemula</strong><br>',
        'Penulis' => 'Admin SMK',
    ],
    [
        'Judul' => '<strong>Tutorial PHP dari Nol hingga Mahir</strong><br>',
        'Penulis' => 'Admin SMK',
    ],
    [
        'Judul' => '<strong>Membuat Aplikasi Web dengan PHP</strong><br>',
        'Penulis' => 'SMK Assalaam',
    ]
];

foreach ($aso as $value => $index) {
        echo $value . " : " . $index . "<br>";
        echo $value . " : " . $index . "<br>";
        echo '<hr>';
    
}
?>