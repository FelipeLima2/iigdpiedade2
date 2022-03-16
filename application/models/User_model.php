<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * MODEL MODULO CONFIGURAÇÃO PORTAL
 * teste e estudo para posterior implementação
 */
class User_model extends CI_Model {
	
	public function insert_user($data){

		$this->db->insert("users", $data);
		return $this->db->insert_id();
	}

	public function insert_group($data){  
		   
		$this->db->insert("users_groups", $data);
		return $this->db->insert_id();
	}
	public function insert_candidato($data){  
		   
		$this->db->insert("insc_proc_sel", $data);
		return true;
	}
	public function chart_query_lastyear(){
		$query = $this->db
		->query("SELECT count(users.id) as quantidade, 
		MONTH(users.cadinicial) as month, 
		YEAR(users.cadinicial) AS year 
		FROM users
		WHERE MONTH(users.cadinicial)<>0 
		AND YEAR(users.cadinicial) IN ((YEAR(CURDATE())-1))
		GROUP BY MONTH(users.cadinicial), YEAR(users.cadinicial)");

		return $query->result();
	}
	public function chart_query_currentyear(){
		$query = $this->db
		->query("SELECT count(users.id) as quantidade, 
		MONTH(users.cadinicial) as month, 
		YEAR(users.cadinicial) AS year 
		FROM users
		WHERE MONTH(users.cadinicial)<>0 
		AND YEAR(users.cadinicial) IN (YEAR(CURDATE()))
		GROUP BY MONTH(users.cadinicial), YEAR(users.cadinicial)");

		return $query->result();
	}

}