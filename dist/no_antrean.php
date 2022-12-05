<!DOCTYPE html>
<html>
<head>
 <title>Nomor Antrian Surat Sehat</title>
</head>
<body>
<?php 
    session_start();
                    
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['nik']==""){
        header("location:index.php?pesan=gagal");
        }
                    
?>

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
 <h3>Antrian Surat Sehat</h3>
 <?php
 // koneksi database
    include 'koneksi.php';
 // menampilkan data pegawai
    $data = mysqli_query($koneksi,"SELECT * from tb_antrian ORDER BY no_antrean DESC LIMIT 1");
    while($d = mysqli_fetch_array($data)){
 ?>
 <tr><?php echo $d['no_antrean']; ?></tr>
 <tr><?php echo $d['tanggal']; ?></tr>
 <tr><?php echo $d['waktu']; ?></tr>
 <?php 
 }
 ?>
<script>
 window.print();
</script>
</body>
</html>