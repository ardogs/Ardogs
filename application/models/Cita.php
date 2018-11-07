<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cita extends CI_Model {
		function __construct(){
			parent::__construct();
		}

	
		function getCitaById($id_cita){
			
			return $this->db->get_where('Cita',"Id_Cita='$id_cita'")->row_array();
		}

		function getIdCitaByIdUser($id_user){
			//SELECT MAX(Id_Cita) FROM `cita` WHERE Id_User=54;
			$this->db->select("MAX(Id_Cita) as 'Id_Cita'");
			$this->db->from("cita");
			$this->db->where("Id_User=$id_user");

			return $this->db->get()->row_array();
		}

		function getCitaOfUserById($id_user){
			$this->db->select("Perro.Id_Perro,Perro.Nombre_Perro, beneficencia.NombreB, cita.Id_Cita,cita.Fecha, cita.Hora,cita.Status");
			$this->db->from("cita,beneficencia,perro");
			$this->db->where("cita.Id_Beneficencia=beneficencia.Id_Beneficencia AND
							  cita.Id_Perro=perro.Id_Perro AND
						      cita.Id_User=$id_user");
			$this->db->order_by("Cita.Fecha,Cita.Hora,Status DESC,Cita.Id_Cita");

			return $this->db->get()->result_array();
		}

		function getCitasBenefById($id_benef){
			$this->db->select("usuario.Id_User,usuario.Nombre,perro.Id_Perro,Perro.Nombre_Perro, cita.Id_Cita, cita.Fecha, cita.Hora,cita.Status");
			$this->db->from("cita,perro,usuario");
			$this->db->where("cita.Id_User=usuario.Id_User AND
							  cita.Id_Perro=perro.Id_Perro AND
						      cita.Id_Beneficencia=$id_benef");
			$this->db->order_by("Fecha,Hora,Nombre,Id_Cita");

			return $this->db->get()->result_array();
		}

		function getCitaInformacionPDF($id_cita){
			$this->db->select("Id_Cita,Fecha, Hora, NombreB, DireccionB, Nombre_Perro, cita.Id_Perro, Raza, perro.Edad as 'EdadP', 					   perro.Sexo as 'SexoP', Nombre, Ap_Paterno, Ap_Materno, now() as 'Fecha_Actual'");
			$this->db->from("cita,perro,usuario,beneficencia");
			$this->db->where("cita.Id_User=usuario.Id_User AND
							  cita.Id_Perro=perro.Id_Perro AND
						      cita.Id_Beneficencia=beneficencia.Id_Beneficencia AND
						      cita.Id_Cita=$id_cita");
			return $this->db->get()->row_array();
		}

		function insertNewCita($post,$inf_perro){
			unset($post['action']);
			extract($this->session->userdata('user'));
			$post['Id_User']=$Id_User;
			$post['Id_Perro']=$inf_perro['Id_Perro'];
			$post['Id_Beneficencia']=$inf_perro['Id_Beneficencia'];
			$post['Fecha_Creacion']=$this->db->query("SELECT now() as 'fecha';")->row_array()['fecha'];
			$post['Status']=1;//en proceso

			$this->db->insert('Cita',$post);
		}

		function cancelarCitaUser($id_cita){
			$this->db->query("UPDATE Cita SET Status=0 WHERE Id_Cita='$id_cita';");
			$this->db->select('Id_Perro');
			$this->db->from('Cita');
			$this->db->where("Id_Cita='$id_cita'");
			$id_perro=$this->db->get()->row_array()['Id_Perro'];
			$this->db->query("UPDATE Perro SET Status=2 WHERE Id_Perro='$id_perro';");
		}

		function completarCitaUserSinAdoptar($id_cita){
			$this->db->query("UPDATE Cita SET Status=2 WHERE Id_Cita='$id_cita';");
			$this->db->select('Id_Perro');
			$this->db->from('Cita');
			$this->db->where("Id_Cita='$id_cita'");
			$id_perro=$this->db->get()->row_array()['Id_Perro'];
			$this->db->query("UPDATE Perro SET Status=2 WHERE Id_Perro='$id_perro';");
		}

		function completarCitaUserConAdoptar($id_cita){
			$this->db->query("UPDATE Cita SET Status=2 WHERE Id_Cita='$id_cita';");
			$this->db->select('Id_Perro');
			$this->db->from('Cita');
			$this->db->where("Id_Cita='$id_cita'");
			$id_perro=$this->db->get()->row_array()['Id_Perro'];
			$this->db->query("UPDATE Perro SET Status=0 WHERE Id_Perro='$id_perro';");
		}
/*
SELECT Perro.Nombre_Perro, beneficencia.NombreB, cita.Fecha, cita.Hora,cita.Status  
FROM cita,perro,beneficencia 
WHERE cita.Id_Beneficencia=beneficencia.Id_Beneficencia AND
	  cita.Id_Perro=perro.Id_Perro AND
      cita.Id_User=54

SELECT usuario.Id_User,usuario.Nombre,perro.Id_Perro,Perro.Nombre_Perro, cita.Fecha, cita.Hora,cita.Status  
FROM cita,perro,usuario 
WHERE cita.Id_User=usuario.Id_User AND
	  cita.Id_Perro=perro.Id_Perro AND
      cita.Id_Beneficencia=5
      ORDER BY Fecha,Hora,Nombre

SELECT Id_Cita,Fecha, Hora, NombreB, DireccionB, Nombre_Perro, cita.Id_Perro, Raza, perro.Edad as 'EdadP', perro.Sexo as 'SexoP', Nombre, Ap_Paterno, Ap_Materno, now() as 'Fecha_Actual'
FROM cita,perro,usuario,beneficencia
WHERE cita.Id_User=usuario.Id_User AND
	  cita.Id_Perro=perro.Id_Perro AND
      cita.Id_Beneficencia=beneficencia.Id_Beneficencia AND
      cita.Id_Cita=15;
*/		
}

?>