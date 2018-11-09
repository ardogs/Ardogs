<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneraCitaController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('Perro');
			$this->load->model('Cita');
		}

		function index($id_dog = ""){
			$dato['string'] = "aRDog | Generar Cita";

			if($id_dog==null)//argumento nulo desde url
				redirect('AdoptaController');

			$Info['Perro']=$this->Perro->getPerroById($id_dog);//cargando informacion del perro
			$Info['Benef']=$this->Perro->getBenefPerroById($Info['Perro']['Id_Beneficencia']);

			if(!$Info['Perro'])//argumento por url invalido
				redirect('AdoptaController');

			if($Info['Perro']['Status']!='2')//perro no disponible (adoptado o con cita)
				redirect('AdoptaController');

			$this->form_validation->set_rules('Fecha','','trim|xss_clean|required|regex_match[/^[0-9]{4}-[0-9]{2}-[0-9]{2}+$/]');
			$this->form_validation->set_rules('Hora', '', 'trim|xss_clean|required|regex_match[/^[0-9]{2}:[0-9]{2}+$/]');

			if($this->form_validation->run()==false){
				$this->load->view('Templates/header',$dato);
				$this->load->view('Adopta/HacerCitaView',$Info);
				$this->load->view('Templates/footer');
			}

			else{
				$this->Perro->updateStatusPerro($Info['Perro']['Id_Perro'],'1');
				$this->Cita->insertNewCita($this->input->post(),$Info['Perro']);

				extract($this->session->userdata('user'));
				$id_cita=$this->Cita->getIdCitaByIdUser($Id_User)['Id_Cita'];
				$this->enviarCorreoCita($id_cita);
				$this->load->view('Adopta/ConfirmarEnvioView');//todo salio bien y se manda mensaje de exito
			}

		}

		function enviarCorreoCita($id_cita){
			extract($this->session->userdata('user'));

			$link= base_url('GeneraCitaController/generarPDF/');
				        	$link.=$id_cita;
			$data['link']=$link;

			$CI = & get_instance();
            $CI->load->helper('url');
            $CI->load->library('session');
            $CI->config->item('base_url');
            $CI->load->library('email');

						$CI->email->initialize(array(
							'protocol' => 'smtp',
							'smtp_host' => 'smtp.sendgrid.net',
							'smtp_user' => 'SENDGRID_USERNAME',
							'smtp_pass' => 'SENDGRID_PASSWORD',
							'smtp_port' => 587,
							'crlf' => "\r\n",
							'newline' => "\r\n"
						));

            $subject = 'Confirmación de Cita (ARDog)';

            $msg = $CI->load->view('Adopta/CorreoAdoptaView',$data, true);

            if($CI->email
                    ->from('johndan478@gmail.com')
                    ->to($Correo)
                    ->subject($subject)
                    ->message($msg)
                    ->set_mailtype('html')
                    ->send()){
            	//$this->load->view('Registro/instruccion');
            }
            else{
              echo $CI->email->print_debugger();
            }
		}

		function generarPDF($id_cita){
			$Data['Cita']=$this->Cita->getCitaInformacionPDF($id_cita);
			$this->load->view('Adopta/AdoptaPrintPDF',$Data);
		}

}

?>
