<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginadmin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->load->model('loginadmin_model');
  }

  public function index()
  {
    $this->load->view('login/admin/login_admin');
  }

  public function authenadmin()
  {
    $email_admin = $this->input->post('email_admin', TRUE);
    $password = $this->input->post('password', TRUE);
    $validate = $this->loginadmin_model->validate($email_admin, $password);

    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $admin_id = $data['admin_id'];
      $display_name_admin = $data['display_name_admin'];
      $first_name_admin = $data['first_name_admin'];
      $last_name_admin = $data['last_name_admin'];
      $email_admin = $data['email_admin'];
      $password = $data['password'];
      $admin_role = $data['admin_role'];
      $user_profile_img = $data['user_profile_img'];

      $sesdata = array(
        'admin_id'  => $admin_id,
        'display_name_admin'  => $display_name_admin,
        'first_name_admin'  => $first_name_admin,
        'last_name_admin'  => $last_name_admin,
        'admin_role' => $admin_role,
        'email_admin' => $email_admin,
        'password' => $password,
        'user_profile_img' => $user_profile_img,
        'logged_in' => TRUE
      );

      $this->session->set_userdata($sesdata);


      // access login for admin 1
      if ($admin_role === '1') {
        // print_r($sesdata);
        redirect('dashboard/admin');

        // access login for player 2
      } else if ($admin_role === '2') {
        redirect('dashboard/player');

        // access login for caster 3
      } else if ($admin_role === '3') {
        redirect('Admin');


        // re-login
      } else {
        echo $this->session->set_flashdata('msg', 'Email หรือ Password ไม่ถูกต้อง');
        redirect('Loginadmin');
      }
    } else {
      echo $this->session->set_flashdata('msg', 'Email หรือ Password ไม่ถูกต้อง');
      redirect('Loginadmin');
    }
  }


  public function logout()
  {
    $this->session->sess_destroy();
    redirect('Loginadmin');
  }
}
