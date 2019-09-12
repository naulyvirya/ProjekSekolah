<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM PENGGAJIAN</title>
</head>
<body>
    <form action="gaji.php" method="POST">
    <center><h1>FORM PENGGAJIAN</h1></center>
    <fieldset>
    <legend><b>DATA</b></legend>
    <table>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" colspan="40" require></td>
        </tr>

        <tr>
        <td>NIP</td>
        <td><input type="number" name="nip" require></td>
        </tr>

        <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jenkel" value="Laki-laki" checked>Laki - laki
            <input type="radio" name="jenkel" value="Perempuan">Perempuan</td>
        </tr>

        <tr>
        <td>Alamat</td>
        <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
        </tr>

        <tr>
        <td>Status</td>
        <td><select name="status">
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option></select>
        </td>
        </tr>

        <tr>
        <td>Jabatan</td>
        <td><select name="jabatan">
            <option value="HRD">HRD</option>
            <option value="Manager">Manager</option>
            <option value="Staff">Staff</option>
            <option value="Karyawan">Karyawan</option></select>
        </td>
        </tr>

        <tr>
        <td>Potongan</td>
        <td><input type="checkbox" name="BPJS" value="BPJS" checked>BPJS
            <input type="checkbox" name="Koperasi" value="Koperasi">Koperasi
            <input type="checkbox" name="Jamsostek" value="Jamsostek">Jamsostek
        </td>
        </tr>

        <tr>
        <td>Golongan</td>
        <td><select name="golongan">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option></select>
        </td>
        </tr>

        <tr>
        <td></td>
        <td><button name="simpan">Save</button>
        <button type="reset">Reset</button></<button></td>
        </tr>
    </table>
    </form>
    </fieldset>
</body>
</html>