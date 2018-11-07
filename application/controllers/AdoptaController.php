<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdoptaController extends CI_Controller {
		function __construct(){
			parent::__construct();

			$this->load->model('Perro');
			$this->load->library('form_validation');
			$this->load->library('pagination');
			$this->load->helper('form');	
			$this->load->helper('url');
			$this->load->helper('file');
		}
	
		function index(){
			

			if($this->session->userdata('user')){
				$dato['string'] = "aRDog | Adopta";			

				if(!$this->session->userdata('adopta'))
					$this->session->set_userdata('adopta',array('filtro' => 1));
				//--------------------------------------------------------------
		        //--------------------------------------------------------------
				// init params
			      $params = array();
			      $limit_per_page = 9;
			      $total_records=0;
	        	  $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0; //indice que ayuda a comprobar la pagina actual


				$this->form_validation->set_rules('Filtro', '', 'trim|xss_clean|required');

				if($this->form_validation->run()==false){//caso cuando se esta paginando con filtro actual
					
			        extract($this->session->userdata('adopta'));
			        //init params
			        $total_records = $this->Perro->getNumRegistrosFiltro($filtro);
			     
			        if ($total_records > 0){
			            // obtener los registros dependiendo de la página actual
			            $params["results"] = $this->Perro->getPaginationPerrosFiltro($filtro,$limit_per_page, $page*$limit_per_page);
			        }

			        $params['Filtro']=$filtro;
		        }
		        else{//caso cuando se selecciona un nuevo filtro

		        	$newDataAdopta=array('filtro' => $this->input->post('Filtro') );
		        	$this->session->set_userdata('adopta', $newDataAdopta);//cargamos la info a la sesión
		        	
		        	//init params
			        $total_records = $this->Perro->getNumRegistrosFiltro($this->input->post('Filtro'));
			     
			        if ($total_records > 0){
			            // obtener los registros dependiendo de la página actual
			            $params["results"] = $this->Perro->getPaginationPerrosFiltro($this->input->post('Filtro'),$limit_per_page, $page*$limit_per_page);
			            
		        	}
		        	$params['Filtro']=$this->input->post('Filtro');
		        }
		        if($total_records>0){

		        	//obtener los datos de la beneficencia a la que pertenece cada perro
			        $params["beneficencias"]=$this->Perro->getBenefPerro($params["results"]);
	        		
	        		$config['base_url'] = base_url() . 'AdoptaController/index';
		            $config['total_rows'] = $total_records;
		            $config['per_page'] = $limit_per_page;
		            $config["uri_segment"] = 3;

	        		// configuracion personalizada de paginación
		            $config['num_links'] = 2;
		            $config['use_page_numbers'] = TRUE;
		            $config['reuse_query_string'] = TRUE;
		             
		            $config['full_tag_open'] = '<ul class="pagination">';
		            $config['full_tag_close'] = '</ul>';
		             
		            $config['first_link'] = 'Primera página';
		            $config['first_tag_open'] = '<li class="waves-effect">';
		            $config['first_tag_close'] = '</li>';
		             
		            $config['last_link'] = 'Última página';
		            $config['last_tag_open'] = '<li class="waves-effect">';
		            $config['last_tag_close'] = '</li>';
		             
		            $config['next_link'] = '<i class="material-icons">chevron_right</i>';
		            $config['next_tag_open'] = '<li class="waves-effect">';
		            $config['next_tag_close'] = '</li>';
		 
		            $config['prev_link'] = '<i class="material-icons">chevron_left</i>';
		            $config['prev_tag_open'] = '<li class="prevlink">';
		            $config['prev_tag_close'] = '</li>';
		 
		            $config['cur_tag_open'] = '<li class="active"><a href="#!">';
		            $config['cur_tag_close'] = '</a></li>';
		 
		            $config['num_tag_open'] = '<li class="waves-effect">';
		            $config['num_tag_close'] = '</li>';

		            $this->pagination->initialize($config);
		                 
		            // construir los link de paginación
		            $params["links"] = $this->pagination->create_links();
		        }
		 		
		     
		        $this->load->view('Templates/header',$dato);
				$this->load->view('Adopta/AdoptaView', $params);
				$this->load->view('Templates/footer');
				//--------------------------------------------------------------
		        //--------------------------------------------------------------

			}
			else{
				
				$this->load->view('Inicio/LoginView');
			}
			
		}
}

?>
