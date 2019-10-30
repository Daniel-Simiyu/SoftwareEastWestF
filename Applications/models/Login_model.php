<?php 

class Login_model extends CI_Model{

	public function login($uname) {
    $q = $this->db->select('uname')->from('register')->where('uname',$uname)->get();
    return $q->result();
    }
}

 ?>