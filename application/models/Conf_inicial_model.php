<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * MODEL MODULO CONFIGURAÇÃO PORTAL
 * teste e estudo para posterior implementação
 */
class Conf_inicial_model extends CI_Model
{

	public function insert_user($data)
	{

		$this->db->update("conf_inicial", $data);
		return $this->db->insert_id();
	}
	public function show_code()
	{
		$query = $this->db
			->query("SELECT code_conf_inicial FROM conf_inicial");
		$row = $query->row();
		return $row->code_conf_inicial;
		/* foreach ($query->result() as $row) {
			echo $row->code_conf_inicial;
		} */
	}

	public function check_code($code){
		$query = $this->db
			->query("SELECT code_conf_inicial FROM conf_inicial");
		$row = $query->row();
		$rowdb = $row->code_conf_inicial;
		if($rowdb==$code){
			return true;
		} else {
			return false;
		}
	}
}
