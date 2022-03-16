<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Processo_seletivo extends CI_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('User_model', '', TRUE);
		$this->load->model('Conf_inicial_model', '', TRUE);
	}
	
	public function index($code=null)
	{
		if ($code!=null) {
			$code = base64_decode(urldecode($code));
			$checkcode= $this->Conf_inicial_model->check_code($code);
			if($checkcode){
				$this->load->view('welcome_header');
				$this->load->view('proc_seletivo');
				$this->load->view('welcome_footer');
			} else {
				$this->load->view('welcome_header');
				$this->load->view('welcome_message');
				$this->load->view('welcome_footer');
			}
		} else {
			$this->load->view('welcome_header');
			$this->load->view('welcome_message');
			$this->load->view('welcome_footer');
		}
		
	}

	public function core()
	{
		$nome =  trim($this->input->post('nome'));
		$telefone = trim($this->input->post('telefone'));
		$telefone = str_replace('(', '', $telefone);
		$telefone = str_replace(')', '', $telefone);
		$telefone = str_replace('-', '', $telefone);
		$telefone = str_replace(' ', '', $telefone);
		$dtnascimento = trim($this->input->post('dtnascimento'));
		$profissao = $this->input->post('profissao');

		/* foreach ($profissao as $key => $value) {
			echo $value;
		} */

		$this->form_validation->set_rules("nome", "Nome", 'trim|required');
		$this->form_validation->set_rules("telefone", "Telefone", 'trim|required');

		if($this->form_validation->run()){
			
			$dados = array(
                
                'first_name'   =>$nome,
				'phone'		   => $telefone,
				'dtnascimento' =>$dtnascimento

                );
			$retorno = $this->User_model->insert_user($dados);
			
			
			if($retorno){
				
				$dados = array(
					'user_id'	   =>$retorno,
					'group_id'		   => 2
					);
				$retornogrupo = $this->User_model->insert_group($dados);
				if($retornogrupo){
					foreach ($profissao as $key => $value) {
						$dados = array(
							'profissao'  =>$value,
							'id_user_fk' => $retorno
						);
						$retornainscricao = $this->User_model->insert_candidato($dados);
						if($retornainscricao){
							$this->session->set_flashdata('sucesso', 'Cadastro Realizado com sucesso!');
							$this->index('aW5pY2lv');
						} else {
							$this->session->set_flashdata('erro', 'Cadastro Não Realizado! Tente Novamente!');
							$this->index();
						}
					}
				} else {
					$this->session->set_flashdata('erro', 'Cadastro Não Realizado! Tente Novamente!');
					$this->index();

				}
			} else {
				$this->session->set_flashdata('erro', 'Cadastro Não Realizado! Tente Novamente!');
				$this->index();
			}

		} else {
			$this->index();
		}

		
	}
}
