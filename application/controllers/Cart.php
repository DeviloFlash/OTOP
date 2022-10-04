<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
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
    if (!isset($_SESSION['email']) || $_SESSION['password'] == "") {
      $data['showuser'] = $this->game_model->showuser();
      $data['showseller'] = $this->game_model->showseller();
      $this->load->view('login/member/login_buy',$data);
    } else {
      $buyer_id = $this->session->userdata('buyer_id');
      $data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
      $data['showbasket'] = $this->game_model->showbasket($buyer_id);
      $data['showsell'] = $this->game_model->showsell();
      $data['showproduct'] = $this->game_model->showproduct();

      $this->load->view('cart/member/cart', $data);
    }
  }

  public function delbasket($id_basket)
  {
    $this->game_model->delbasket($id_basket);
  }
}
