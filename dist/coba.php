<?php
//include master file
require('fpdf.php');

class pdf extends FPDF{
    function letak($gambar){
    //memasukkan gambar untuk header
    $this->Image($gambar,25,9,25,25);
    //menggeser posisi sekarang
    }

    function judul($teks1, $teks3, $teks4, $teks5){
        $this->Cell(15);
        $this->SetFont('Times','B','15');
        $this->Cell(0,5,$teks1,0,1,'C');
        $this->Cell(15);
        $this->SetFont('Times','B','20');
        $this->Cell(0,9,$teks3,0,1,'C');
        $this->Cell(15);
        $this->SetFont('Times','I','8');
        $this->Cell(0,5,$teks4,0,1,'C');
        $this->Cell(15);
        $this->SetFont('Times','I','14');
        $this->Cell(0,5,$teks5,0,1,'C');
    }

    function garis(){
        $this->SetLineWidth(1);
        $this->Line(20,36,190,36);
        $this->SetLineWidth(0);
        $this->Line(20,37,190,37);
    }

    function waktu()
    {
        $this->Cell(80);
        $this->SetFont('Times','','10');
        $this->Cell(0,15,'Waktu Pemeriksaan :',0,1,'C');
    }

    function cover($text1, $text2, $text3, $text4)
    {
        $this->Cell(12);
        $this->SetFont('Times','B','18');
        $this->Cell(0,5,$text1,0,1,'C');
        $this->Cell(12);
        $this->SetFont('Times','I','14');
        $this->Cell(0,8,$text2,0,1,'C');
        $this->Cell(10,7,'',0,1);
        $this->Cell(10);
        $this->SetFont('Times','','14');
        $this->Cell(20,10,$text3,0,1,);
        $this->Cell(10);
        $this->Cell(20,1,$text4,0,1,);
    }

}

//instantisasi objek
$pdf = new PDF();

//Mulai dokumen
$pdf->AddPage('P', 'A4');
//meletakkan gambar
$pdf->letak('pngegg.png');
//meletakkan judul disamping logo diatas
$pdf->judul('PEMERINTAHAN KABUBAPTEN BADUNG', 'RUMAH SAKIT-SAKITAN','Jln Jalanan No. 100 Kode Pos : 80362 Telp./Fax 08970274763', 'Jimbaran Bali');
//membuat garis ganda tebal dan tipis
$pdf->garis();
$pdf->waktu();
$pdf->cover('SURAT KESEHATAN','Nomor : 445 / RS / TU-I / 2000 / 27.28','Yang bertanda tangan dibawah ini adalah Kepala Rumah Sakit-sakitan Daerah ','Jimbaran Kabupaten Badung menerangkan bahwa :');

$pdf->Output('hasilunsman4pga.pdf','I');