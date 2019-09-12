<!DOCTYPE html>
<html lang="en">
<head><title>PENGGAJIAN</title></head>
<body>
    <fieldset>
    <legend><h2>Penggajian Karyawan</h2></legend>
<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $jenkel = $_POST['jenkel'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];
        $jabatan = $_POST['jabatan'];
        $potongan = $_POST['potongan'];
        $golongan = $_POST['golongan'];

    echo "<pre>";
    echo "<h3 align = 'right'>". date("d/m/Y H:i:s")."</h3>";
    echo "<b>BIODATA</b><br>";
    echo "Nama           : $nama<br>";
    echo "NIP            : $nip<br>";
    echo "Jenis Kelamin  : $jenkel<br>";
    echo "Alamat         : $alamat<br>";
    echo "Status         : $status<br>";
    echo "Jabatan        : $jabatan<br>";
    echo "Potongan       : $potongan";
    
    if (isset($_POST['BPJS'])) {
        echo "- ".$_POST['BPJS'] . "<br>";
    }
    if (isset($_POST['Koperasi'])) {
        echo "- ".$_POST['Koperasi'] . "<br>";
    }
    if (isset($_POST['Jamsostek'])) {
        echo "- ".$_POST['Jamsostek'] . "<br>";
    }

    echo "Golongan       : $golongan<br>";

    echo "<hr>";
    echo "<b>KETERANGAN</b><br>";

    if ($golongan == "A1") {
        $gol = 250000;
    } else if($golongan == "A2"){
        $gol = 200000;
    } else if($golongan == "A3"){
        $gol = 150000;
    }

    if ($status == "Menikah"){
        $stat = 100000;
    } elseif ($status == "Belum Menikah") {
        $stat = 50000;
    }

    if ($jabatan == "HRD") {
        $jab = 5000000;
    } elseif ($jabatan == "Manager") {
        $jab = 4500000;
    } elseif ($jabatan == "Staff") {
        $jab = 3000000;
    } elseif ($jabatan == "Karyawan") {
        $jab = 2500000;
    }

    if ("BPJS") {
        $pot = 250000;
        $po = $pot; 
    } elseif ("Koperasi") {
        $pot2 = 150000;
        $po = $pot + $pot2;
    } elseif ("Jamsostek") {
        $pot3 = 150000;
        $po = $pot + $pot2 + $pot3;
    }

    if ($golongan == "A1") {
        echo "A1                       : Rp 250.000";
    }
    if ($golongan == "A2") {
        echo "A2                       : Rp 200.000";
    }
    if ($golongan == "A3") {
        echo "A3                       : Rp 150.000";
    }
    echo "<br>";

    if ($status == "Menikah") {
        echo "$status                  : Rp 100.000";
    } 
    else if ($status == "Belum Menikah") {
        echo "$status            : Rp 50.000";
    }
    echo "<br>";

    if ($jabatan == "HRD") {
        echo "HRD                      : Rp 5.000.000";
    }
    else if ($jabatan == "Manager") {
        echo "Manager              : Rp 4.500.000";
    }
    else if ($jabatan == "Staff") {
        echo "Staff                : Rp 3.000.000";
    }
    else if ($jabatan == "Karyawan") {
        echo "Karyawan             : Rp 2.500.000";
    }
    echo "<br>";

    if (isset($_POST['BPJS'])) {
        echo "BPJS                     : Rp 250.000,<br>";
    }
    if (isset($_POST['Koperasi'])) {
        echo "Koperasi                 : Rp 150.000,<br>";
    }
    if (isset($_POST['Jamsostek'])) {
        echo "Jamsostek                : Rp 150.000";
    }

    echo "<br>";
    $kotor=$gol+$stat+$jab-$po;
    $pajak=($kotor*2.5/100);
    $bersih=$kotor - $pajak;
    echo "Gaji Kotor               : Rp $kotor<br>";
    echo "Gaji Bersih              : Rp $bersih<br>";
    echo "Pajak Penghasilan (2.5%) : Rp $pajak";
    echo "</pre>";
}
?>
</fieldset>
</body>
</html>