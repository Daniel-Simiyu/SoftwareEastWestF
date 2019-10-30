<?php 

class Pic_model extends CI_Model{
	
	//fetch all pictures from db
	function get_all_pics(){
		$all_pics = $this->db->get('pictures');
		return $all_pics->result();
	}

	//save picture data to db
	function store_pic_data($data){
		$insert_data['pic_title'] = $data['pic_title'];
		$insert_data['pic_desc'] = $data['pic_desc'];
		$insert_data['pic_file'] = $data['pic_file'];

		$query = $this->db->insert('pictures', $insert_data);
	}

	function update_pic_data($data){
		 $this->db->where('pic_title', $data['pic_title']);
         $query = $this->db->update('pictures', $data);
	}

	function delete_pic_data($data){
		$this->db->where('pic_title', $data['pic_title']);
        return $this->db->delete('pictures');
	}

	function store_register_data($data){
		$insert_data['name'] = $data['name'];
		$insert_data['uname'] = $data['uname'];
		$insert_data['password'] = $data['pass'];

		$query = $this->db->insert('register', $insert_data);
	}

	 function delete_data($id){  
           $this->db->where("pic_id", $id);  
           $this->db->delete("pictures");  
           //DELETE FROM tbl_user WHERE id = $id  
      }  

     function cart($data){
     	
		$con = new mysqli('localhost', 'root', '', 'ewfashion');

		$sql = "SELECT * FROM `pictures` WHERE `pic_title`='".$data."'";

		if ($con->query($sql)) {

			$data = $con->query($sql);
			return $data;

			}else{

			echo "NOT";

		}

     }
	
}