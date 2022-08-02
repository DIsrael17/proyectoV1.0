<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Codedge\response;

class FormatoController1 extends Controller
{

    public function Formato()
    {
    	//Encabezado
    	$pdf = new Fpdf('P','mm','A4'); //creo una hoja de tamaño A4
    	$pdf->addPage();//agrego una página.
    	//especificar el tipo de fuente
    	$pdf->SetFont('Arial','B','15');
        $pdf->Cell(20,6,$pdf->Image(public_path("img/icono.png"),10,5,35,20));
        $pdf->Cell(70,6,"",0,0,'C');
        $pdf->Cell(20,6,"CONCENTRADO DE CALIFICACIONES",0,0,'C');//el un es el borde de la celda
        $pdf->SetFont('Arial','B','10');
        $pdf->Ln(5.9);
        $pdf->Ln(5.9);
        $pdf->Ln(5.9);

        
        $pdf->Ln(5.9);
    	$pdf->Cell(35,6,'Alumno',1,0,'C');//el uno es el borde de la celda
        $pdf->Cell(45,6,'Junio',1,0,'C');
    	$pdf->Cell(45,6,'JULIO',1,0,'C');
        $pdf->Cell(45,6,'Agosto',1,0,'C');
    	$pdf->Cell(10,6,'',0,0,'C');
    	$pdf->Ln(5.9);
    	// ---------------------------------------------------------
        $pdf->Cell(35,6,"",0,0,'C');//el uno es el borde de la celda
    	$pdf->SetFont('Arial','B','7');
    	// ----------------------------------
        $pdf->Cell(15,6,'Empresario',0,0,'C');
        $pdf->Cell(15,6,'Academico',0,0,'C'); //Junio
        $pdf->Cell(15,6,'Promedio',0,0,'C');
        // ------------------------------------
        $pdf->Cell(15,6,'Empresario',0,0,'C');
        $pdf->Cell(15,6,'Academico',0,0,'C'); //Julio
        $pdf->Cell(15,6,'Promedio',0,0,'C');
        // -------------------------------------
        $pdf->Cell(15,6,'Empresario',0,0,'C');
        $pdf->Cell(15,6,'Academico',0,0,'C'); //Agosto
        $pdf->Cell(15,6,'Promedio',0,0,'C');
        // -----------------------------------
        $pdf->Cell(20,6,'Promedio final',1,0,'C');
        // -----------------------------------
        // ---------------------------------------------------------
        $pdf->SetFont('Arial','B','7');

        //forStar
		for ($i=1; $i <10 ; $i++) 
		{ 
			 	$pdf->setFillColor(255,164,032); //color de una celda se tiene que habilitar a true
		        $pdf->Ln();
		        $pdf->Cell(35,6,"",0,0,'C');//el uno es el borde de la celda
		    	// ----------------------------------
		        $pdf->Cell(15,6,'',1,0,'C');
		        $pdf->Cell(15,6,'',1,0,'C'); //Junio
		        $pdf->Cell(15,6,'',1,0,'C');
		        // ------------------------------------
		        $pdf->Cell(15,6,'',1,0,'C');
		        $pdf->Cell(15,6,'',1,0,'C'); //Julio
		        $pdf->Cell(15,6,'',1,0,'C');
		        // -------------------------------------
		        $pdf->Cell(15,6,'',1,0,'C');
		        $pdf->Cell(15,6,'',1,0,'C'); //Agosto
		        $pdf->Cell(15,6,'',1,0,'C');
		        // -----------------------------------
		        $pdf->Cell(20,6,'',1,0,'C',true);
		        $pdf->Ln();
    	}

        //endFOR
        
        // ----------------------------------
    	$pdf->SetFont('Arial','B','10');

    	// $pdf->Ln(5.9);//brincar linea
    	$pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetFont('Arial','','10');
        $pdf->Cell(30,6,'ENTREGA A DIRECCION DE CARRERAS',0,0,'');
        $pdf->Ln();
        $pdf->Ln();
        // ----------------------------------------------------------
        $pdf->Cell(30,6,'JUNIO',0,0,'');
        $pdf->Ln();
        $pdf->Cell(30,6,'','',0,'');
        $pdf->Cell(50,6,'FIRMA','T',0,'');
        $pdf->Cell(30,6,'','',0,'');
        $pdf->Cell(50,6,'FECHA','T',0,'');
        $pdf->Ln();
        $pdf->Ln();
        // ----------------------------------------------------------
        $pdf->Cell(30,6,'JULIO',0,0,'');
        $pdf->Ln();
        $pdf->Cell(30,6,'','',0,'');
        $pdf->Cell(50,6,'FIRMA','T',0,'');
        $pdf->Cell(30,6,'','',0,'');
        $pdf->Cell(50,6,'FECHA','T',0,'');
        $pdf->Ln();
        $pdf->Ln();
        // ----------------------------------------------------------
        $pdf->Cell(30,6,'AGOSTO',0,0,'');
        $pdf->Ln();
        $pdf->Cell(30,6,'','',0,'');
        $pdf->Cell(50,6,'FIRMA','T',0,'');
        $pdf->Cell(30,6,'','',0,'');
        $pdf->Cell(50,6,'FECHA','T',0,'');
        // ----------------------------------------------------------

    	$pdf->Output();
    	exit;

    }
}
