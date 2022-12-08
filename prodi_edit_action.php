<?php 
include "config.php";

$kodeprodi = $_POST['prodi_kode'];
$namaprodi = $_POST['prodi_nama'];
$prodijenjang = $_POST['prodi_jenjang'];
$prodistatus = $_POST['prodi_status'];

$sql = "UPDATE tblprodi 
        SET prodi_nama='$namaprodi',
            prodi_jenjang='$prodijenjang',
            prodi_status='$prodistatus'
        WHERE prodi_kode ='$kodeprodi'";

$sql = mysqli_query($config, $sql);

if($sql){
    echo "Data Berhasil Diubah";
}else{
    echo "Data Gagal Diubah";
}
?>

<br>kembali ke <a href="halaman_prodi.php">Halaman Prodi</a>