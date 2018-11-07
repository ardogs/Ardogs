<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaDB extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Cita');
			//$this->load->library('encryption');
		}
	
		function index(){
				//$this->load->view('Adopta/ConfirmarEnvioView');			
				
				$Data['Cita']=$this->Cita->getCitaInformacionPDF('15');
				//$this->load->view('Adopta/CorreoAdoptaView',$data);
				$this->load->view('Adopta/AdoptaPrintPDF',$Data);
				/*$results=$this->Usuario->queryPass();
				foreach ($results as $fila) {
					echo "Correo: ".$fila['Correo']."<br>";
					echo "Passwd:" .$this->encryption->decrypt($fila['Passwd'])."<br><br>";
				}*/

		}

		
}

?>
