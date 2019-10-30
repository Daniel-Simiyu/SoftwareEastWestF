<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('register_model');
		$this->load->library('form_validation');
		
		$this->load->view('header');

	}

	public function form(){
		$this->load->view('register');
		$this->load->view('footer');
	}
		
	public function file_register(){
		$this->form_validation->set_rules('name', 'Legal Name', 'required');
		$this->form_validation->set_rules('uname', 'User Name', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('register');
		}else{
			$data['name'] = $this->input->post('name', TRUE);
			$data['uname'] = $this->input->post('uname', TRUE);
			//$data['pass'] = $this->input->post('pass', TRUE);

			$pass = $this->input->post('uname', TRUE);
			$hash = password_hash($pass, PASSWORD_DEFAULT);

			$data['pass'] =$hash;

			$this->register_model->store_register_data($data);
			redirect('');
		}
	}

}

 ?>