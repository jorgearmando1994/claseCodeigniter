<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiadelMes extends CI_Controller {

	
	public function index()
	{
		$this->load->view('DiadelMes');
	}

	public function hallarDiadelMes(){
		$dia = $_POST["dia"];
		$dias = array("domingo","lunes","martes","miercoles","jueves","viernes","sabado");
		echo $dias[date('N', strtotime('2018-09-'.$dia))];
	}



}
