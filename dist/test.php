<?php
require('fpdf.php');

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->Image("http://localhost/interoperabilitas/dist/qr_generator.php?code=content", 25,229,25,25, "png");

$pdf->Output();