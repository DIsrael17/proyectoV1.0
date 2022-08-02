<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validaController extends Controller
{
    function valida(Request $request)
    {
	    //Recibiendo usuario y contraseña por un request
		$usuario = $_REQUEST['usuario'];
		$contrasenia = $_REQUEST['contrasenia'];

		//Realizando la conexion con la base de datos
		$conexion = mysqli_connect("localhost","root","","tattoonew");

		$respuesta = $conexion->query("select * from administradores where curp = '$usuario' and contrasenia ='$contrasenia'");

		$datos = array();
		foreach ($respuesta as $row)
		 {
			$datos[] = $row;
		}

		echo json_encode($datos);
    }
}
