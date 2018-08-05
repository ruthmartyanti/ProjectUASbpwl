<?php

// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
//$pdf->Image('logo.png', 63,20,95);
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(190,7,'Politeknik Caltex Riau',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR NAMA BARANG DISTRO IT',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',7);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(15,6,'ID BARANG',1,0);
$pdf->Cell(35,6,'NAMA BARANG',1,0);
$pdf->Cell(22,6,'HARGA BARANG',1,0);
$pdf->Cell(25,6,'SATUAN BARANG',1,0);
$pdf->Cell(90,6,'KETERANGAN BARANG',1,1);



include 'koneksi2.php';
$admin = mysqli_query($connect, "select * from barang");
while ($row = mysqli_fetch_array($admin)){
	$pdf->SetFont('Arial','',7);

    $pdf->Cell(15,6,$row['br_id'],1,0);
    $pdf->Cell(35,6,$row['br_nm'],1,0);
    $pdf->Cell(22,6,$row['br_hrg'],1,0);
    $pdf->Cell(25,6,$row['br_satuan'],1,0); 
	$pdf->Cell(90,6,$row['ket'],1,1);
}
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(325,6,'Pekanbaru',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(325,6,'Ruth Martyanti Sitorus',0,1,'C');
$pdf->Output();


?>
