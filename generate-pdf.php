<?php

require('fpdf/fpdf.php');

// Get the form data
$name = $_POST['name'];
$roll = $_POST['roll'];
$dob = $_POST['dob'];
$district = $_POST['district'];

// Create the PDF document
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Name:');
$pdf->Cell(50,10,$name);
$pdf->Ln();
$pdf->Cell(40,10,'Roll:');
$pdf->Cell(50,10,$roll);
$pdf->Ln();
$pdf->Cell(40,10,'Date of Birth:');
$pdf->Cell(50,10,$dob);
$pdf->Ln();
$pdf->Cell(40,10,'District:');
$pdf->Cell(50,10,$district);
$pdf->Output('F', 'output.pdf');

// Return the URL of the PDF file
echo 'http://' . $_SERVER['HTTP_HOST'] . '/output.pdf';

?>
