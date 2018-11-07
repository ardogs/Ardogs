<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroController extends CI_Controller {
		function __construct(){
			parent::__construct();
			
			header( 'X-Content-Type-Options: nosniff' );
    		header( 'X-Frame-Options: SAMEORIGIN' );
    		header( 'X-XSS-Protection: 1;mode=block' );
    		date_default_timezone_set('America/Mexico_City');
    		setlocale(LC_ALL,"es_MX");

			$this->load->model('Usuario');
			$this->load->library('form_validation');
			$this->load->helper('form');	
			$this->load->helper('url');

		}
	
	function index(){
			if($this->session->userdata('user')){
                redirect('InicioController');
            }
        	else{

				$dato['string'] = "aRDog | Registro";
				$this->form_validation->set_rules('Tipo_User', '','required');
				//Switch tipo user
				switch ($this->input->post('Tipo_User')){

					case '1':
						$this->form_validation->set_rules('Ap_Paterno'		, '', 'trim|xss_clean|required|alpha');
					    $this->form_validation->set_rules('Ap_Materno'		, '', 'trim|xss_clean|required|alpha');
					    $this->form_validation->set_rules('Nombre'			, '', 'trim|xss_clean|required'); 
					    $this->form_validation->set_rules('Passwd'			, '', 'trim|xss_clean|required|min_length[8]');
					    $this->form_validation->set_rules('Passwd2'			, '', 'trim|xss_clean|required|matches[Passwd]');
					    $this->form_validation->set_rules('Correo'			, '', 'trim|xss_clean|required|is_unique[Usuario.Correo]|valid_email');
					    $this->form_validation->set_rules('Fecha_Nacimiento', '', 'trim|xss_clean|required|regex_match[/^[0-9]{4}-[0-9]{2}-[0-9]{2}+$/]');
					    $this->form_validation->set_rules('Sexo'			, '', 'trim|xss_clean|required');
					    $this->form_validation->set_rules('Telefono'		, '', 'trim|xss_clean|required|is_natural|exact_length[10]');

				        if($this->form_validation->run()==false){
							$this->load->view('Templates/header', $dato);
							$this->load->view('Registro/RegistroView');
							$this->load->view('Templates/footer'); 	
				        }
				        else{

				        	$this->Usuario->insertUserTemp($this->input->post());
				        	$id = $this->Usuario->getIdUserByCorreo($this->input->post('Correo'));
				        	$link= base_url('RegistroController/activarCuentaUser/');
				        	$link.=$id;
	                        $data['link']= $link;
				        	
				        	$CI = & get_instance();
	                        $CI->load->helper('url');
	                        $CI->load->library('session');
	                        $CI->config->item('base_url');
	                        $CI->load->library('email');

	                        $subject = 'Bienvenido a ARDOG';

	                        $msg = $CI->load->view('Registro/confirmar_mail',$data, true);

	                        if($CI->email
	                                ->from('johndan478@gmail.com')
	                                ->to($this->input->post('Correo'))
	                                ->subject($subject)
	                                ->message($msg)
	                                ->set_mailtype('html')
	                                ->send()){
	                        	$this->load->view('Registro/instruccion');
	                        }
	                        else{
	                          echo $CI->email->print_debugger();
	                        }
								                                
				        }
					break;

					case '2':
						$this->form_validation->set_rules('Ap_Paterno'		, '', 'trim|xss_clean|required|alpha');
					    $this->form_validation->set_rules('Ap_Materno'		, '', 'trim|xss_clean|required|alpha');
					    $this->form_validation->set_rules('Nombre'			, '', 'trim|xss_clean|required'); 
					    $this->form_validation->set_rules('Passwd'			, '', 'trim|xss_clean|required|min_length[8]');
					    $this->form_validation->set_rules('Passwd2'			, '', 'trim|xss_clean|required|matches[Passwd]');
					    $this->form_validation->set_rules('Correo'			, '', 'trim|xss_clean|required|is_unique[Usuario.Correo]|valid_email');
					    $this->form_validation->set_rules('Fecha_Nacimiento', '', 'trim|xss_clean|required|regex_match[/^[0-9]{4}-[0-9]{2}-[0-9]{2}+$/]');
					    $this->form_validation->set_rules('Sexo'			, '', 'trim|xss_clean|required');
					    $this->form_validation->set_rules('Telefono'		, '', 'trim|xss_clean|required|is_natural|exact_length[10]');

				        $this->form_validation->set_rules('NombreB'			, '', 'trim|xss_clean|required');
				        
				        $this->form_validation->set_rules('DireccionB'		, '', 'trim|xss_clean|required'); 
				        $this->form_validation->set_rules('DescripcionB'	, '', 'trim|xss_clean|required');
				        $this->form_validation->set_rules('TelefonoB'		, '', 'trim|xss_clean|required|is_natural|exact_length[10]');

				        if($this->form_validation->run()==false){
							$this->load->view('Templates/header', $dato);
							$this->load->view('Registro/RegistroView');
							$this->load->view('Templates/footer'); 	
				        }
				        else{

				        	$this->Usuario->insertUserBenefTemp($this->input->post());
				        	$id = $this->Usuario->getIdUserByCorreo($this->input->post('Correo'));
				        	$link= base_url('RegistroController/activarCuentaUserBenef/');
				        	$link.=$id;
	                        
	                        $data['link']=$link;
				        	
				        	$CI = & get_instance();
	                        $CI->load->helper('url');
	                        $CI->load->library('session');
	                        $CI->config->item('base_url');
	                        $CI->load->library('email');

	                        $subject = 'Bienvenido a mi ARDOG';

	                        $msg = $CI->load->view('Registro/confirmar_mail',$data, true);

	                        if($CI->email
	                                ->from('johndan478@gmail.com')
	                                ->to($this->input->post('Correo'))
	                                ->subject($subject)
	                                ->message($msg)
	                                ->set_mailtype('html')
	                                ->send()){
	                        	$this->load->view('Registro/instruccion');
	                        }
	                        else{
	                        	echo $CI->email->print_debugger();
	                        }
							
				        }
					break;	

					default:
				 		$this->load->view('Templates/header', $dato);
						$this->load->view('Registro/RegistroView');
						$this->load->view('Templates/footer'); 	
					break;
				}
		}
	}

		function activarCuentaUser($id){

			$result = $this->Usuario->confirmarCuentaById($id);

			if($result){

					if($this->Usuario->getStatusById($id)==0){
						$this->Usuario->updateUserToActive($result['Correo']);

					    $this->load->view('Registro/mensaje');	
					}
					else{
						$this->load->view('Registro/post_confirmacion');
					}
					
			}
			else{
					$this->load->view('Registro/error_mensaje');
			}
		}
		

		function activarCuentaUserBenef($id){

			$result = $this->Usuario->confirmarCuentaById($id);

			if($result){

					if($this->Usuario->getStatusById($id)==0){
						$this->Usuario->updateUserBenefToActive($result['Correo']);

						$this->load->view('Registro/mensaje');
					}	
					else{
						$this->load->view('Registro/post_confirmacion');
					}
			}
			else{
				$this->load->view('Registro/error_mensaje');
			}
		}

		
		
	//http://localhost/aplicacion/RegistroController/activarCuentaUser/54
	//http://localhost/aplicacion/RegistroController/activarCuentaUserBenef/54
}

?>
