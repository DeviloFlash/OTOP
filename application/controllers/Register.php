<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('game_model');
	}


	// public function index() {
	//     $this->load->helper(array('form', 'url'));
	//     $this->load->view('register/register_view');

	//   }

	public function seller()
	{
		$data['showseller'] = $this->game_model->showseller();
		$this->load->view('register/seller/register_sell',$data);
	}

	public function add_user()
	{
		$this->load->helper('date');
		date_default_timezone_set('Asia/Bangkok');

		//Validation Rules
		//$this->form_validation->set_rules('display_name','Display Name','trim|required');
		// $this->form_validation->set_rules('email','Email','trim|required|valid_email');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		// $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

		$config['upload_path'] = './assest/img/otop/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('user_profile_cover_img')) {
			$this->session->set_flashdata('show', 'no');
			redirect('/register/seller/');
		} else {

			$data = $this->upload->data();
			$filename = $data['file_name'];
			$display_name = $this->input->post('display_name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$address = $this->input->post('address');
			$user_role = $this->input->post('user_role');
			$user_status = $this->input->post('user_status');
			$this->db->where('email', $email);
			$query = $this->db->get('tb_user');
			$num = $query->num_rows($query);

			if ($num >= 1) { //ถ้า จำนวน row มากกว่าหรือเท่ากับ 1 ให้ echo 3
				echo $this->session->set_flashdata('msg', 'อีเมลซำ้');
				$this->load->view('register/seller/register_sell');
			} else {
				// Create Data Array
				$data = array(
					'display_name' => $display_name,
					'email' => $email,
					'password' => $password,
					'address' => $address,
					'user_role' => $user_role,
					'user_status' => $user_status,
					'user_profile_cover_img' => $filename
				);
				$this->db->insert('tb_user', $data); // Table Insert

				if ($this->db->affected_rows() != 1) { //affected_rows คือ คำสั่งสำหรับการตรวจสอบการประมวลจากเหตุการณ์ต่าง ๆ เช่น การ insert, update และ delete
					echo "0";
				} else {
					// Redirect to pages
					$data['showuser'] = $this->game_model->showuser();
					$data['showseller'] = $this->game_model->showseller();
					$this->load->view('login/seller/login_sell',$data);
				}
			}
		}
	}
}
