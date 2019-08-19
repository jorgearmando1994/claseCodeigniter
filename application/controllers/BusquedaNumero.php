<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusquedaNumero extends CI_Controller {

	
	public function index()
	{
		$this->load->view("BusquedaNumero");
	}

	public function hallarNumero(){
		$numeros = array(rand(-100,100),rand(-100,100),rand(-100,100));			
		
		for ($i=0; $i < count($numeros); $i++) {

			if($numeros[$i] < 0){

                
				echo "El numero ".($i+1)." es negativo";

			} elseif($numeros[$i] < 20){

				echo "El numero ".($i+1)." es menor que 20";
				
			} elseif($numeros[$i] > 50){

				echo "El numero ".($i+1)." es mayor que 50";
			}							
		}	echo "</br>";
	}	


		
		

			

		


}
