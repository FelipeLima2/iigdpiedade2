<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
            redirect('login','refresh');
		}
		$this->load->model('User_model', '', TRUE);

	}

	
	public function index()
	{

		
			
			
		$dados['chart_lastYear'] = $this->User_model->chart_query_lastyear();
		$dados['chart_currentYear'] = $this->User_model->chart_query_currentyear();
		$dados['users'] = $this->ion_auth->users()->result();
		$this->load->view('modal/header');
		$this->load->view('home/index',$dados);
		$this->load->view('modal/footer',$dados);
		
		
	}
}
