<?php
require 'fpdf/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica','B',14);

$pdf->Cell(0,10,'Laporan Data Pendaftaran Siswa',0,1,'C');

$pdf->Ln(5);
$pdf->SetFont('Helvetica','',11);
$pdf->Cell(0,8,'Aplikasi PPDB Online berbasis PHP dan MySQL',0,1);

$pdf->Output();
