<?php
require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetMargins(30,20,20);
$pdf->SetFont('times','',16);
$pdf->Cell(40,10,'SOLVENCIA');
$pdf->Ln(10);
$pdf->Multicell(190,10,'Quien suscribe, Coordinador del Laboratorio de Computación Nikolaus Walczuch, de la Escuela de Ingenería de Sistema de  la Universidad de los Andes, hace constar por medio de la presente que  $nombre $apellido , portador de la cédula de identidad  No. $nacionalidad- $cedula , se encuentra solvente con dicho Laboratorio.');
$pdf->Output();
exit;
?>
