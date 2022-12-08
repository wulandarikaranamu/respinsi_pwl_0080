<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Mahasiswa</title>
</head>
<body>

<?php 
    include '../config.php';
    $pendaftaran = $_GET['pendaftaran_id'];
    $sql = "SELECT * FROM tblpendaftaran WHERE pendaftaran_id='$pendaftaran'";
    $hasil = mysqli_query($config, $sql);
    while ($data = mysqli_fetch_array($hasil)) {
?>

<h2>Edit Mahasiswa</h2>
    <form method="POST" action="pendaftaran_edit_action.php" enctype="multipart/form-data">
<table>
    <input type="hidden" name="pendaftaran_id" value=<?php echo $data['pendaftaran_id'];?>">
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nama" size="50" value="<?php echo $data['pendaftaran_namalengkap'];?>"></td>
    </tr>
    <tr>
        <td>Foto Mahasiswa</td>
        <td>:</td>
        <td>
            <input type="file" name="gambar"> 
            <p><?php echo $data['foto_mahasiswa']?></p>
        </td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" size="50" value="<?php echo $_SESSION['username'];?>" readonly></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" size="60" value="<?php echo $data['password']?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" rows="6" cols="45" ><?php echo $data['pendaftaran_alamat']; ?></textarea></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td> <br>
        <td>
        <input type="radio" name="gender" <?php  echo $data['pendaftaran_gender'] === 'laki-laki' ? 'checked': '' ?> >Laki-laki<br>
        <input type="radio" name="gender" <?php  echo $data['pendaftaran_gender'] === 'perempuan' ? 'checked': '' ?>>Perempuan<br>
        </td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input type="text" name="tempat_lahir" size="50" value="<?php echo $data['pendaftaran_tempatlahir'];?>"></td>
    </tr> 
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir" size="50" value="<?php echo $data['pendaftaran_tanggallahir'];?>"></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td>:</td>
        <td>
            <select name="prodi_kode" id="">
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
        <td>UKM yang Diminati</td>
        <td>:</td> <br>
        <td>
        <input type="radio" name="ukm" <?php  echo $data['pendaftaran_ukm'] === 'olahraga' ? 'checked': '' ?> >Olahraga<br>
        <input type="radio" name="ukm" <?php  echo $data['pendaftaran_ukm'] === 'keilmuan' ? 'checked': '' ?>>Keilmuan<br>
        <input type="radio" name="ukm" <?php  echo $data['pendaftaran_ukm'] === 'musik' ? 'checked': '' ?>>Musik dan Seni<br>
        </td>
    </tr>
    <tr>
        <td>IPK</td>
        <td>:</td>
        <td><input type="number" name="ipk" size="50" value="<?php echo $data['pendaftaran_ipk'];?>"></td>
    </tr>
    <tr>
        <td>Biaya Pendaftaran</td>
        <td>:</td>
        <td><input type="number" name="biaya" size="50" value="<?php echo $data['pendaftaran_biaya'];?>"></td>
    </tr>
    <tr>
        <td colspan="3"><input type="submit" name="simpan" value="simpan">
        <input type="reset" value="reset"></td>
    </tr>
</table>
    </form>
    <?php 
    }?>
</body>
</html>