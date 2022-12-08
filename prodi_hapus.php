<?php 
    include "config.php";
    $kode = $_GET['prodi_kode'];

    $sql = "DELETE FROM tblprodi WHERE prodi_kode ='$kode'";
    $hasil = mysqli_query($config, $sql);

    echo "<script>alert('Data Berhasil Dihapus')</script>";
    //header("location:halaman_prodi.php");
    // header("location:halamanuser2.php") ini dimatikan untuk membuat alertnya muncul


?>