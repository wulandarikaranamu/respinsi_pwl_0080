<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa</title>
</head>
<body>
    <h3>Halaman Prodi</h3>
    <p>[<a href="prodi_tambah.php">Tambah Data Prodi</a>]</p>
    <table width="720" border="1" cellpadding="5" cellspasing="0">
        <tr>
            <th width="30">No.</th>
            <th width="30">Kode Prodi</th>
            <th width="30">Nama Prodi</th>
            <th width="30">Jenjang Prodi</th>
            <th width="30">Status Prodi</th>
            <th width='150'>Kelola</th>
        </tr>
    <?php 
    include "config.php";

    $sql = "SELECT prodi_kode, prodi_nama, prodi_jenjang, prodi_status FROM tblprodi ORDER BY prodi_kode";

    $hasil = mysqli_query($config, $sql);
    $no = 1;
    while ($data = mysqli_fetch_array($hasil)) {
?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['prodi_kode']; ?></td>
    <td><?php echo $data['prodi_nama']; ?></td>
    <td><?php echo $data['prodi_jenjang']; ?></td>
    <td><?php echo $data['prodi_status']; ?></td>
    <td align="center">
        <a href="prodi_edit.php?prodi_kode=<?php echo
        $data['prodi_kode'];?>">Edit</a> |
        <a href="prodi_hapus.php?prodi_kode=<?php echo
        $data['prodi_kode'];?>">Hapus</a>
    </td>
</tr>
    
<?php
    $no++;
    }
        echo "</table>";
    ?>
    </table>
</body>
</html>