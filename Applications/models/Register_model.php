<?php 
	
	class Register_model extends CI_Model{
	
		function store_register_data($data){
		$insert_data['name'] = $data['name'];
		$insert_data['uname'] = $data['uname'];
		$insert_data['password'] = $data['pass'];

		$query = $this->db->insert('register', $insert_data);
	}
	

	}

 ?>