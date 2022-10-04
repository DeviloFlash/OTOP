<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('profilebuy_model');
		$this->load->model('game_model');

		// if ($this->session->userdata('logged_in') !== TRUE) {
		//   redirect('login');
		// }
	}

	public function index()
	{
		if (!isset($_SESSION['email']) || $_SESSION['password'] == "") {
			$data['showuser'] = $this->game_model->showuser();
			$data['showseller'] = $this->game_model->showseller();
			$this->load->view('login/member/login_buy',$data);
		} else {
			$buyer_id = $this->session->userdata('buyer_id');
			$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
			$data['showalert'] = $this->game_model->showalert($buyer_id);
			$data['showbillotopmember'] = $this->game_model->showbillotopmember($buyer_id);
			$data['showbasket'] = $this->game_model->showbasket($buyer_id);
			$data['showsell'] = $this->game_model->showsell();
			$data['showproduct'] = $this->game_model->showproduct();
			$this->load->view('member/Profile', $data);
		}
	}

	public function Alert($id_alert)
	{
		if (!isset($_SESSION['email']) || $_SESSION['password'] == "") {
			$data['showuser'] = $this->game_model->showuser();
			$data['showseller'] = $this->game_model->showseller();
			$this->load->view('login/member/login_buy',$data);
		} else {
			$buyer_id = $this->session->userdata('buyer_id');
			$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
			$data['showalert'] = $this->game_model->showalert($buyer_id);
			$data['showalertadmin_buy'] = $this->game_model->showalertadmin_buy($buyer_id);
			$data['readshowalert'] = $this->game_model->readshowalert($id_alert);
			$data['showsell'] = $this->game_model->showsell();
			$data['showproduct'] = $this->game_model->showproduct();
			$this->load->view('alert/member/alert-read', $data);
		}
	}

	public function Alertadmin($id_alertadmin)
	{
		if (!isset($_SESSION['email']) || $_SESSION['password'] == "") {
			$data['showuser'] = $this->game_model->showuser();
			$data['showseller'] = $this->game_model->showseller();
			$this->load->view('login/member/login_buy',$data);
		} else {
			$buyer_id = $this->session->userdata('buyer_id');
			$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
			$data['showalert'] = $this->game_model->showalert($buyer_id);
			$data['readshowalertadmin_buy'] = $this->game_model->readshowalertadmin_buy($id_alertadmin);
			$data['showalertadmin_buy'] = $this->game_model->showalertadmin_buy($buyer_id);
			$data['showsell'] = $this->game_model->showsell();
			$data['showproduct'] = $this->game_model->showproduct();
			$this->load->view('alert/member/alert-readadmin', $data);
		}
	}

	public function Alertwrit()
	{
		if (!isset($_SESSION['email']) || $_SESSION['password'] == "") {
			$data['showuser'] = $this->game_model->showuser();
			$data['showseller'] = $this->game_model->showseller();
			$this->load->view('login/member/login_buy',$data);
		} else {
			$buyer_id = $this->session->userdata('buyer_id');
			$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
			$data['showalert'] = $this->game_model->showalert($buyer_id);
			$data['showalertadmin_buy'] = $this->game_model->showalertadmin_buy($buyer_id);
			$data['showsell'] = $this->game_model->showsell();
			$data['showproduct'] = $this->game_model->showproduct();
			$this->load->view('alert/member/alert-write', $data);
		}
	}

	public function Alertwritadmin()
	{
		if (!isset($_SESSION['email']) || $_SESSION['password'] == "") {
			$data['showuser'] = $this->game_model->showuser();
			$data['showseller'] = $this->game_model->showseller();
			$this->load->view('login/member/login_buy',$data);
		} else {
			$buyer_id = $this->session->userdata('buyer_id');
			$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
			$data['showalert'] = $this->game_model->showalert($buyer_id);
			$data['showalertadmin_buy'] = $this->game_model->showalertadmin_buy($buyer_id);
			$data['showsell'] = $this->game_model->showsell();
			$data['showproduct'] = $this->game_model->showproduct();
			$this->load->view('alert/member/alert-writeadmin', $data);
		}
	}

	public function Alertorder()
	{
		if (!isset($_SESSION['email']) || $_SESSION['password'] == "") {
			$data['showuser'] = $this->game_model->showuser();
			$data['showseller'] = $this->game_model->showseller();
			$this->load->view('login/member/login_buy',$data);
		} else {
			$buyer_id = $this->session->userdata('buyer_id');
			$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
			$data['showalert'] = $this->game_model->showalert($buyer_id);
			$data['showalertadmin_buy'] = $this->game_model->showalertadmin_buy($buyer_id);
			$data['showsell'] = $this->game_model->showsell();
			$data['showproduct'] = $this->game_model->showproduct();
			$this->load->view('alert/member/alert-order', $data);
		}
	}

	public function Alertorderadmin()
	{
		if (!isset($_SESSION['email']) || $_SESSION['password'] == "") {
			$data['showuser'] = $this->game_model->showuser();
			$data['showseller'] = $this->game_model->showseller();
			$this->load->view('login/member/login_buy',$data);
		} else {
			$buyer_id = $this->session->userdata('buyer_id');
			$data['buyer'] = $this->profilebuy_model->get_profile($buyer_id);
			$data['showsell'] = $this->game_model->showsell();
			$data['showproduct'] = $this->game_model->showproduct();
			$data['showalertadmin_buy'] = $this->game_model->showalertadmin_buy($buyer_id);
			$data['showalert'] = $this->game_model->showalert($buyer_id);
			$this->load->view('alert/member/alert-orderadmin', $data);
		}
	}

	public function editprofilebuy()
	{
		$this->load->model('Profilebuy_model');
		$this->Profilebuy_model->editprofilebuy();
	}
	public function addreport()
	{
		$this->load->model('Profilebuy_model');
		$this->game_model->addreport();
	}
	public function addreportbuyer()
	{
		$this->load->model('Profilebuy_model');
		$this->game_model->addreportbuyer();
	}
}
