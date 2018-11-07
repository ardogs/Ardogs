 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanelController extends CI_Controller {
		function __construct(){
			parent::__construct();

			$this->load->model('Usuario');
			$this->load->model('Perro');
			$this->load->model('Cita');
			$this->load->library('form_validation');
			$this->load->helper('form');	
			$this->load->helper('url');
			$this->load->helper('file');
		}

		function index(){
            
            if($this->session->userdata('user')){
                extract($this->session->userdata('user'));
                $dato['string'] = "aRDog | Panel de Control";

                switch($Tipo_User){
                	case '1'://Panel de Control Usuario Normal
                		extract($this->session->userdata('user'));
			            $actualizacion['Citas_User']=$this->Cita->getCitaOfUserById($Id_User);
                		
                		$this->form_validation->set_rules('Activa', '','required');
                		//switch para la pestaña activa
			                switch($this->input->post('Activa')){
			                	case '1':// Gestionar Citas Usuario
			                		
			                		$this->load->view('Templates/header',$dato);
						            $this->load->view('Panel/PanelUserView',$actualizacion);
						            $this->load->view('Templates/footer');
	
			                	break;

			                	case '2':////Modificar Informacion Usuario
			                		if($this->actualizarInfoPersonal()>0){
			                		    $actualizacion['actDatosCorrect']="DATOS ACTUALIZADOS";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelUserView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		else{
			                			$actualizacion['actDatosIncorrect']="SIN CAMBIOS";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelUserView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		
			                	break;

			                	case '3'://Cambiar Contraseña
			                		$retorno=$this->cambiarPassword();
			                		if($retorno>0){
			                		    $actualizacion['actPasswdCorrect']="CONTRASEÑA ACTUALIZADA";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelUserView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		else if($retorno==-2){
			                		    $actualizacion['actPasswdIncorrect']="CONTRASEÑA SIN CAMBIOS";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelUserView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		else{
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelUserView');
						                $this->load->view('Templates/footer');
			                		}

		                		break;

		                		default:
		                			$this->load->view('Templates/header',$dato);
					                $this->load->view('Panel/PanelUserView',$actualizacion);
					                $this->load->view('Templates/footer');
			                }  
                	break;

                	case '2'://Panel de Control BENEFICENCIA

                		extract($this->session->userdata('user'));
			            $actualizacion['Citas_Benef']=$this->Cita->getCitasBenefById($Id_Beneficencia);
                		//cargar vista para Beneficencia
                		$this->form_validation->set_rules('Activa', '','required');
                		//switch para la pestaña activa
			                switch($this->input->post('Activa')){
			                	case '1': //Agregar Perro
					                if($this->agregarNuevoPerro()>0){
			                		    $actualizacion['actDatosCorrect']="REGISTRO COMPLETADO";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		else{
			                			$actualizacion['actDatosIncorrect']="ERROR";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                	break;

			                	case '2'://Gestionar Citas
			                		$this->load->view('Templates/header',$dato);
					                $this->load->view('Panel/PanelBenfView',$actualizacion);
					                $this->load->view('Templates/footer');
			                	break;

			                	case '3'://Modificar Informacion Usuario
			                		if($this->actualizarInfoPersonal()>0){
			                		    $actualizacion['actDatosCorrectU']="DATOS ACTUALIZADOS";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		else{
			                			$actualizacion['actDatosIncorrectU']="SIN CAMBIOS";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
		                		break;

		                		case '4'://Modificar Informacion Beneficencia
			                		if($this->actualizarInfoBenef()>0){
			                		    $actualizacion['actDatosCorrectB']="DATOS ACTUALIZADOS";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		else{
			                			$actualizacion['actDatosIncorrectB']="SIN CAMBIOS";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}

		                		break;

		                		case '5'://Cambiar Contraseña
									$retorno=$this->cambiarPassword();
			                		if($retorno>0){
			                		    $actualizacion['actPasswdCorrect']="CONTRASEÑA ACTUALIZADA";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		else if($retorno==-2){
			                		    $actualizacion['actPasswdIncorrect']="CONTRASEÑA SIN CAMBIOS";
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView',$actualizacion);
						                $this->load->view('Templates/footer');
			                		}
			                		else{
			                			$this->load->view('Templates/header',$dato);
						                $this->load->view('Panel/PanelBenfView');
						                $this->load->view('Templates/footer');
			                		}			                		
		                		break;

		                		default://default
		                			$this->load->view('Templates/header',$dato);
					                $this->load->view('Panel/PanelBenfView',$actualizacion);
					                $this->load->view('Templates/footer');
			                }
                	break;
                }    	

                
			}
			else{
                redirect('LoginController');
	
            }
        }


        function cancelarCitaUser($id_cita){
        	$this->Cita->cancelarCitaUser($id_cita);
        	redirect('PanelController');
        }

        function completarCitaUserSinAdoptar($id_cita){
        	$this->Cita->completarCitaUserSinAdoptar($id_cita);
        	redirect('PanelController');
        }

        function completarCitaUserConAdoptar($id_cita){
        	$this->Cita->completarCitaUserConAdoptar($id_cita);
        	redirect('PanelController');
        }

        function actualizarInfoPersonal(){
        	$this->form_validation->set_rules('Ap_Paterno'		, '', 'trim|xss_clean|required|alpha');
		    $this->form_validation->set_rules('Ap_Materno'		, '', 'trim|xss_clean|required|alpha');
		    $this->form_validation->set_rules('Nombre'			, '', 'trim|xss_clean|required'); 
		    $this->form_validation->set_rules('Fecha_Nacimiento', '', 'trim|xss_clean|required|regex_match[/^[0-9]{4}-[0-9]{2}-[0-9]{2}+$/]');
		    $this->form_validation->set_rules('Telefono'		, '', 'trim|xss_clean|required|is_natural|exact_length[10]');

		    if($this->form_validation->run()==false){
				return -1;	
	        }
	        else{
	        	extract($this->session->userdata('user'));//extraemos info de sesión

	        	if($this->Usuario->noExisteCambioActualizaUser($Correo,$this->input->post())){
	        		return -1;
	        	}
	        	else{
	        		$this->Usuario->updateInfoUser($Correo,$this->input->post());//actualizamos nueva info
		        	$dataUser=$this->Usuario->getUsuarioByCorreo($Correo);//obtenemos registro con la info actualizada
		        	$this->session->set_userdata('user', $dataUser);//cargamos la info a la sesión
		        	return 1;
	        	}
	        	
        	}
        }

        function actualizarInfoBenef(){
        	$this->form_validation->set_rules('DireccionB'	, '', 'trim|xss_clean|required'); 
	        $this->form_validation->set_rules('TelefonoB'	, '', 'trim|xss_clean|required|is_natural|exact_length[10]');

		    if($this->form_validation->run()==false){
				return -1;	
	        }
	        else{
	        	extract($this->session->userdata('user'));//extraemos info de sesión

	        	if($this->Usuario->noExisteCambioActualizaBenef($Correo,$this->input->post())){
	        		return -1; //no hay cambios en la info de la beneficencia
	        	}
	        	else{
	        		$this->Usuario->updateInfoBenef($Correo,$this->input->post());//actualizamos nueva info
		        	$dataBenef=$this->Usuario->getBeneficenciaByCorreo($Correo);//obtenemos registro con la info actualizada
		        	$this->session->set_userdata('benef', $dataBenef);//cargamos la info a la sesión
		        	return 1;
	        	}
	        	
        	}
        }

        function cambiarPassword(){
        	$this->form_validation->set_rules('PasswdActual'	, '', 'trim|xss_clean|required');
        	$this->form_validation->set_rules('Passwd'			, '', 'trim|xss_clean|required|min_length[8]');
			$this->form_validation->set_rules('Passwd2'			, '', 'trim|xss_clean|required|matches[Passwd]');

		    if($this->form_validation->run()==false){
				return -1;	
	        }
	        else{
	        	extract($this->session->userdata('user'));//extraemos info de sesión
	        	$confirmarPass=$this->encryption->decrypt($Passwd);

	        	if(($this->input->post('PasswdActual')==$confirmarPass) && ($this->input->post('Passwd')==$confirmarPass)){
	        		
	        		return -2;
	        	}
	        	else if($this->input->post('PasswdActual')==$confirmarPass){
	        		$this->Usuario->updatePasswd($Correo,$this->input->post('Passwd'));
	        		$dataUser=$this->Usuario->getUsuarioByCorreo($Correo);//obtenemos registro con la info
	        		$this->session->set_userdata('user', $dataUser);//cargamos la info a la sesión
	        		return 1;
	        	}
	        	else{
					$this->session->set_flashdata('pass','¡Error! Contraseña Incorrecta');
					return -1;
				}
	        	
        	}
        }

        function agregarNuevoPerro(){
        	$this->form_validation->set_rules('Nombre_Perro', '', 'trim|xss_clean|required');
		    $this->form_validation->set_rules('Raza'		, '', 'trim|xss_clean|required');
		    $this->form_validation->set_rules('Edad'		, '', 'trim|xss_clean|required'); 
		    $this->form_validation->set_rules('DescripcionP'	, '', 'trim|xss_clean|required');
		    $this->form_validation->set_rules('Sexo'		, '', 'trim|xss_clean|required');
		    $this->form_validation->set_rules('Nombre_Foto_File'	, '', 'callback_file_check');
		    
		    if($this->form_validation->run()==false){
				return -1;	
	        }
	        else{
	        	
	        	//Configuración de Subir Archivos
                $config['upload_path']   = './public/Imagenes_Perros/';
                $config['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload', $config);
                //Subiendo el archivo
                if($this->upload->do_upload()) {
                    
                    extract($this->session->userdata('benef'));
	        		$this->Perro->insertNewDog($this->input->post(),$Id_Beneficencia,$this->upload->data()['file_name']);

                }else{
                    return -1;
                }

	        	return 1;
        	}
        }

    public function file_check($str){
        $allowed_mime_type_arr = array('application/pdf','image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['userfile']['name']);
        if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Solo se aceptan estos formatos: pdf/gif/jpg/png.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Por favor elija una imagen');
            return false;
        }
    }

}
?>
