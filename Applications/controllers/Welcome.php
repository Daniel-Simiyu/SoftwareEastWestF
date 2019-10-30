<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		$this->load->model('pic_model');

		$data['picture_list'] = $this->pic_model->get_all_pics();
		
		$this->load->view('header');
		$this->load->view('list', $data);
		$this->load->view('footer');

	}

	public function register(){

		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function dashboard(){

		$this->load->model('pic_model');

		$data['picture_list'] = $this->pic_model->get_all_pics();
		
		$this->load->view('dashboardheader');
		$this->load->view('picture_list', $data);
		$this->load->view('footer');
	}

	public function login(){
		$this->load->view('header');
		$this->load->view('log');
		$this->load->view('footer');
	}

	public function cash(){
		$this->load->view('header');
		$this->load->view('checkout');
		$this->load->view('footer');
	}

}

	
?>


