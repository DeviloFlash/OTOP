<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginbuy_model extends CI_Model {
 
  public function validate($email, $password) {
  	$this->db->select('*');
  	$this->db->from('tb_buyer');
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $result = $this->db->get();
    return $result;
  }
}