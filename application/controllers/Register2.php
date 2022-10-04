<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register2 extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('game_model');
  }

  public function member()
  {
    $data['showuser'] = $this->game_model->showuser();
    $this->load->view('register/member/register_buy',$data);
  }

  // public function seller()
  // {
  //   $this->load->view('register2/seller/register_sell');
  // }

  public function add_userbuy()
  {

    $this->load->helper('date');
    date_default_timezone_set('Asia/Bangkok');




    //Validation Rules
    //       $this->form_validation->set_rules('display_name','Display Name','trim|required');
    // $this->form_validation->set_rules('email','Email','trim|required|valid_email');
    // $this->form_validation->set_rules('password', 'Password', 'required');
    // $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

    $display_name = $this->input->post('display_name_buy');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $buyer_role = $this->input->post('buyer_role');
    $buyer_status = $this->input->post('buyer_status');
    $this->db->where('email', $email);
    $query = $this->db->get('tb_buyer');
    $num = $query->num_rows($query);

    if ($num >= 1) { //ถ้า จำนวน row มากกว่าหรือเท่ากับ 1 ให้ echo 3
      echo $this->session->set_flashdata('msg', 'อีเมลซำ้');
      $this->load->view('register/member/register_buy');
    } else {
      // Create Data Array
      $data = array(
        'display_name_buy' => $display_name,
        'email' => $email,
        'password' => $password,
        'buyer_role' => $buyer_role,
        'buyer_status' => $buyer_status,
      );
      $this->db->insert('tb_buyer', $data); // Table Insert

      if ($this->db->affected_rows() != 1) { //affected_rows คือ คำสั่งสำหรับการตรวจสอบการประมวลจากเหตุการณ์ต่าง ๆ เช่น การ insert, update และ delete
        echo "0";
      } else {
        // Redirect to pages
        $data['showuser'] = $this->game_model->showuser();
        $data['showseller'] = $this->game_model->showseller();
        $this->load->view('login/member/login_buy',$data);
      }
    }
  }
}
