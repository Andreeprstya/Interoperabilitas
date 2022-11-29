<?php 
session_start();

include 'koneksi.php';

$nik = $_POST['nik'];

$data = mysqli_query($koneksi,"select * from tb_ktp where nik='$nik'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['nik'] = $nik;
	$_SESSION['status'] = "login";
	
	header("location:form_login.php?pesan=login");
}else {
	header("location:form_login.php?pesan=gagal");
}
?>