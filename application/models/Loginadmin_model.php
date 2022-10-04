<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin_model extends CI_Model {
 
  public function validate($email_admin, $password) {
  	$this->db->select('*');
  	$this->db->from('tb_admin');
    $this->db->where('email_admin', $email_admin);
    $this->db->where('password', $password);
    $result = $this->db->get();
    return $result;
  }
}