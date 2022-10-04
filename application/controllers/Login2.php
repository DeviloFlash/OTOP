<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login2 extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('loginbuy_model');
    $this->load->model('game_model');
    $this->load->library('session');
  }

  public function member()
  {
    $data['showuser'] = $this->game_model->showuser();
    $data['showseller'] = $this->game_model->showseller();
    $this->load->view('login/member/login_buy',$data);
  }

  public function authenbuy()
  {
    $email = $this->input->post('email', TRUE);
    $password = $this->input->post('password', TRUE);
    $validate = $this->loginbuy_model->validate($email, $password);

    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $buyer_id = $data['buyer_id'];
      $display_name_buy = $data['display_name_buy'];
      $first_name_buy = $data['first_name_buy'];
      $last_name_buy = $data['last_name_buy'];
      $birthday_buy = $data['birthday_buy'];
      $gender_buy = $data['gender_buy'];
      $email = $data['email'];
      $password = $data['password'];
      $mobile_number_buy = $data['mobile_number_buy'];
      $buyer_country = $data['buyer_country'];
      $buyer_role = $data['buyer_role'];
      $buyer_status = $data['buyer_status'];

      $sesdata = array(
        'buyer_id'  => $buyer_id,
        'display_name_buy'  => $display_name_buy,
        'first_name_buy'  => $first_name_buy,
        'last_name_buy'  => $last_name_buy,
        'birthday_buy'  => $birthday_buy,
        'gender_buy' => $gender_buy,
        'email' => $email,
        'password' => $password,
        'mobile_number_buy' => $mobile_number_buy,
        'buyer_country' => $buyer_country,
        'buyer_role' => $buyer_role,
        'buyer_status' => $buyer_status,
        'logged_in' => TRUE
      );

      $this->session->set_userdata($sesdata);


      // access login for admin 1
      if ($buyer_role === '3') {
        // print_r($sesdata);
        redirect('Home');
      } else {
        echo $this->session->set_flashdata('msg', 'โดนบล็อคติดต่อผู้ดูเเลระบบ');
        redirect('Login2/member');
      }
    } else {
      echo $this->session->set_flashdata('msg', 'Email หรือ Password ไม่ถูกต้อง');
      redirect('Login2/member');
    }
  }


  public function logout()
  {
    $this->session->sess_destroy();
    redirect('home');
  }
}
