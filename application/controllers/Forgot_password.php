<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_password extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('game_model');
  }

  public function index()
  {
    $this->load->view('help/forgot-password');
  }
}
