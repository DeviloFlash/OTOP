<?php
defined('BASEPATH') or exit('No direct script access allowed');

class store extends CI_Controller
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
		$data['showsell'] = $this->game_model->showsell($keyword);
		$data['showproduct'] = $this->game_model->showproduct();
		$data['showbasket'] = $this->game_model->showbasket($buyer_id);
		$this->load->view('main/store', $data);
	}
	public function store_view($user_id)
	{
		$buyer_id = $this->session->userdata('buyer_id');
		$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
		$data['showotop'] = $this->game_model->showotop($user_id);
		$data['showgrop'] = $this->game_model->showgrop();
		$data['readshowsell'] = $this->game_model->readshowsell($user_id);
		$data['showbasket'] = $this->game_model->showbasket($buyer_id);
		$data['showsell'] = $this->game_model->showsell();
		$data['showproduct'] = $this->game_model->showproduct();
		$data['showlike'] = $this->game_model->showlike($buyer_id,$user_id);
		$data['countlike'] = $this->game_model->countlike($user_id);
		$this->load->view('store/member/store-view', $data);
	}

	public function addlike()
	{
		$this->load->model('Game_model');
		$this->game_model->addlike();
	}
	public function dellike($id_like)
	{
		$this->load->model('Game_model');
		$this->game_model->dellike($id_like);
	}
}
