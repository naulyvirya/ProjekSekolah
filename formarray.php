<html>
    <head><title>Form Array</title></head>
<body>
    <form action="" method="get" name="input">
    <center><h2>Form Array</h2></center>
    <fieldset>
    <legend>Form Array</legend>
    Masukkan Jumlah : <input type="number" min="1" name="jml">
    <br>
    <input type="submit" name="Submit" value="Simpan">
    
    </form>
    <hr>
<?php
    if (isset($_GET['Submit'])) {
        $a = $_GET['jml'];
        for ($i=0; $i < $a; $i++) {
        
    ?>
            <form action="formarraypro.php" method="POST">
            <table>
            <tr>
            <td><label for=>Nama</label></td>
            <td><input type="text" name="nama[]" required></td>
            <td></td>
            <td><label for=>Kelas</label></td>
            <td><input type="text" name="kelas[]" required></td>
            </tr></table> 
    <?php
        }    
    ?>
            <tr>
            <input type="submit" name="sbm" value="Simpan">
            <input type="reset" value="Reset">
            </tr>
    <?php
    }
    ?>
            </form>
</fieldset>    
</body>
</html>