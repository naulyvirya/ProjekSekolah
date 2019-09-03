<?php
$id = 80;
$mtk = 70;
$rata = ($id+$mtk)/2;
$ket = Lulus;

if($id > 100){
echo "Nama : Nauly Virya Huska Putra<br>
        Kelas  : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika  : $mtk<br>
        Nilai Rata - rata : -<br>
        Keterangan        : <strong>Maaf Nilai Yang Anda Masukkan Tidak Sesuai.</strong><br>
        Grade             : -";
} elseif ($mtk > 100) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas  : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika  : $mtk<br>
        Nilai Rata - rata : -<br>
        Keterangan        : <strong>Maaf Nilai Yang Anda Masukkan Tidak Sesuai.</strong><br>
        Grade             : -";
} elseif ($id < 0) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas  : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika  : $mtk<br>
        Nilai Rata - rata : -<br>
        Keterangan        : <strong>Maaf Nilai Yang Anda Masukkan Tidak Sesuai.</strong><br>
        Grade             : -";
} elseif ($mtk < 0) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas  : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika  : $mtk<br>
        Nilai Rata - rata : -<br>
        Keterangan        : <strong>Maaf Nilai Yang Anda Masukkan Tidak Sesuai.</strong><br>
        Grade             : -";
} elseif ($rata > 100) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas  : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika  : $mtk<br>
        Nilai Rata - rata : -<br>
        Keterangan        : <strong>Nilai Yang Anda Masukkan Tidak Sesuai.</strong><br>
        Grade             : -";
} elseif ($rata < 0) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas  : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika  : $mtk<br>
        Nilai Rata - rata : -<br>
        Keterangan        : <strong>Nilai Yang Anda Masukkan Tidak Sesuai.</strong><br>
        Grade             : -";
}

elseif ($rata >= 85) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas  : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika  : $mtk<br>
        Nilai Rata - rata : $rata<br>
        Keterangan        : <strong>$ket</strong><br>
        Grade             : <strong>A</strong>";
} elseif ($rata >= 75) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika : $mtk<br>
        Nilai Rata - rata : $rata<br>
        Keterangan : <strong>$ket</strong><br>
        Grade : <strong>B</strong>";
} elseif ($rata >= 60) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika : $mtk<br>
        Nilai Rata - rata : $rata<br>
        Keterangan : <strong>Tidak Lulus</strong><br>
        Grade : <strong>C</strong>";
} elseif ($rata <= 60) {
    echo "Nama : Nauly Virya Huska Putra<br>
        Kelas : 11 RPL 2<br>
        <hr>
        Nilai B.Indonesia : $id<br>
        Nilai Matematika : $mtk<br>
        Nilai Rata - rata : $rata<br>
        Keterangan : <strong>Tidak Lulus</strong><br>
        Grade : <strong>D</strong>";
} else {
    
}
?>