<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendafataran Mahasiswa</title>
</head>
<body>
    <p align="left">Anda Login Sebagai "<?php echo 
    $_SESSION['username']; ?>" | Klik <a href="../logout.php">disini</a> untuk logout.</p>
    
    <h3>Data Mahasiswa</h3>
    <p><a href="pendaftaran_tambah.php">[Tambah Data Mahasiswa]</a> </p>
    <table width='900' border='1' cellpadding="5" cellspacing="0">
        <tr>
            <th width='30'>No.</th>
            <th width='100'>Id</th>
            <th width='200'>Nama Lengkap</th>
            <th width='350'>Foto Mahasiswa</th>
            <th width='300'>Username</th>
            <th width='100'>Password</th>
            <th width='350'>Alamat</th>
            <th width='200'>Jenis Kelamin</th>
            <th width='200'>Tempat Lahir</th>
            <th width='200'>Tanggal Lahir</th>
            <th width='200'>Kode Prodi</th>
            <th width='200'>UKM</th>
            <th width='200'>IPK</th>
            <th width='200'>Biaya</th>
            <th width="100">Kelola</th>
        </tr>
    <?php
    include "../config.php";

    $sql="SELECT * FROM tblpendaftaran ORDER BY pendaftaran_id";

    $hasil = mysqli_query($config, $sql);
    $no=1; 
    while ($data=mysqli_fetch_array($hasil)){
    ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data['pendaftaran_id']?></td>
            <td><?php echo $data['pendaftaran_namalengkap']?></td>
            <td><img src="<?php echo $data['foto_mahasiswa']?>" 
            width="100%"></td>
            <td><?php echo $data['username']?></td>
            <td><?php echo $data['password']?></td>
            <td><?php echo $data['pendaftaran_alamat']?></td>
            <td><?php echo $data['pendaftaran_gender']?></td>
            <td><?php echo $data['pendaftaran_tempatlahir']?></td>
            <td><?php echo $data['pendaftaran_tanggallahir']?></td>
            <td><?php echo $data['prodi_kode']?></td>
            <td><?php echo $data['pendaftaran_ukm']?></td>
            <td><?php echo $data['pendaftaran_ipk']?></td>
            <td><?php echo $data['pendaftaran_biaya']?></td>
            <td align="center"><a href="pendaftaran_edit.php?pendaftaran_id=<?php echo 
            $data['pendaftaran_id'];?>">Edit</a>|<a href="pendaftaran_hapus.php?pendaftaran_id=<?php echo 
            $data['pendaftaran_id'];?>">Hapus</a>
            </td>
        </tr>
    <?php 
        $no++;
    }
    echo "</table>";
    ?>
</body>
</html>