<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Cart extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//$this->load->model('cart_model');
		$this->load->model('pic_model');
		$this->load->library('cart');
		$this->load->view('header');
	}

	public function cart(){
		$data = $this->input->post('item', TRUE);

		//echo $data;

		$res = $this->pic_model->cart($data);

		$row = $res->fetch_assoc();

			$cart_item = array(
						'id' => $row['pic_id'],
						'qty' => 1,
						'price' => $row['pic_desc'],
						'name' => $row['pic_title'],
						'pic' => $row['pic_file']
				);
		$this->cart->insert($cart_item);
		$this->load->view('cart_view');
		$this->load->view('footer');



	}

	public function delete_cart(){
		$this->cart->destroy();
		$this->load->view('cart_view');
		$this->load->view('footer');


	}

	public function mpesa(){
		$this->load->model('mpesa_utils');

		$phone = $this->input->post('number', TRUE);
		$amount = $this->cart->total();

		$this->mpesa_utils->onlineCheckout($phone,$amount);

		$this->load->view('checkout');
		$this->load->view('footer');
	}

	public function mpesa_confirm(){
		$this->load->model('mpesa_utils');

		$data = $this->mpesa_utils->transactionStatus();

		$this->load->view('checkout',$data);
		$this->load->view('footer');

	}

}
	

 ?>