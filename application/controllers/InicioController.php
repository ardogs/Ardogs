<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}
	
		function index(){
			$dato['string'] = "aRDog | Inicio";

			$this->load->view('Templates/header',$dato);
			$this->load->view('Inicio/InicioView');
			$this->load->view('Templates/footer');
		}
}

?>
