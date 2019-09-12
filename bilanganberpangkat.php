<html>
    <head><title>Form Bilangan Berpangkat</title></head>
<body>
    <form action="" method="get" name="input">
    <center><h2>Form Bilangan Berpangkat</h2></center>
    <fieldset>
    <legend>Bilangan Berpangkat</legend>
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
            <form action="formberpangkatpro.php" method="POST">
            <table>
            <tr>
            <td><label for=>Masukkan Bilangan</label></td>
            <td><input type="number" name="bilangan[]"></td>
            <td></td>
            <td><label for=>Masukkan Pangkat Bilangan</label></td>
            <td><input type="number" name="pangkat[]"></td>
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