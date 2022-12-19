<?php 
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_GET['id'];
$status = "1";

mysqli_query($koneksi,"UPDATE tb_antrian set status='$status' WHERE id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:daftar_antrean.php");

?>