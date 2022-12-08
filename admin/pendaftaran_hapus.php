<?php 
include "../config.php";
$pendaftaran = $_GET['pendaftaran_id'];

$sql = "DELETE FROM tblpendaftaran WHERE pendaftaran_id='$pendaftaran'";
mysqli_query($config, $sql);
echo "<script> alert('Data Berhasil Dihapus')</script>";
//header("location:halaman_pendaftaran.php");
?>