<?php 
//dans ce fichier générer un pdf 
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$post['title']);
$pdf->Output();
?>

