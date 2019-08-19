<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promedio extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Promedio');
	}

	public function calcularPromedio() {
		   
		$alumnos = array(     
			$_POST['alumno1'],
			$_POST['alumno2'],
			$_POST['alumno3'],
			$_POST['alumno4'],
			$_POST['alumno5'],
			$_POST['alumno6'],
			$_POST['alumno7'],
			$_POST['alumno8'],
			$_POST['alumno9'],
			$_POST['alumno10'],
			$_POST['alumno11'],
			$_POST['alumno12'],
			$_POST['alumno13'],
			$_POST['alumno14'],
			$_POST['alumno15'],
			$_POST['alumno16'],
			$_POST['alumno17'],
			$_POST['alumno18'],
			$_POST['alumno19'],
			$_POST['alumno20'],
			$_POST['alumno21'],
			$_POST['alumno22'],
			$_POST['alumno23'],
			$_POST['alumno24'],
			$_POST['alumno25'],				
		);
		$sumatoria = 0;
		for ($i=0; $i < count($alumnos); $i++) { 
			$sumatoria = $sumatoria + $alumnos[$i];
		} 
		echo "la sumatoria es:".$sumatoria;
		 $promedio = $sumatoria / count($alumnos);
		 echo "el promedio es:".$promedio;
	}   

		
		


}			
