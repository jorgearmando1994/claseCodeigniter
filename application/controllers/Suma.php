<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suma extends CI_Controller {

	
	public function index()
	{
		$this->load->view('viewSuma');
	}

	public function sumarNumeros(){
		$num1 = $_POST["numero1"];
		$num2 = $_POST["numero2"];

		$suma = $num1 + $num2;
		echo $suma;
	}


}
