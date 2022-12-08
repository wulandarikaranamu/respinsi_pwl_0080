<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Pendaftaran Mahasiswa</title>
</head>
<body>
    <h3>Menambah Data Pendaftaran Mahasiswa</h3>
    <form action="prodi_tambah_action.php" method="post" >
        <table>
            <tr>
                <td>Kode Prodi</td>
                <td>:</td>
                <td><input type="number" name="prodi_kode" id=""></td>
            </tr>
            <tr>
                <td>Nama Prodi</td>
                <td>:</td>
                <td><input type="text" name="prodi_nama" id=""></td>
            </tr>
            <tr>
                <td>Jenjang Prodi</td>
                <td>:</td>
                <td><input type="text" name="prodi_jenjang" id=""></td>
            </tr>
            <tr>
                <td>Status Prodi</td>
                <td>:</td>
                <td><input type="text" name="prodi_status" id=""></td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" name="batal" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>