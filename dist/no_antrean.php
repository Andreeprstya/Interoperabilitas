<?php 
    session_start();       
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['nik']==""){
        header("location:index.php?pesan=gagal");
        }                  
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'ANTRIAN SURAT SEHAT',0,1,'C');
$pdf->Cell(10,7,'',0,1);
 // koneksi database
    include 'koneksi.php';
 // menampilkan data pegawai
    $data = mysqli_query($koneksi,"SELECT * from tb_antrian ORDER BY id DESC LIMIT 1");
    while($d = mysqli_fetch_array($data)){
        $pdf->SetFont('Arial','B',40);
        $pdf->Cell(190,7,$d['no_antrean'],0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','',14);
        $pdf->Cell(190,7,$d['tanggal'],0,1,'C');
        $pdf->SetFont('Arial','',14);
        $pdf->Cell(190,7,$d['waktu'],0,1,'C');
 }
 $pdf->Output();
?>