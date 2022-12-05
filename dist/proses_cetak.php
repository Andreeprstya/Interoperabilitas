<?php 
 	$tujuan =$_POST['tujuan'];
    $nik = $_POST['nik'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

 	echo "Bahasa Pemrograman yang Anda Sukai adalah $tujuan dengan nik $nik pada $tanggal pukul $jam";
?>

<?php
    include 'koneksi.php';

    $tujuan =$_POST['tujuan'];
    $nik = $_POST['nik'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    if($tanggal == date("Y-m-d")){
        $no = 0;
        $no++;
    }

    mysqli_query($koneksi, "INSERT INTO tb_antrian values('','$no','$nik','$tujuan','$tanggal','$jam')");

    header("location: no_antrean.php");
?>