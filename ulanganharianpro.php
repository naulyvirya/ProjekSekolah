<?php
    if (isset($_POST['save'])) {
        $nama      = $_POST['nama'];
        $alamat    = $_POST['alamat'];
        $jenkel    = $_POST['jenkel'];
        $tanggal   = $_POST['tgl'];            
        $jml_buku  = $_POST['jml'];
        $judul     = $_POST['judul'];
        $kode      = $_POST['kode'];
        $pengarang = $_POST['pengarang'];
        $jenis     = $_POST['jenis'];
        $harga     = $_POST['harga'];
?>
    <html>
        <head><title>ASSALAAM BOOK STORE ~ Pembelian</title></head>
    <body>
    <fieldset>
       <legend><h3>Invoice Pembayaran</h3></legend>
        <center><b>Data Pembeli</b></center>
    <table>
        <tr>
        <td><b>Nama</b></td>
        <td>:</td>
        <td><?php echo $nama; ?></td>
        </tr>

        <tr>
        <td><b>Alamat</b></td>
        <td>:</td>
        <td><?php echo $alamat; ?></td>
        </tr>

        <tr>
        <td><b>Jenis Kelamin</b></td>
        <td>:</td>
        <td><?php echo $jenkel; ?></td>
        </tr>

        <tr>
        <td><b>Tanggal Pembelian</b></td>
        <td>:</td>
        <td><?php echo $tanggal; ?></td>
        </tr>

        <tr>
        <td><b>Jumlah Pembelian</b></td>
        <td>:</td>
        <td><?php echo $jml_buku . " Buku"; ?></td>
        </tr>
        

    </table><br>
<?php            
    } if (isset($_POST['save'])){
            $judul     = $_POST['judul'];
            $kode      = $_POST['kode'];
            $pengarang = $_POST['pengarang'];
            $jenis     = $_POST['jenis'];
            $harga     = $_POST['harga'];
            echo "<hr>";
            echo "<center><b>Daftar Buku yang Dibeli</b></center>";
            for ($i = 0; $i < count($judul); $i++) {
            echo "<pre>";
            echo "Judul Buku       : " . $judul[$i] . "<br>" . 
                 "Kode Buku        : " . $kode[$i]  . "<br>" .
                 "Pengarang        : " . $pengarang[$i] . "<br>" .
                 "Jenis Buku       : " . $jenis[$i] . "<br>" .
                 "Harga Buku       : Rp " . $harga[$i] . "<br> <hr>";
        }
    
        echo "<center><b>Total Pembayaran</b></center>";
        
        if ($jumlah >= 3) {
            echo "Subtotal         : Rp $harga[$i]<br>";
            echo "Diskon(5%)       : Rp<br>";
            echo "Total Pembayaran : Rp";
        
        }if ($jumlah >= 5) {
            $total = $harga+$harga;
            echo "Subtotal         : Rp $harga[$i]<br>";
            echo "Diskon(10%)      : Rp<br>";
            echo "Total Pembayaran : Rp";
        
        } else {
            echo "Subtotal         : Rp $harga[$i]<br>";
            echo "Diskon           : Rp<br>";
            echo "Total Pembayaran : Rp";
        
        }
        echo "</pre>";
    }
?>
</fieldset>
</body>
</html>