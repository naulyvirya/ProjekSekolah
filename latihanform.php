<!DOCTYPE html>
<html>
<head>
    <title>Biodata Sederhana</title>
</head>
<body>
     <FORM ACTION="" METHOD="POST" name="Input">
        Nama   : <input type="text" name="nama" required><br>
        Kelas  : <input type="text" name="kelas"><br>
        Alamat : <input type="text" name="alamat"><br>
        Hobi   : <input type="text" name="hobi"><br><br>
        <input type="submit" name="Input" value="Input">
        <input type="reset" name="Reset">
    </FORM>
</body>
</html>

<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $hobi = $_POST['hobi'];
        echo "Nama     : <b>$nama</b><br> Kelas  : <b>$kelas</b><br>";
        echo "Alamat   : <b>$alamat</b><br> Hobi : <b>$hobi</b>";
    } else {
        echo "Maaf kode yang anda masukkan salah.";
    }
?>