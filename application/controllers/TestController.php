<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{
    function __construct(){
        parent::__construct();

        $this->load->library('form_validation');
  			$this->load->helper('form');
  			$this->load->helper('url');
    }

    function index(){
        $dato['string'] = "aRDog | El Test";

          $this->form_validation->set_rules('R1'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R2'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R3'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R4'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R5'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R6'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R7'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R8'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R9'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R10'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R11'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R12'		, '', 'trim|xss_clean|required');
          $this->form_validation->set_rules('R13'		, '', 'trim|xss_clean|required');

          if($this->form_validation->run()==false){
            $this->load->view('Templates/header', $dato);
            $this->load->view('Adopta/TestView');
            $this->load->view('Templates/footer');
          }
          else{
            $actualizacion['testComplete'] = "Completado";
            $actualizacion['puntuacion'] =
                                        $this->input->post('R1')+
                                        $this->input->post('R2')+
                                        $this->input->post('R3')+
                                        $this->input->post('R4')+
                                        $this->input->post('R5')+
                                        $this->input->post('R6')+
                                        $this->input->post('R7')+
                                        $this->input->post('R8')+
                                        $this->input->post('R9')+
                                        $this->input->post('R10')+
                                        $this->input->post('R11')+
                                        $this->input->post('R12')+
                                        $this->input->post('R13');

            if($actualizacion['puntuacion']<20){
              $actualizacion['mensaje']="Definitivamente no estás preparado para tener una mascota y darle todo los cuidados que requiere. Cuando hayas hecho ciertos ajustes en tu casa o planes, vuelve a realizar este test. ";
            }
            else if($actualizacion['puntuacion']>=21 && $actualizacion['puntuacion']<=33){
                  $actualizacion['mensaje']="Tu estilo de vida no es el óptimo para tener una mascota. Te sugerimos que pienses muy bien si estas seguro de querer adoptar una mascota.";
                 }
                 else if($actualizacion['puntuacion']>=34 && $actualizacion['puntuacion']<=46){
                        $actualizacion['mensaje']="Cuentas con las características necesarias y tienes una estructura sólida para adoptar un perrito, pero puedes esforzarte para que este lo mejor posible.";
                      }
                      else{
                        $actualizacion['mensaje']="Eres el candidato idóneo para adoptar una mascota. ¡Que esperas!. Busca opciones y dale la oportunidad a un animalito de ser feliz.";
                      }

            $this->load->view('Templates/header', $dato);
            $this->load->view('Adopta/TestView',$actualizacion);
            $this->load->view('Templates/footer');
          }

    }
}
?>
