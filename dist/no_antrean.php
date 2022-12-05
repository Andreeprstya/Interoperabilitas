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
 <table>
 <tr>
 <th>No Antrian</th>
 </tr>
 <?php
 // koneksi database
    include 'koneksi.php';
    $nik = $_SESSION['nik'];
 // menampilkan data pegawai
    $data = mysqli_query($koneksi,"select * from tb_antrian where nik = $nik");
    while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td><?php echo $d['no_antrean']; ?></td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>