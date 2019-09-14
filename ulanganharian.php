<head>
    <title>BOOK STORE</title>
</head>
<body>
    <form action="" method="POST">
    <center><h2>Assalaam Book Store</h2></center>
    <fieldset>
        <legend><h3>Pembelian Buku</h3></legend>
        <table>
        
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" require></td>
        </tr>

        <tr>
        <td>Alamat</td>
        <td><textarea name="alamat" id="" cols="30" rows="10" require></textarea></td>
        </tr>

        <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jenkel" value="Laki-laki" checked>Laki-laki
            <input type="radio" name="jenkel" value="Perempuan">Perempuan</td>
        </tr>

        <tr>
        <td>Tanggal Beli</td>
        <td><input type="date" name="tgl"></td>
        </tr>

        <tr>
        <td>Jumlah Pembelian Buku</td>
        <td><input type="number" min="1"; name="jml"></td>
        </tr>

        <tr>
        <td></td>
        <td><input type="submit" name="sbm" value="Simpan"></td>
        </tr>
        </form>
             <form action="ulanganharianpro.php" method="post">
    <?php
        if (isset($_POST['sbm'])) {
            $nama      = $_POST['nama'];
            $alamat    = $_POST['alamat'];
            $jenkel    = $_POST['jenkel'];
            $tanggal   = $_POST['tgl'];
            
            $jml_buku=$_POST['jml'];
            for ($i=0; $i < $jml_buku; $i++) {                 
        ?>
       
            <input type="hidden" name="nama" value="<?php  echo $nama ?>">
            <input type="hidden" name="alamat" value="<?php echo  $alamat ?>">
            <input type="hidden" name="jenkel" value="<?php echo $jenkel ?>">
            <input type="hidden" name="tgl" value="<?php echo $tanggal ?>">
            <input type="hidden" name="jml" value="<?php echo $jml_buku ?>">
            <table>
            <tr>
            <td><label for=>Judul Buku</label></td>
                <td><input type="text" name="judul[]"></td>
                <td></td>
            <td><label for=>Kode Buku</label></td>
                <td><input type="text" name="kode[]"></td>
                <td></td>
            <td><label for=>Pengarang Buku</label></td>
                <td><input type="text" name="pengarang[]"></td>
                <td></td>
            <td><label for=>Jenis Buku</label></td>
                <td><select name="jenis[]">
                        <option value="Novel">Novel</option>
                        <option value="Fiksi">Fiksi</option>
                        <option value="Horror">Horror</option>
                        <option value="Cergam">Cerita Bergambar</option>
                        <option value="Komik">Komik</option></select></td>
                <td></td>
            <td><label for=>Harga Buku</label></td>
            <td><input type="number" name="harga[]"></td>
            <td></td>
            </tr>
            </table>

    <?php 
        }
    ?> 
            <tr>
            <input type="submit" name="save" value="Proses">
            <input type="reset" value="Reset">
            </tr>
            </form>
    <?php
        }
    ?>
        </table>
    </fieldset>
    
</body>
</html>