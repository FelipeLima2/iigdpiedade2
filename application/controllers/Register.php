<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
            redirect('login','refresh');
		}
	}

	
	public function index()
	{

		
		$this->load->view('modal/header');
		$this->load->view('register/index');
		$this->load->view('modal/footer');
		
		
	}
	public function modulo($id=null)
	{

		
		
		if(isset($id)){
			$dados['id_usuario']=$id;
			$dados['titulo']="Editar Cadastro";
		} else {
			$dados['titulo']="Novo Cadastro";
		}
			
			
		
		$this->load->view('modal/header');
		$this->load->view('register/modulo',$dados);
		$this->load->view('modal/footer');
		
		
	}
	public function core(){
		$nome =  trim($this->input->post('nome'));
		$telefone = trim($this->input->post('telefone'));
		$telefone = str_replace('(', '', $telefone);
		$telefone = str_replace(')', '', $telefone);
		$telefone = str_replace('-', '', $telefone);
		$telefone = str_replace(' ', '', $telefone);
		$dtnasc = trim($this->input->post('dtnasc'));
		$login = trim($this->input->post('login'));
		$senha = trim($this->input->post('senha'));
		$id_usario = $this->input->post('id_usuario');

		$this->form_validation->set_rules("login", "Login", 'trim|required');
		$this->form_validation->set_rules("senha", "Senha", 'trim|required');
		$this->form_validation->set_rules("nome", "Nome", 'trim|required');
		$this->form_validation->set_rules("telefone", "Telefone", 'trim|required');
		
		if($id_usario!=null){
			$id = $id_usario;
			$data = array(
				'email'=>$login,
				'first_name' => $nome,
				'password' => $senha,
				'phone' => $telefone,
				'dtnascimento' => $dtnasc

				);
				$return=$this->ion_auth->update($id, $data);
				if($return){
					$this->session->set_flashdata('sucesso', 'Modificação Realizada com sucesso!');
					$this->modulo($id_usario);
				} else {
					$this->session->set_flashdata('erro', 'Modificação Não Realizado! Tente Novamente!');
					$this->modulo($id_usario);
				}
			
		}else{
		$username = $nome;
		$password = $senha;
		$email = $login;

		$additional_data = array(
					'first_name' => $nome,
					'phone' => $telefone,
					'dtnascimento' => $dtnasc
					);
		$group = array('1'); // Sets user to admin.
	
		$return=$this->ion_auth->register($username, $password, $email, $additional_data, $group);
		if($return){
			$this->session->set_flashdata('sucesso', 'Cadastro Realizado com sucesso!');
			$this->modulo();
		}else{
			$this->session->set_flashdata('erro', 'Cadastro Não Realizado! Tente Novamente!');
			$this->modulo();
		}
	}
	  

	}
}

