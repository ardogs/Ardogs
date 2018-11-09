<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Usuario');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('url');
		}

		function index(){

			//restrict users to go back to login if session has been set
			if($this->session->userdata('user')){
	            redirect('InicioController');
			}
			else{

				$this->form_validation->set_rules('Correo', '', 'trim|xss_clean|required');
				$this->form_validation->set_rules('Passwd', '', 'trim|xss_clean|required');

			        if($this->form_validation->run()==false){
						$this->load->view('Inicio/LoginView');
			        }
			        else{

			        	$data=$this->Usuario->iniciarSesion($this->input->post());

			        	if($data==-1){
							$this->session->set_flashdata('error','¡Error! La cuenta no existe');
							$this->load->view('Inicio/LoginView');
			        	}
			        	elseif ($data==-2) {
							$this->session->set_flashdata('error','¡Error! La contraseña es incorrecta');
							$this->load->view('Inicio/LoginView');
			        	}
			        	else{
			        		$this->session->set_userdata('user', $data);

			        		if($data['Tipo_User']==2){//cargarmos la informacion de la beneficencia en 'benef'
			        			$dataB=$this->Usuario->getBeneficenciaByCorreo($this->input->post('Correo'));
			        			$this->session->set_userdata('benef', $dataB);
			        		}
						    redirect('InicioController');
			        	}

			        }
			}

		}

		function home(){
			//restrict users to go to home if not logged in
			if($this->session->userdata('user')){
	            redirect('InicioController');

			}
			else{
				redirect('InicioController');
			}
		}

		function logout(){
			$this->session->unset_userdata('user');
			$this->session->unset_userdata('benef');
			$this->session->unset_userdata('adopta');
			redirect('InicioController');
		}

        function forgot_password(){
        	if($this->session->userdata('user')){
	            redirect('InicioController');
			}
			else{
				$this->session->set_flashdata('error','');

				$this->form_validation->set_rules('Correo','', 'trim|xss_clean|required');

				if($this->form_validation->run()==false){
					$this->load->view('Inicio/forgot_pass');
		        }
		        else{
		        	$result=$this->Usuario->confirmarCorreo($this->input->post('Correo'));

					if($result){
						$this->Usuario->setPassTemp($this->input->post('Correo'));

							$data['Password']=$this->Usuario->getPassByCorreo($this->input->post('Correo'));

							$CI = & get_instance();
	                        $CI->load->helper('url');
	                        $CI->load->library('session');
	                        $CI->config->item('base_url');
	                        $CI->load->library('email');

													$user = getenv('SENDGRID_USERNAME');
													$pass = getenv('SENDGRID_PASSWORD');

													$CI->email->initialize(array(
													  'protocol' => 'smtp',
													  'smtp_host' => 'smtp.sendgrid.net',
														'smtp_user' => getenv('SENDGRID_USERNAME'),
														'smtp_pass' => getenv('SENDGRID_PASSWORD'),
													  'smtp_port' => 587,
													  'crlf' => "\r\n",
													  'newline' => "\r\n"
													));

	                        $subject = 'ARDOG | Recuperacion de contraseña';

	                        $msg = $CI->load->view('Inicio/recuperacion_mail',$data, true);

	                        if($CI->email
	                                ->from('johndan478@gmail.com')
	                                ->to($this->input->post('Correo'))
	                                ->subject($subject)
	                                ->message($msg)
	                                ->set_mailtype('html')
	                                ->send()){
	                        	redirect('LoginController');
	                        }
	                        else{
	                        	echo $CI->email->print_debugger();
	                        }

					}
					else{
						$this->session->set_flashdata('error','¡Error! El correo no coincide con uno registrado');
						$this->load->view('Inicio/forgot_pass');
					}
		        }
			}
        }


}

?>
