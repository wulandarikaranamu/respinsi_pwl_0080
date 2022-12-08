<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Inputan</title>
</head>
<body>
    <h3 align="center">Pendaftaran UKM</h3>
    <form action="pendaftaran_tambah_action.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Lengakap</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
             <tr>
                <td>Foto Mahasiswa</td>
                <td>:</td>
                <td><input type="file" name="gambar"> </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="6" cols="60" id=""></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td> <br>
                <td>
                <input type="radio" name="gender" value="laki-laki">Laki-laki<br>
                <input type="radio" name="gender" value="perempuan">Perempuan<br>
                </td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td>
                    <select name="prodi" id="">
                        <?php
                        include '../config.php';

                        $query  = mysqli_query($config, "SELECT * FROM tblprodi");
                        while ($prodi = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?= $prodi["prodi_kode"]; ?>"><?= $prodi["prodi_nama"]; ?></option>

                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>UKM yang Diminati</td>
                <td>:</td> <br>
                <td>
                <input type="radio" name="ukm" value="olahraga">Olahraga<br>
                <input type="radio" name="ukm" value="keilmuan">Keilmuan<br>
                <input type="radio" name="ukm" value="musik">Musik dan Seni<br>
                </td>
            </tr>
            <tr>
                <td>IPK</td>
                <td>:</td>
                <td><input type="text" name="ipk"></td>
            </tr>
            <tr>
                <td>Biaya Pendaftaran</td>
                <td>:</td>
                <td><input type="number" name="biaya" value="50000"></td>
            </tr>
            <tr>
                <td colspan=2>
                <input type="submit" name="simpan" value="Simpan">
                <input type="reset" name="Batal">
            </td>
            </tr>
    </table>
    </form>
</body>
</html>