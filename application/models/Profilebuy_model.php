<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilebuy_model extends CI_Model {
 
 
  public function get_profile($buyer_id) {
    $this->db->where('buyer_id', $buyer_id);
    $query = $this->db->get('tb_buyer');
    return $query->row();
  }


  // public function update_profile($user_id) {

  //   $data = array(
  //       'member_social_id' => $this->input->post('member_social_id'),
  //       'member_Fname' => $this->input->post('member_Fname'),
  //       'member_Lname' => $this->input->post('member_Lname'),
  //       'member_email' => $this->input->post('member_email'),
  //       'member_phone' => $this->input->post('member_phone'),
  //       'member_password' => $this->input->post('member_password'),
  //       'member_last_update' => $this->input->post('member_last_update'),
  //   );

  //   $this->db->where('user_id', $user_id);
  //   $this->db->update('user', $data);
  // }

  public function editprofilebuy()
  {
      $buyer_id  = $this->input->post('buyer_id');
      $data = array(
          'display_name_buy' => $this->input->post('display_name'),
          'password' => $this->input->post('password'),
          'first_name_buy' => $this->input->post('first_name'),
          'last_name_buy' => $this->input->post('last_name'),
          'gender_buy' => $this->input->post('gender'),
          'mobile_number_buy' => $this->input->post('mobile_number'),
          'address_buy' => $this->input->post('address'),

      );
      $this->db->where('buyer_id ', $this->input->post('buyer_id'));
      $query = $this->db->update('tb_buyer', $data);
      redirect('Member');
      // .$buyer_id
  }
}