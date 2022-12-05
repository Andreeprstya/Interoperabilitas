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
    
    $data = mysqli_query($koneksi,"SELECT * from tb_antrian ORDER BY no_antrean DESC LIMIT 1");
    while($d = mysqli_fetch_array($data)){

    if($tanggal == date("Y-m-d")){
            $no=$d['no_antrean']+1;
    }else{
        $no=1;
    }
    }
    mysqli_query($koneksi, "INSERT INTO tb_antrian values('','$no','$nik','$tujuan','$tanggal','$jam')");

    header("location: no_antrean.php");
?>