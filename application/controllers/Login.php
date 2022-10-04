<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
    $this->load->model('game_model');
    $this->load->library('session');
   
  }
  public function seller()
  {
    $data['showseller'] = $this->game_model->showseller();
    $data['showuser'] = $this->game_model->showuser();
    $this->load->view('login/seller/login_sell',$data);
  }


  public function authen()
  {
    $email = $this->input->post('email', TRUE);
    $password = $this->input->post('password', TRUE);
    $validate = $this->login_model->validate($email, $password);



    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $user_id = $data['user_id'];
      $facebook_id = $data['facebook_id'];
      $display_name = $data['display_name'];
      $first_name = $data['first_name'];
      $last_name = $data['last_name'];
      $birthday = $data['birthday'];
      $gender = $data['gender'];
      $email = $data['email'];
      $password = $data['password'];
      $mobile_number = $data['mobile_number'];
      $user_country = $data['user_country'];
      $user_role = $data['user_role'];
      $user_status = $data['user_status'];
      $facebook_url = $data['facebook_url'];
      $detel_sell = $data['detel_sell'];
      $line_url = $data['line_url'];

      $sesdata = array(
        'user_id'  => $user_id,
        'facebook_id'  => $facebook_id,
        'display_name'  => $display_name,
        'first_name'  => $first_name,
        'last_name'  => $last_name,
        'birthday'  => $birthday,
        'gender' => $gender,
        'email' => $email,
        'password' => $password,
        'mobile_number' => $mobile_number,
        'user_country' => $user_country,
        'user_role' => $user_role,
        'user_status' => $user_status,
        'facebook_url' => $facebook_url,
        'detel_sell' => $detel_sell,
        'line_url' => $line_url,
        'logged_in' => TRUE
      );

      $this->session->set_userdata($sesdata);


      // access login for admin 1
      if ($user_role === '2') {
        // print_r($sesdata);
        redirect('dashboard/player');
      } else {
        echo $this->session->set_flashdata('msg', 'โดนบล็อคติดต่อผู้ดูเเลระบบ');
        redirect('Login/seller');
      }
    } else {
      echo $this->session->set_flashdata('msg', 'Email หรือ Password ไม่ถูกต้อง');
      redirect('Login/seller');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('home');
  }
}
