<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller{


	public function file_login(){ 
	$data['uname'] = $this->Login_model->login($uname);
    $this->load->view('register',$data);
}

}
 ?>