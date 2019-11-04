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
    <title>Halaman 2 ~ Luas Lingkaran</title>
</head>
<body>
    <nav>
        <a href="hal1.php">Halaman 1</a>|
        <a href="hal2.php">Halaman 2</a>|
        <a href="hal3.php">Halaman 3</a>|
        <a href="logout.php">Logout</a>|
    </nav>
    <fieldset>
    <legend><h2>Luas Lingkaran</h2></legend>
    <form action="" method="post">
    Masukkan Jari-jari Lingkaran : <input type="number" name="jari"><br>
    <input type="submit" value="Save" name="save">
    <button><a href="tampilandepan.php">Back</a></button>
    </form>
    <?php
    if (isset($_POST['save'])) {
        $r = $_POST['jari'];

        function lingkaran($jari, $luas)
        {
            echo "Jari-jari : $jari<br>";
            echo "Luas Segitiga : $luas";
        }
        $v = 3.14;
        $luas = $v * ($r * $r);
        lingkaran($r, $luas);
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