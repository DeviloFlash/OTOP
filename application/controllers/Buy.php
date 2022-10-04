<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buy extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('profilebuy_model');
		$this->load->model('game_model');
	}

	public function index()
	{
		$buyer_id = $this->session->userdata('buyer_id');
		$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
		$data['showbillotop'] = $this->game_model->showbillotop($buyer_id);
		$data['readbillotop'] = $this->game_model->readbillotop($buyer_id);
		$data['showsell'] = $this->game_model->showsell();
		$data['showproduct'] = $this->game_model->showproduct();
		$this->load->view('buy/member/buy', $data);
	}

	public function Bill_buy($id_basket)
	{
		$buyer_id = $this->session->userdata('buyer_id');
		$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
		$data['readshowbasket'] = $this->game_model->readshowbasket($id_basket);

		$data['showsell'] = $this->game_model->showsell();
		$data['showproduct'] = $this->game_model->showproduct();
		$this->load->view('buy/member/bill_buy', $data);
	}

	public function Print()
	{
		$this->load->view('buy/member/buy-print');
	}

	public function addbillotop()
	{
		$this->load->model('Game_model');
		$this->game_model->addbillotop();
	}
}
