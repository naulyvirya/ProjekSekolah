<?php
if (isset($_POST['simpan'])) {
    $nama    = $_POST['nama'];
    $nis     = $_POST['nis'];
    $alamat  = $_POST['alamat'];
    $jenkel  = $_POST['jenkel'];
    $agama   = $_POST['agama'];
    $sekolah = $_POST['sekolah'];
    $ortu    = $_POST['ortu'];
    $ijazah  = $_POST['ijazah'];
    $email   = $_POST['email'];

    echo "<pre>";
    echo "Nama                        : <b>$nama</b></br>";
    echo "NIS                         : <b>$nis</b></br>";
    echo "Alamat                      : <b>$alamat</b></br>";
    echo "Jenis Kelamin               : <b>$jenkel</b><br>";
    echo "Agama                       : <b>$agama</b><br>";
    echo "Asal Sekolah                : <b>$sekolah</b><br>";
    echo "Nama Orang Tua/Wali         : <b>$ortu</b><br>";
    echo "Mata Pelajaran yang Disukai : ";
    if (isset($_POST['MTK'])) {
        echo "-<b>". $_POST['MTK'] ."</b><br>";
    }
    if (isset($_POST['IPA'])) {
        echo "-<b>". $_POST['IPA'] ."</b><br>";
    }
    if (isset($_POST['IPS'])) {
        echo "-<b>". $_POST['IPS'] ."</b><br>";
    }
    if (isset($_POST['ING'])) {
        echo "-<b>". $_POST['ING'] ."</b><br>";
    }
    if (isset($_POST['ID'])) {
        echo "-<b>". $_POST['ID'] ."</b><br>";
    }
    if (isset($_POST['PAI'])) {
        echo "-<b>". $_POST['PAI'] ."</b><br>";
    }

    echo "Email                       : <b>$email</b><br>";
    echo "Total Nilai Ijazah SMK      : <b>$ijazah</b><br>";
    if ($ijazah > 23) {
        echo "  ". "<b>Selamat, Anda Lulus!</b>";
    } else {
        echo "  ". "<b>Maaf, Anda Tidak Lulus.</b>";
    }

    echo "</pre>";
}
?>