<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
 
  public function validate($email, $password) {
  	$this->db->select('*');
  	$this->db->from('tb_user');
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $result = $this->db->get();
    return $result;
  }
}