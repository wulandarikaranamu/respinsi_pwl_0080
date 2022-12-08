<?php 

include "config.php";

$kodeprodi = $_POST['prodi_kode'];
$namaprodi = $_POST['prodi_nama'];
$prodijenjang = $_POST['prodi_jenjang'];
$prodistatus = $_POST['prodi_status'];

$sql = "INSERT INTO tblprodi (prodi_kode, prodi_nama, prodi_jenjang, prodi_status) 
        VALUES ('$kodeprodi', '$namaprodi', '$prodijenjang', '$prodistatus');";

$hasil = mysqli_query($config, $sql);

if($hasil) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data gagal disimpan";
}
?>

<br> kembali ke <a href="halaman_prodi.php">Halaman User</a>