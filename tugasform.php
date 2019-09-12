<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas</title>
</head>
<body>
    <center><h1>Tugas Formulir</h1></center>
    <form action="tugasformpro.php" method="POST" name="Input">
    <table>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" colspan="40" required></td>
        </tr>
        
        <tr>
        <td>NIS</td>
        <td><input type="number" name="nis" required></td>
        </tr>

        <tr>
        <td>Alamat</td>
        <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
        </tr>
    
        <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jenkel" value="Laki-laki" checked>Laki-laki
            <input type="radio" name="jenkel" value="Perempuan">Perempuan</<input>
        </tr>

        <tr>
        <td>Agama</td>
        <td><select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Protestand">Protestand</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Katholik">Katholik</option>
                        </select></td>
        </tr>
        
        <tr>
        <td>Asal Sekolah</td>
        <td><input type="text" name="sekolah" require></td>
        </tr>

        <tr>
        <td>Nama Orang Tua/Wali</td>
        <td><input type="text" name="ortu" require><br></td>
        </tr>

        <tr>
        <td>Mata Pelajaran yang Disukai</td>
        <td><input type="checkbox" name="MTK" value="MTK" checked> Matematika
            <input type="checkbox" name="IPA" value="IPA"> Ilmu Pengetahuan Alam
            <input type="checkbox" name="IPS" value="IPS"> Sejarah
            <input type="checkbox" name="ING" value="ING"> Bahasa Inggris
            <input type="checkbox" name="ID" value="ID"> Bahasa Indonesia
            <input type="checkbox" name="PAI" value="PAI"> Pendidikan Agama Islam</td>
        </tr>

        <tr>
        <td>Total Nilai Ijazah SMK</td>
        <td><input type="number" name="ijazah" require><br></td>
        </tr>

        <tr>
        <td>Email</td>
        <td><input type="email" name="email" require></td>
        </tr>
        
        <tr>
        <td></td>
        <td><button name="simpan">Save</button>
        <button type="reset">Reset</button></<button></td>
        </tr>
    </table>    
    </form>
</body>
</html>