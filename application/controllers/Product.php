<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('game_model');
		$this->load->model('profilebuy_model');
	}

	public function index()
	{
		$buyer_id = $this->session->userdata('buyer_id');
		$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
		$keyword = $this->input->post('keyword');
		$data['showproduct'] = $this->game_model->showproduct($keyword);
		$data['showgrop'] = $this->game_model->showgrop();
		$data['showbasket'] = $this->game_model->showbasket($buyer_id);
		$data['showsell'] = $this->game_model->showsell();
		$this->load->view('main/product', $data);
	}

	public function Product_view($id_product)
	{
		$buyer_id = $this->session->userdata('buyer_id');
		$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
		$keyword = $this->input->post('keyword');
		$data['showproduct'] = $this->game_model->showproduct($keyword);
		$data['readshowproduct'] = $this->game_model->readshowproduct($id_product);
		$data['showbasket'] = $this->game_model->showbasket($buyer_id);
		$data['showimgorder'] = $this->game_model->showimgorder($id_product);
		$data['showsell'] = $this->game_model->showsell();
		$this->load->view('product/member/product-view', $data);
	}

	public function addbasket()
	{
		$this->load->model('Game_model');
		$this->game_model->addbasket();
	}
}
