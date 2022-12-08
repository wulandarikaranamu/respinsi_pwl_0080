<?php 
include "../config.php";

$nama_lengkap = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["gender"];
$prodi = $_POST["prodi"];
$tempatlahir = $_POST["tempat_lahir"];
$tanggal = $_POST["tanggal_lahir"];
$ukm = $_POST["ukm"];
$ipk = $_POST["ipk"];
$biaya = '50000';

$diskon = 'x';
if($ipk > 3.75) {
    $diskon = "Besar Diskon 30%";
    $biaya = $biaya - ($biaya*0.3);
} elseif($ipk > 3.5) {
    $diskon = "Besar Diskon 20%";
    $biaya = $biaya - ($biaya*0.2);

} else {
    $diskon = "Besar Diskon 10%";
    $biaya = $biaya - ($biaya*0.1) ;
}
 //nama file temporary yang akan disimpan di server
$lokasifile = $_FILES['gambar']['tmp_name']; 

 //membaca nama file yang akan diupload
$namafile = $_FILES['gambar']['name']; 
 
 //folder penyimpanan berkas/file
$uploaddir = "uploads/"; 

 //menggabungkan nama folder dan nama file
$uploadfile = $uploaddir.$namafile; 
 
//Jika file berhasil di upload
if(move_uploaded_file($lokasifile, $uploadfile)){
echo "Nama File : <b>$namafile</b> sukses di upload";

//masukkan informasi file ke dalam database
$sql = "INSERT INTO tblpendaftaran VALUES('','$nama_lengkap','$uploadfile', '$username', '$password', 
'$alamat', '$jenis_kelamin', '$tempatlahir', '$tanggal','$prodi', '$ukm', '$ipk', '$biaya')";


$hasil = mysqli_query($config, $sql);
// header('location:halaman_pendaftaran.php');
} else {
echo "File gagal disimpan";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <table>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?php echo $nama_lengkap ?></td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><?php echo $username ?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><?php echo $password ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $alamat ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $jenis_kelamin ?></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td>:</td>
        <td><?php echo $prodi ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?php echo $tempatlahir ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $tanggal ?></td>
    </tr>
    <tr>
        <td>UKM yang Diminati</td>
        <td>:</td>
        <td><?php echo $ukm ?></td>
    </tr>
    <tr>
        <td>IPK</td>
        <td>:</td>
        <td><?php echo $ipk ?></td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td>:</td>
        <td><?php echo $diskon; ?></td>
    </tr>
    <tr>
        <td>Biaya Pendaftaran</td>
        <td>:</td>
        <td><?php echo $biaya ?></td>
    </tr>
    </table>
    <a href="halaman_pendaftaran.php">Lihat Daftar</a>
</body>
</html>

