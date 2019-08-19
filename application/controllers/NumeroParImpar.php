<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NumeroParImpar extends CI_Controller {

	
	public function index()
	{
		$this->load->view('NumeroParImpar');
	}

	public function verificarParImpar(){

         if ($_POST["numero"]%2==0) {
            echo " numero  par";
        }else{
        	echo " numero  impar";
    	}

}        }






		
     

 

 
         
