<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Codedge\response;

class FormatoController2 extends Controller
{
    public function Formato()
    {
    	//Encabezado
    	$pdf = new Fpdf('P','mm','A4'); //creo una hoja de tamaño A4
    	$pdf->addPage();//agrego una página.
    	//especificar el tipo de fuente
    	$pdf->SetFont('Arial','B','10');

        $pdf->Cell(5,5,$pdf->Image(public_path("img/icono.png"),15,15,15));
        $pdf->Ln(5.9);
        $pdf->Ln(5.9);
        $pdf->Ln(5.9);


        $pdf->Cell(190,6,'Citas generadas',1,0,'C');
        $pdf->Ln(5.9);
    	$pdf->Cell(20,6,'No.',1,0,'C');//el uno es el borde de la celda
        $pdf->Cell(20,6,'Folio_cita',1,0,'C');
    	$pdf->Cell(50,6,'Nombre',1,0,'C');
        $pdf->Cell(50,6,'Apellido_Paterno',1,0,'C');
        $pdf->Cell(50,6,'Apellido_Materno',1,0,'C');
    	$pdf->Cell(10,6,'',0,0,'C');
    	

    	// $pdf->Ln(5.9);//brincar linea
        
            $pdf->Ln(5.9);
            $pdf->Cell(20,6,"{$i}",1,0,'C');//el uno es el borde de la celda
            $pdf->Cell(20,6,'',1,0,'C');
            $pdf->Cell(50,6,'',1,0,'C');
            $pdf->Cell(50,6,'',1,0,'C');
            $pdf->Cell(50,6,'',1,0,'C');
        
    	

        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();

        // $pdf->Cell(20,6,'',0,0,'C');
        $pdf->Cell(40,6,'','',0,'C');
        $pdf->Cell(100,6,'99-94-11-19-58',1,0,'C');
        $pdf->Ln();
        $pdf->Cell(170,6,'Numero telefonico',0,0,'C');
        $pdf->Ln();
        $pdf->Ln();
        $pdf->Cell(40,6,'','',0,'C');
        $pdf->Cell(100,6,'Pinzon Oxte Brando 5o. A TICS','B',0,'C');
        $pdf->Ln();
        $pdf->Cell(170,6,'Firma',0,0,'C');
        

    	$pdf->Output();
    	exit;

    }
}
