<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->library('encryption');
		}

	
		function getUsuarioByCorreo($correo){
			
			return $this->db->get_where('Usuario',"Correo='$correo'")->row_array();
		}

		function getBeneficenciaByCorreo($correo){
			
			return $this->db->get_where('Beneficencia',"CorreoB='$correo'")->row_array();
		}

		function getCorreoById($id){
			return $this->db->get_where('Usuario',"Id_User=$id")->row_array()['Correo'];			
		}

		function getIdBenefByCorreo($correo){
			return $this->db->get_where('Beneficencia',"CorreoB='$correo'")->row_array()['Id_Beneficencia'];
		}

		function getIdUserByCorreo($correo){
    		return $this->db->get_where('Usuario',"Correo='$correo'")->row_array()['Id_User'];
		}

		function getStatusById($id){
			return $this->db->get_where('Usuario',"Id_User=$id")->row_array()['Status'];
		}

		function getPassByCorreo($correo){

			return $this->encryption->decrypt($this->db->get_where('Usuario',"Correo='$correo'")->row_array()['Passwd']);
		}

		function getBeneficencias(){
			return $this->db->get('Beneficencia')->result_array();
		}

		
		function insertUserTemp($post){
			unset($post['Passwd2'],$post['check'],$post['action']);
			$post['Fecha_Creacion']=$this->db->query("SELECT now() as 'fecha';")->row_array()['fecha'];
			$post['Passwd'] = $this->encryption->encrypt($post['Passwd']);
			$this->db->insert('Usuario',$post);
		}

		function insertUserBenefTemp($post){
			$postB=$post; //separa post en user y benef

			//quitar campos de Benef en post de User
			unset(	$post['NombreB'],
					$post['DireccionB'],
					$post['DescripcionB'],
					$post['TelefonoB'],
					$post['Passwd2'],
					$post['check'],
					$post['action']
				);
			//quitar campos de User en post de Benef
			unset(	$postB['Tipo_User'],
					$postB['Ap_Paterno'],
					$postB['Ap_Materno'],
					$postB['Nombre'],
					$postB['Passwd'],
					$postB['Correo'],
					$postB['Fecha_Nacimiento'],
					$postB['Sexo'],
					$postB['Telefono'],
					$postB['Passwd2'],
					$postB['check'],
					$postB['action']
				);

			$postB['CorreoB']=$post['Correo'];//agregando campo de correoB a post Benef
			$postB['Fecha_Creacion']=$this->db->query("SELECT now() as 'fecha';")->row_array()['fecha'];

			$this->db->insert('Beneficencia',$postB);
			
			$post['Id_Beneficencia']=$this->getIdBenefByCorreo($postB['CorreoB']);

			$post['Passwd'] = $this->encryption->encrypt($post['Passwd']);
			$post['Fecha_Creacion']=$this->db->query("SELECT now() as 'fecha';")->row_array()['fecha'];
			$this->db->insert('Usuario',$post);
		}


		function updateUserToActive($correo){
			
			$this->db->query("UPDATE usuario SET Status=1 WHERE Correo='$correo';");
		}

		function updateUserBenefToActive($correo){
			$this->db->query("UPDATE Usuario SET Status=1 WHERE Correo='$correo';");
			$this->db->query("UPDATE Beneficencia SET Status=1 WHERE CorreoB='$correo';");
		}

		function updateInfoUser($correo,$post){
		
			$this->db->query("UPDATE Usuario 
								 SET Ap_Paterno			='".$post['Ap_Paterno']."',			
								 	 Ap_Materno			='".$post['Ap_Materno']."',			
								 	 Nombre 			='".$post['Nombre']."',				
								 	 Fecha_Nacimiento	='".$post['Fecha_Nacimiento']."',	
								 	 Telefono 			='".$post['Telefono']."'			
								 WHERE Correo='$correo';");

		}

		function updateInfoBenef($correo,$post){
		
			$this->db->query("UPDATE Beneficencia 
								 SET DireccionB			='".$post['DireccionB']."',				
								 	 TelefonoB 			='".$post['TelefonoB']."'			
								 WHERE CorreoB='$correo';");

		}

		function updatePasswd($correo,$passw){
			$passw= $this->encryption->encrypt($passw);
			$this->db->query("UPDATE Usuario SET Passwd='$passw' WHERE Correo='$correo';");
		}

		function setPassTemp($correo){
			$passTemp=rand (10000000,99999999);
			$passEncrip= $this->encryption->encrypt($passTemp);
			$this->db->query("UPDATE Usuario SET Passwd='$passEncrip' WHERE Correo='$correo';");
		}

		function confirmarCorreo($correo){
			
			return $this->db->get_where("Usuario","Correo='$correo' AND Status=1")->row_array();
		}

		function confirmarCorreo2($correo){
			
			return $this->db->get_where("Usuario","Correo='$correo'")->row_array();
		}

		function confirmarCuentaById($id){			
			return $this->db->get_where("Usuario","Id_User = $id")->row_array();
		}

		function confirmarPassCorreo($correo, $passw){
			$confirmPass="";
			$result= $this->db->query("SELECT Passwd FROM Usuario WHERE Correo='$correo';")->row_array();
			
            $confirmPass= $this->encryption->decrypt($result['Passwd']);//desencriptando
               	
    		if($passw==$confirmPass){ 
			return $this->db->get_where('Usuario', "Correo='$correo'")->row_array();
    		}
    		else{return -2;}	
		}

		function noExisteCambioActualizaUser($correo,$post){
			return $this->db->get_where("Usuario",
										"Correo='$correo' AND
										Ap_Paterno='".$post['Ap_Paterno']."' AND
										Ap_Materno='".$post['Ap_Materno']."' AND
										Nombre='".$post['Nombre']."' AND
										Fecha_Nacimiento='".$post['Fecha_Nacimiento']."' AND
										Telefono='".$post['Telefono']."'"
										)->row_array();
		}

		function noExisteCambioActualizaBenef($correo,$post){
			return $this->db->get_where("Beneficencia",
										"CorreoB='$correo' AND
										DireccionB='".$post['DireccionB']."' AND
										TelefonoB='".$post['TelefonoB']."'"
										)->row_array();
		}
		


		function iniciarSesion($data){
			$result = $this->confirmarCorreo($data['Correo']);
			
			if($result){
				return $this->confirmarPassCorreo($data['Correo'],$data['Passwd']);
			}
			else{return -1;}
		}
		

		
		function queryPass(){
			
			return $this->db->query('Select Correo, Passwd from Usuario')->result_array();
		}
		
}

?>