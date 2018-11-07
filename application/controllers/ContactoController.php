<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactoController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Usuario');
		}

		function index(){
			$dato['string'] = "aRDog | Contacto";
			$dato2['Contactos']= $this->Usuario->getBeneficencias();

			$this->load->view('Templates/header',$dato);
			$this->load->view('Contacto/ContactoView',$dato2);
			$this->load->view('Templates/footer');
		}
}

?>