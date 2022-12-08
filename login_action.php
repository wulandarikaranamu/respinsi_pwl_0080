<?php 
session_start();
include("config.php");

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$sql = "SELECT username FROM tblpendaftaran WHERE username='$username'
        AND password='$password'";

$hasil = mysqli_query($config,$sql);

    if(mysqli_num_rows($hasil)>0){
        $data = mysqli_fetch_array($hasil);
        $_SESSION['username'] = $data['username'];
        header("location:admin/welcome.php");
        exit();
    } else { ?>
        <h2>Maaf..</h2>
        <p>Username dan Password salah. Klik <a href="login.php"> disini </a> untuk kembali login. </p> <?php
    }


?>