<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Model {
		function __construct(){
			parent::__construct();
		}

	
		function getFAQ(){
			
			return $this->db->get('FAQ')->result_array();
		}
}

?>