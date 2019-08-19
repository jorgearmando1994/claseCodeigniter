<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NumeroMayorMenor extends CI_Controller {

	
	public function index()
	{
		$this->load->view('numeroMayorMenor');
	}

	public function verificarMayorMenor(){
		$numeros = array(
			$_POST['numero1'],
			$_POST['numero2'],
			$_POST['numero3'],
			$_POST['numero4'],
			$_POST['numero5'],
			$_POST['numero6'],
			$_POST['numero7'],
			$_POST['numero8'],
			$_POST['numero9'],
			$_POST['numero10'],			
		);
		//var_dump($numeros);
		//echo count($numeros);
		$mayor = $numeros[0];
		$menor = $numeros[0];
		for ($i=0; $i < count($numeros); $i++) { 
			// si hay un valor menor al asignado toma posicion como numero menor
			if($numeros[$i] < $menor){
				$menor = $numeros[$i];
			}
			//si hay un valor mayor toma la posiciion de mayor
			if($numeros[$i] > $mayor){
				$mayor = $numeros[$i];
			}
			

		}
		echo "El numero menor es :".$menor;
		echo "<br>";
		echo "El numero mayor es :".$mayor;
	}


}
