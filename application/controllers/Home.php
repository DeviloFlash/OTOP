<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
    $data['showbasket'] = $this->game_model->showbasket($buyer_id);
    $keyword = $this->input->post('keyword');
    $data['showproduct'] = $this->game_model->showproduct($keyword);
    $data['showsell'] = $this->game_model->showsell();
    $data['showgrop'] = $this->game_model->showgrop();
    $data['shownewsmember'] = $this->game_model->shownewsmember();
    $data['showomembertopgood'] = $this->game_model->showomembertopgood();
    $this->load->view('main/home', $data);
  }
}
