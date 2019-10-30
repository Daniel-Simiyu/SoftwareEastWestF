<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		
		$this->load->view('dashboardheader');

	}
	
	public function form(){
		$this->load->view('upload_form');
		$this->load->view('footer');
	}
	
	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('pic_title', 'Picture Title', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->load->view('upload_form');
		}else{
			
			//get the form values
			$data['pic_title'] = $this->input->post('pic_title', TRUE);
			$data['pic_desc'] = $this->input->post('pic_desc', TRUE);

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('pic_file')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['pic_file'] = $upload_data['file_name'];

				//store pic data to the db
				$this->pic_model->store_pic_data($data);

				redirect('welcome/dashboard');
			}
			$this->load->view('footer');
		}
	}

	public function update_data(){
		$data['pic_title'] = $this->input->post('item', TRUE);
		$data['pic_desc'] = $this->input->post('pic_desc', TRUE);

		$config['upload_path']          = APPPATH. '../assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('pic_file')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
			}else{
				//file is uploaded successfully
				//now get the file uploaded data 
			$upload_data = $this->upload->data();

			//get the uploaded file name
			$data['pic_file'] = $upload_data['file_name'];
			//store pic data to the db
			$this->pic_model->update_pic_data($data);
			redirect('welcome/dashboard');
	}
}

	function delete_data(){
		$data['pic_title'] = $this->input->post('item', TRUE);
		$this->pic_model->delete_pic_data($data);
		redirect('welcome/dashboard');
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

			$this->pic_model->store_register_data($data);
			redirect('welcome');
		}
	}

	
      public function deleted()  
      {  
          
           $this->load->view('picture_list');
           
      }  
}
