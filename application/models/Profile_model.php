<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
 
 
  public function get_profile($user_id) {
    $this->db->where('user_id', $user_id);
    $query = $this->db->get('tb_user');
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

}