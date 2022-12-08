<?php 
session_start();
include "../config.php";

$pendaftaran_id = $_POST["pendaftaran_id"];
$nama_lengkap = $_POST["nama"];
$lokasifile = $_FILES['gambar']['tmp_name'];
$username = $_POST["username"];
$password = $_POST["password"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["gender"];
$tempatlahir = $_POST["tempat_lahir"];
$tanggal = $_POST["tanggal_lahir"];
$prodi = $_POST["prodi_kode"];
$ukm = $_POST["ukm"];
$ipk = $_POST["ipk"];
$biaya = $_POST["biaya"];

 //nama file temporary yang akan disimpan di server
$namafile = $_FILES['gambar']['name']; 

 //membaca nama file yang akan diupload
$uploaddir = "uploads/"; //folder penyimpanan berkas/file
$uploadfile = $uploaddir.$namafile; 

 //menggabungkan nama folder dan nama file
if(!empty($lokasifile)){
    $sql = "UPDATE tblpendaftaran SET pendaftaran_namalengkap='$nama_lengkap', foto_mahasiswa='$uploadfile', username='$username',
    password='$password', pendaftaran_alamat='$alamat', pendaftaran_gender='$jenis_kelamin',pendaftaran_tempatlahir='$tempatlahir', 
    pendaftaran_tanggallahir='$tanggal', prodi_kode='$prodi', pendaftaran_ukm='$ukm', pendaftaran_ipk='$ipk', 
    pendaftaran_biaya='$biaya' WHERE pendaftaran_id='$pendaftaran_id'";
    $hasil = mysqli_query($config, $sql);

    if($hasil){
        move_uploaded_file($lokasifile, $uploadfile);
        echo "<script> alert('Data berhasil diubah')</script>";
        echo "Nama File : <b>$namafile</b> sukses di 
        upload<br/><br/>";
        echo "<a href='halaman_user.php'>kembali</a>";
    } else {
        echo "Data gagal disimpan";
    }
} else {
    $sql = "UPDATE tblpendaftaran SET pendaftaran_alamat='$alamat' WHERE pendaftaran_id='$pendaftaran_id'";
    $hasil = mysqli_query($config, $sql);
    header('location:halaman_pendaftaran.php');
    
    // jenis_kelamin='$jenis_kelamin', username='$username', password='$password',, alamat='$alamat'
}
?>
