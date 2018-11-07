<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('FAQ');
		}
	
		function index(){
			$dato['string'] = "aRDog | FAQ";
			$dato2['FAQ']= $this->FAQ->getFAQ();

			$this->load->view('Templates/header',$dato);
			$this->load->view('FAQ/FAQView',$dato2);
			$this->load->view('Templates/footer');
		}
}

?>