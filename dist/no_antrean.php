<!DOCTYPE html>
<html>
<head>
    <title>Nomor Antrian Surat Sehat</title>
    <style type="text/css">
        body{
            font-family: sans-serif;
        }
        table{
            margin: 20px auto;
            border-collapse: collapse;
        }
        table th,
        table td{
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }
        a{
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
            .tengah{
                text-align: center;
            }
</style>
</head>
<body>
<?php 
    session_start();       
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['nik']==""){
        header("location:index.php?pesan=gagal");
        }                  
?>
 <?php
 // koneksi database
    include 'koneksi.php';
 // menampilkan data pegawai
    $data = mysqli_query($koneksi,"SELECT * from tb_antrian ORDER BY id DESC LIMIT 1");
    while($d = mysqli_fetch_array($data)){
 ?>
 <center>
    <font size="5"><b>Antrian Surat Sehat</b></font><br>
    <font size="15"><b><?php echo $d['no_antrean']; ?></b></font><br>
    <font size="2"><?php echo $d['tanggal']; ?></font><br>
    <font size="2"><?php echo $d['waktu']; ?></font><br>
 </center>
 <?php 
 }
 ?>
<script>
 window.print();
</script>
</body>
</html>