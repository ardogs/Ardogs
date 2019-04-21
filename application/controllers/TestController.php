<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $dato['string'] = "aRDog | El test";
        $this->load->view('Templates/header', $dato);
        $this->load->view('Adopta/TestView');
        $this->load->view('Templates/footer');
    }
}
