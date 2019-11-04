<?php
session_start();
if ($_SESSION['akseslogin']) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman 1 ~ Luas Segitiga</title>
</head>
<body>
    <nav>
        <a href="hal1.php">Halaman 1</a>|
        <a href="hal2.php">Halaman 2</a>|
        <a href="hal3.php">Halaman 3</a>|
        <a href="logout.php">Logout</a>|
        
    </nav>
    <fieldset>
    <legend><h2>Luas Segitiga</h2></legend>
    <form action="" method="post">
    Masukkan Alas Segitiga   : <input type="number" name="alas"><br>
    Masukkan Tinggi Segitiga : <input type="number" name="tinggi"><br>
    <input type="submit" value="Save" name="save">
    <button><a href="tampilandepan.php">Back</a></button>
    </form>
    <?php
    if (isset($_POST['save'])) {
        $a = $_POST['alas'];
        $b = $_POST['tinggi'];

        function segitiga($alas, $tinggi, $luas)
        {
            echo "Alas Segitiga : $alas<br>";
            echo "Tinggi Segitiga : $tinggi<br>";
            echo "Luas Segitiga : $luas";
        }
        $luas = ($a * $b) / 2;
        segitiga($a, $b, $luas);
    }
    ?>
    </fieldset>
</body>
</html>

<?php

} else {
    echo "<script> alert('Silahkan Login Terlebih Dahulu');"
        . "window.location.href='login.php'</script>";
}
?>