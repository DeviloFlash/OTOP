<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player_model extends CI_Model {

	public function fetch_player() {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('user_role', 2);
		$query = $this->db->get();
		return $query->result();
	}


    public function fetch_count_player() {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('user_role', 2);
        $query = $this->db->get();
        return $query->num_rows();
    }

    
}