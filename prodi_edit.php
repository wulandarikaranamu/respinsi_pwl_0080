<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data Mahasiswa</title>
</head>
<body>
    <?php 
    include "config.php";
    $kode = $_GET['prodi_kode'];

    $sql = "SELECT * FROM tblprodi WHERE prodi_kode='$kode'";
    $hasil = mysqli_query($config, $sql);
    $data = mysqli_fetch_assoc($hasil);
    ?>

    <h3>Edit Data Mahasiswa</h3>
    <form action="prodi_edit_action.php" method="post">
        <table>
            <tr>
                <td>Kode Prodi</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="prodi_kode" value="<?php echo $kode; ?>">
                    <input type="number" name="prodi_kode" value="<?php echo $data['prodi_kode']?>" readonly >
                </td>
            </tr>
            <tr>
                <td>Nama Prodi</td>
                <td>:</td>
                <td>
                    <select name="prodi_nama" >
                    <option value="<?=$data['prodi_nama']; ?>" selected> <?= $data['prodi_nama']; ?></option>
                    <option value="" readonly disabled>---------------</option>
                        <?php 
                        include "config.php";
                        $kode = $_GET['prodi_kode'];

                        $sql = "SELECT * FROM tblprodi";
                        $hasil = mysqli_query($config, $sql);
                        while($x = mysqli_fetch_array($hasil)) {
                            ?>
                            <option value="<?=$x['prodi_nama']; ?>"> <?= $x['prodi_nama']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Prodi Jenjang</td>
                <td>:</td>
                <td>
                    <select  name="prodi_jenjang">
                    <option value="<?=$data['prodi_jenjang']; ?>" selected> <?= $data['prodi_jenjang']; ?></option>
                    <option value="" readonly disabled>---------------</option>
                        <?php 
                        include "config.php";
                        $kode = $_GET['prodi_kode'];

                        $sql = "SELECT * FROM tblprodi";
                        $hasil = mysqli_query($config, $sql);
                        while($prod = mysqli_fetch_array($hasil)) {
                            ?>
                            <option value="<?=$prod['prodi_jenjang']; ?>"> <?= $prod['prodi_jenjang']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Prodi Status</td>
                <td>:</td>
                <td>
                    <input type="text" name="prodi_status" value="<?= $data['prodi_status']; ?>">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="ubah" value="Simpan">
                    <input type="submit" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>