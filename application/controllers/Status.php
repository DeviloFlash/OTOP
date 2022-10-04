<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('profilebuy_model');
		$this->load->model('game_model');

		// if ($this->session->userdata('logged_in') !== TRUE) {
		//   redirect('login');
		// }
	}

	public function index()
	{
		$buyer_id = $this->session->userdata('buyer_id');
		$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
		$data['showbasket'] = $this->game_model->showbasket($buyer_id);
		$data['showproduct'] = $this->game_model->showproduct();
		$data['showsell'] = $this->game_model->showsell();
		$this->load->view('main/status-product', $data);
	}
}
