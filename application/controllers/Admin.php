<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->load->model('profileadmin_model');
    $this->load->model('game_model');
    $this->load->model('admin_model');
  }

  public function index()
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['showselladmin'] = $this->admin_model->showselladmin();
      $data['showmemberadmin'] = $this->admin_model->showmemberadmin();
      $data['showproductadmin'] = $this->admin_model->showproductadmin();
      $data['showreportmemberadmin'] = $this->admin_model->showreportmemberadmin();
      $data['showreportselladmin'] = $this->admin_model->showreportselladmin();
      $this->load->view('admin/home', $data);
    }
  }



  public function Product()
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['showproductadmin'] = $this->admin_model->showproductadmin();
      $this->load->view('admin/product', $data);
    }
  }

  public function ProductView($id_product)
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['readproductadmin'] = $this->admin_model->readproductadmin($id_product);
      $data['showimgorder'] = $this->game_model->showimgorder($id_product);
      $this->load->view('product/admin/product-view', $data);
    }
  }

  public function Group()
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $this->load->view('admin/view/group', $data);
    }
  }

  public function News()
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['shownews'] = $this->admin_model->shownews();
      $this->load->view('admin/news', $data);
    }
  }

  public function NewsView($id_news)
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['readnews'] = $this->admin_model->readnews($id_news);
      $this->load->view('news/admin/news-view', $data);
    }
  }

  public function Addnews()
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $this->load->view('admin/view/add-news', $data);
    }
  }

  public function Seller()
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['showselladmin'] = $this->admin_model->showselladmin();
      $this->load->view('admin/seller', $data);
    }
  }

  public function SellerView($user_id)
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['readshowselladmin'] = $this->admin_model->readshowselladmin($user_id);
      $data['showotopselladmin'] = $this->admin_model->showotopselladmin($user_id);
      $data['showotopgood'] = $this->admin_model->showotopgood($user_id);
      $data['countlikeadmin'] = $this->admin_model->countlikeadmin($user_id);
      $this->load->view('store/admin/seller-view', $data);
    }
  }

  public function User()
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['showmemberadmin'] = $this->admin_model->showmemberadmin();
      $this->load->view('admin/buyer', $data);
    }
  }

  public function UserView($buyer_id)
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['readshowmemberadmin'] = $this->admin_model->readshowmemberadmin($buyer_id);
      $data['showbillmemberadmin'] = $this->admin_model->showbillmemberadmin($buyer_id);
      $this->load->view('admin/view/buyer-view', $data);
    }
  }

  public function BillView($id_billotop)
  {
    if (!isset($_SESSION['email_admin']) || $_SESSION['admin_id'] == "") {
      $this->load->view('login/admin/login_admin');
    } else {
      $admin_id = $this->session->userdata('admin_id');
      $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
      $data['readbillotopadmin'] = $this->admin_model->readbillotopadmin($id_billotop);
      $this->load->view('admin/view/Bill', $data);
    }
  }

  public function alertorder()
  {
    $admin_id = $this->session->userdata('admin_id');
    $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
    $data['showreportmemberadmin'] = $this->admin_model->showreportmemberadmin();
    $data['showreportselladmin'] = $this->admin_model->showreportselladmin();
    $this->load->view('alert/admin/alert-order', $data);
  }

  public function alertorderseller()
  {
    $admin_id = $this->session->userdata('admin_id');
    $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
    $data['showreportmemberadmin'] = $this->admin_model->showreportmemberadmin();
    $data['showreportselladmin'] = $this->admin_model->showreportselladmin();
    $this->load->view('alert/admin/alert-orderseller', $data);
  }

  public function alertread($id_report_buyer)
  {
    $admin_id = $this->session->userdata('admin_id');
    $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
    $data['readshowreportmemberadmin'] = $this->admin_model->readshowreportmemberadmin($id_report_buyer);
    $data['showreportmemberadmin'] = $this->admin_model->showreportmemberadmin();
    $data['showreportselladmin'] = $this->admin_model->showreportselladmin();
    $this->load->view('alert/admin/alert-read', $data);
  }

  public function alertreadsell($id_report_user)
  {
    $admin_id = $this->session->userdata('admin_id');
    $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
    $data['readshowreportselladmin'] = $this->admin_model->readshowreportselladmin($id_report_user);
    $data['showreportmemberadmin'] = $this->admin_model->showreportmemberadmin();
    $data['showreportselladmin'] = $this->admin_model->showreportselladmin();
    $this->load->view('alert/admin/alert-readsell', $data);
  }

  public function alertwritsell($user_id)
  {
    $admin_id = $this->session->userdata('admin_id');
    $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
    $data['readshowselladmin'] = $this->admin_model->readshowselladmin($user_id);
    $data['showreportmemberadmin'] = $this->admin_model->showreportmemberadmin();
    $data['showreportselladmin'] = $this->admin_model->showreportselladmin();
    $this->load->view('alert/admin/alert-writesell', $data);
  }

  public function alertwritbuy($buyer_id)
  {
    $admin_id = $this->session->userdata('admin_id');
    $data['admin_id'] = $this->profileadmin_model->get_profile($admin_id);
    $data['readshowselladmin'] = $this->admin_model->readshowselladmin($buyer_id);
    $data['readshowmemberadmin'] = $this->admin_model->readshowmemberadmin($buyer_id);
    $data['showreportmemberadmin'] = $this->admin_model->showreportmemberadmin();
    $data['showreportselladmin'] = $this->admin_model->showreportselladmin();
    $this->load->view('alert/admin/alert-writebuy', $data);
  }

  public function addgrop()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addgrop();
  }

  public function addnewsadmin()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addnewsadmin();
  }

  public function addalertuser()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addalertuser();
  }

  public function addalertbuyer()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addalertbuyer();
  }

  public function delnews($id_news)
  {
    $this->load->model('Admin_model');
    $this->admin_model->delnews($id_news);
  }

  public function addblock()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addblock();
  }

  public function addnoblock()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addnoblock();
  }

  public function addblockuser()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addblockuser();
  }

  public function addnoblockuser()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addnoblockuser();
  }

  public function addblockbuyer()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addblockbuyer();
  }

  public function addnoblockbuyer()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addnoblockbuyer();
  }

  public function addotopgood()
  {
    $this->load->model('Admin_model');
    $this->admin_model->addotopgood();
  }

  public function delotopgood($id_otop_good)
  {
    $this->load->model('Admin_model');
    $this->admin_model->delotopgood($id_otop_good);
  }
}
