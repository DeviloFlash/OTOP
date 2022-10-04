<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->load->model('profile_model');
    $this->load->model('game_model');
    $this->load->model('player_model');

    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
  }


  // public function admin()
  // {
  //   //Allowing access to admin only
  //   if ($this->session->userdata('user_role') === '1') {
  //     $this->load->view('dashboard/admin_dashboard_view');
  //   } else {
  //     echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
  //   }
  // }

  // public function caster()
  // {
  //   $user_id = $this->session->userdata('user_id');
  //   $data['user'] = $this->profile_model->get_profile($user_id);

  //   //Allowing access to caster only
  //   if ($this->session->userdata('user_role') === '3') {
  //     $this->load->view('dashboard/caster_dashboard_view', $data);
  //   } else {
  //     echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
  //   }
  // }


  public function player()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['showotop'] = $this->game_model->showotop($user_id);
    $data['showbillotopbuy'] = $this->game_model->showbillotopbuy($user_id);
    $data['showalertadmin_user'] = $this->game_model->showalertadmin_user($user_id);
    $data['showreport'] = $this->game_model->showreport($user_id);
    $data['countlike'] = $this->game_model->countlike($user_id);
    $data['shownewsmember'] = $this->game_model->shownewsmember();


    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/player_dashboard_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function player_tournament()
  {
    $keyword = $this->input->post('keyword');
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['game'] = $this->game_model->fetch_game();
    $data['showotop'] = $this->game_model->showotop($user_id,$keyword);

    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/player_tournament_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function player_team()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['showotop'] = $this->game_model->showotop($user_id);


    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/player_team_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }


  public function player_player()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['player'] = $this->player_model->fetch_player();
    $data['showbillotopbuy'] = $this->game_model->showbillotopbuy($user_id);

    //Allowing access to player only
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/player_player_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }


  public function player_profile()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);

    //Allowing access to player only
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/player_profile_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function addproduct()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['showgrop'] = $this->game_model->showgrop();

    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/player_product_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function editproduct($id_product)
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['showgrop'] = $this->game_model->showgrop();
    $data['readotop'] = $this->game_model->readotop($id_product);

    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/player_editteam_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function player_editprofile()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);


    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/player_editprofile_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Alert($id_report)
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['readshowreport'] = $this->game_model->readshowreport($id_report);
    $data['showalertadmin_user'] = $this->game_model->showalertadmin_user($user_id);
    $data['showreport'] = $this->game_model->showreport($user_id);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('alert/seller/alert-read', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Alertwrit()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('alert/seller/alert-write', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Alertwritadmin()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $this->load->view('alert/seller/alert-writeadmin', $data);
    if ($this->session->userdata('user_role') === '2') {
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Alertorder()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['showalertadmin_user'] = $this->game_model->showalertadmin_user($user_id);
    $data['showreport'] = $this->game_model->showreport($user_id);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('alert/seller/alert-order', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Alertorderadmin($id_alertadmin_user)
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['showalertadmin_user'] = $this->game_model->showalertadmin_user($user_id);
    $data['showreport'] = $this->game_model->showreport($user_id);
    $data['readshowalertadmin_user'] = $this->game_model->readshowalertadmin_user($id_alertadmin_user);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('alert/seller/alert-readadmin', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Alertordersell()
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['showalertadmin_user'] = $this->game_model->showalertadmin_user($user_id);
    $data['showreport'] = $this->game_model->showreport($user_id);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('alert/seller/alert-orderseller', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }



  public function Alertsend($buyer_id)
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['readbillotop'] = $this->game_model->readbillotop($buyer_id);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('alert/seller/alert-send', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Alertdatil($id_billotop)
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['readbillotopbuy'] = $this->game_model->readbillotopbuy($id_billotop);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('alert/seller/alert-detail', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Statusproduct($id_product)
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['readotop'] = $this->game_model->readotop($id_product);
		$data['showimgorder'] = $this->game_model->showimgorder($id_product);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('product/seller/product-view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function News($id_news)
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['readnewsmember'] = $this->game_model->readnewsmember($id_news);
    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('news/seller/news-view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  public function Addimgproduct($id_product)
  {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->profile_model->get_profile($user_id);
    $data['showidproduct'] = $this->game_model->showidproduct($id_product);
    $data['showimgorder'] = $this->game_model->showimgorder($id_product);

    if ($this->session->userdata('user_role') === '2') {
      $this->load->view('dashboard/seller_addimg_view', $data);
    } else {
      echo "<h1>ปฏิเสธการเข้าถึง! (Access denied!)</h1>";
    }
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function addalert()
  {
    $this->load->model('Game_model');
    $this->game_model->addalert();
  }

  public function addreportuser()
  {
    $this->load->model('Game_model');
    $this->game_model->addreportuser();
  }

  public function addotop()
  {
    $this->load->model('Game_model');
    $this->game_model->addsellotop2();
  }

  public function editsellotop()
  {
    $this->load->model('Game_model');
    $this->game_model->editsellotop();
  }

  public function editimgotop()
  {
    $this->load->model('Game_model');
    $this->game_model->editimgotop();
  }

  public function delotop($id_product)
  {
    $this->load->model('Game_model');
    $this->game_model->delotop($id_product);
  }

  public function editprofile()
  {
    $this->load->model('Game_model');
    $this->game_model->editprofile();
  }

  public function addalertreport()
  {
    $this->load->model('Game_model');
    $this->game_model->addalertreport();
  }

  public function addstatusbillotop()
  {
    $this->load->model('Game_model');
    $this->game_model->addstatusbillotop();
  }

  public function addblocksell()
  {
    $this->load->model('Game_model');
    $this->game_model->addblocksell();
  }

  public function addnoblocksell()
  {
    $this->load->model('Game_model');
    $this->game_model->addblocksell();
  }

  public function addimgfree()
  {
    $this->load->model('Game_model');
    $this->game_model->addimgtrust();
  }

  public function addimgfreev2()
  {
    $this->load->model('Game_model');
    $this->game_model->addimgtrustv2();
  }

  public function delimage($id_imgorder)
	{
		$this->load->model('Game_model');
		$this->game_model->delimg($id_imgorder);
  }
  
  public function editstock()
	{
		$this->load->model('Game_model');
		$this->game_model->editstock();
	}
}
