<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game_model extends CI_Model
{

    public function fetch_game()
    {
        $query = $this->db->get('tb_grop');
        return $query->result();
    }

    public function showuser()
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_user');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function showseller()
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_buyer');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function addsellotop2()
    {

        $user_id  = $this->input->post('user_id');
        $config['upload_path'] = './assest/img/otop/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img_otop')) {
            $this->session->set_flashdata('show', 'no');
            redirect('/dashboard/addproduct/');
        } else {
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $data = array(

                'name_product' => $this->input->post('name_product'),
                'id_grop' => $this->input->post('id_grop'),
                'detel' => $this->input->post('detel'),
                'price' => $this->input->post('price'),
                'number' => $this->input->post('number'),
                'kerry_price' => $this->input->post('kerry_price'),
                'status_product' => $this->input->post('status_product'),
                'user_id' => $user_id,
                'img_otop' => $filename
            );
            $this->db->insert('tb_product', $data);
            redirect('/dashboard/addproduct/' . $user_id);
        }
    }

    public function editsellotop()
    {
        $id_product  = $this->input->post('id_product');
        $data = array(
            'name_product' => $this->input->post('name_product'),
            'id_grop' => $this->input->post('id_grop'),
            'detel' => $this->input->post('detel'),
            'price' => $this->input->post('price'),
            'kerry_price' => $this->input->post('kerry_price'),
            'number' => $this->input->post('number')
        );
        $this->db->where('id_product', $this->input->post('id_product'));
        $query = $this->db->update('tb_product', $data);
        redirect('/dashboard/editproduct/' . $id_product);
    }

    public function editprofile()
    {
        $user_id  = $this->input->post('user_id');
        $data = array(

            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'password' => $this->input->post('password'),
            'birthday' => $this->input->post('birthday'),
            'gender' => $this->input->post('gender'),
            'mobile_number' => $this->input->post('mobile_number'),
            'address' => $this->input->post('address'),
            'user_country' => $this->input->post('user_country'),
            'facebook_url' => $this->input->post('facebook_url'),
            'line_url' => $this->input->post('line_url'),
            'detel_sell' => $this->input->post('detel_sell')
        );
        $this->db->where('user_id ', $this->input->post('user_id'));
        $query = $this->db->update('tb_user', $data);
        redirect('/dashboard/player_editprofile/' . $user_id);
    }

    public function editimgotop()
    {
        $id_product  = $this->input->post('id_product');

        $config['upload_path'] = './assest/img/otop/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img_otop')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $data = array(

                'img_otop' => $filename
            );
            $this->db->where('id_product', $this->input->post('id_product'));
            $query = $this->db->update('tb_product', $data);
            redirect('/dashboard/editproduct/' . $id_product);
        }
    }

    public function delotop($id_product)
    {
        $this->db->delete('tb_product', array('id_product' => $id_product));
        redirect('/dashboard/player_team/');
    }

    public function showotop($user_id)
    {
        $keyword = $this->input->post('keyword');
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_product');
        $this->db->join('tb_grop', 'tb_product.id_grop = tb_grop.id_grop', 'inner');
        $this->db->join('tb_user', 'tb_product.user_id = tb_user.user_id', 'inner');
        $this->db->where('tb_product.user_id', $user_id);
        $this->db->like('name_product', $keyword);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowotop($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_product');
        $this->db->join('tb_grop', 'tb_product.id_grop = tb_grop.id_grop', 'inner');
        $this->db->join('tb_user', 'tb_product.user_id = tb_user.user_id', 'inner');
        $this->db->where('tb_product.id_product', $user_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }


    public function showgrop()
    {
        $this->db->select('*');
        $this->db->from('tb_grop');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readotop($id_product)
    {
        $this->load->library('session');
        $this->load->model('game_model');
        $this->db->select('*');
        $this->db->from('tb_product');
        $this->db->join('tb_grop', 'tb_product.id_grop = tb_grop.id_grop', 'inner');
        $this->db->join('tb_user', 'tb_product.user_id = tb_user.user_id', 'inner');
        $this->db->where('tb_product.id_product', $id_product);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showproduct()
    {
        $keyword = $this->input->post('keyword');
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_product');
        $this->db->having("status_product=1");
        $this->db->join('tb_grop', 'tb_product.id_grop = tb_grop.id_grop', 'inner');
        $this->db->join('tb_user', 'tb_product.user_id = tb_user.user_id', 'inner');
        $this->db->like('name_product', $keyword);
        $this->db->or_like('grop_name', $keyword);
        $this->db->or_like('price', $keyword);
        $this->db->or_like('display_name', $keyword);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowproduct($id_product)
    {
        $this->load->library('session');
        $this->load->model('game_model');
        $this->db->select('*');
        $this->db->from('tb_product');
        $this->db->join('tb_grop', 'tb_product.id_grop = tb_grop.id_grop', 'inner');
        $this->db->join('tb_user', 'tb_product.user_id = tb_user.user_id', 'inner');
        $this->db->where('id_product', $id_product);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showsell()
    {
        $keyword = $this->input->post('keyword');
        $this->load->library('session');
        $this->load->model('game_model');
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->having("user_role=2");
        $this->db->like('display_name', $keyword);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowsell($user_id)
    {
        $this->load->library('session');
        $this->load->model('game_model');
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }


    public function addbasket()
    {
        $buyer_id = $this->input->post('buyer_id');
        $id_product = $this->input->post('id_product');
        $number_basket = $this->input->post('number_basket');
        $name_buy_basket = $this->input->post('name_buy_basket');
        $name_product_basket = $this->input->post('name_product_basket');
        $kerry_price_basket = $this->input->post('kerry_price_basket');
        $status_product_basket = $this->input->post('status_product_basket');
        $this->db->select('*');
        $query = $this->db->get('tb_basket');
        $num = $query->num_rows();
        if ($num >= 0) {
            $id_product = $this->input->post('id_product');
            $number_basket = $this->input->post('number_basket');
            $name_buy_basket = $this->input->post('name_buy_basket');
            $name_product_basket = $this->input->post('name_product_basket');
            $kerry_price_basket = $this->input->post('kerry_price_basket');
            $status_product_basket = $this->input->post('status_product_basket');
            $data = array(
                'buyer_id' =>  $buyer_id,
                'id_product' => $id_product,
                'number_basket' => $number_basket,
                'name_buy_basket' => $name_buy_basket,
                'name_product_basket' => $name_product_basket,
                'kerry_price_basket' => $kerry_price_basket,
                'status_basket' => $status_product_basket,
            );
            $query = $this->db->insert('tb_basket', $data);
            redirect('Cart');
        } else {
        }
    }

    public function showbasket($buyer_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_basket');
        $this->db->join('tb_buyer', 'tb_basket.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_product', 'tb_basket.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_basket.buyer_id', $buyer_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowbasket($id_basket)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_basket');
        $this->db->join('tb_buyer', 'tb_basket.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_product', 'tb_basket.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_basket.id_basket', $id_basket);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function delbasket($id_basket)
    {
        $this->db->delete('tb_basket', array('id_basket' => $id_basket));
        redirect('Cart');
    }

    public function showbillotop($buyer_id)
    {
        $this->load->library('session');
        $this->load->model('game_model');
        $this->db->select('*');
        $this->db->from('tb_billotop');
        $this->db->join('tb_buyer', 'tb_billotop.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_product', 'tb_billotop.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_buyer.buyer_id', $buyer_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readbillotop($buyer_id)
    {
        $this->load->library('session');
        $this->load->model('game_model');
        $this->db->select('*');
        $this->db->order_by('id_billotop', 'DESC');
        $this->db->from('tb_billotop');
        $this->db->join('tb_buyer', 'tb_billotop.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_product', 'tb_billotop.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_buyer.buyer_id', $buyer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showbillotopmember($buyer_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_billotop');
        $this->db->join('tb_buyer', 'tb_billotop.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_product', 'tb_billotop.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_billotop.buyer_id', $buyer_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }


    public function addbillotop()
    {       $id_basket = $this->input->post('id_basket');
            $buyer_id = $this->input->post('buyer_id');
            $id_product = $this->input->post('id_product');
            $number_bill = $this->input->post('number_bill');
            $name_product_bill = $this->input->post('name_product_bill');
            $status_bill = $this->input->post('status_bill');
            $this->db->select('*');
            $query = $this->db->get('tb_billotop');
            $num = $query->num_rows();
            if ($num >= 0) {
            $buyer_id = $this->input->post('buyer_id');
            $id_product = $this->input->post('id_product');
            $number_bill = $this->input->post('number_bill');
            $name_product_bill = $this->input->post('name_product_bill');
            $status_bill = $this->input->post('status_bill');
                $data = array(
                    'buyer_id' =>  $buyer_id,
                    'id_product' =>  $id_product,
                    'number_bill' =>  $number_bill,
                    'name_product_bill' =>  $name_product_bill,
                    'status_bill' =>  $status_bill,
                );
                $data2 = array(
                    'number' => $this->input->post('stocktell')
                );
                $this->db->where('id_product', $this->input->post('id_product'));
                $query = $this->db->update('tb_product', $data2);

                $query = $this->db->insert('tb_billotop', $data);
                $this->db->delete('tb_basket', array('id_basket' => $id_basket));
                redirect('Buy');

            }
        }


    public function showbillotopbuy($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_billotop');
        $this->db->join('tb_buyer', 'tb_billotop.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_product', 'tb_billotop.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_product.user_id', $user_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }


    public function readbillotopbuy($id_billotop)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_billotop');
        $this->db->join('tb_buyer', 'tb_billotop.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_product', 'tb_billotop.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_billotop.id_billotop', $id_billotop);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showalert($buyer_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_alert');
        $this->db->join('tb_buyer', 'tb_alert.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_user', 'tb_alert.user_id = tb_user.user_id', 'inner');
        $this->db->where('tb_alert.buyer_id', $buyer_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowalert($id_alert)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_alert');
        $this->db->join('tb_buyer', 'tb_alert.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_user', 'tb_alert.user_id = tb_user.user_id', 'inner');
        $this->db->where('id_alert', $id_alert);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showreport($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_report');
        $this->db->join('tb_buyer', 'tb_report.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_user', 'tb_report.user_id = tb_user.user_id', 'inner');
        $this->db->where('tb_report.user_id', $user_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowreport($id_report)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_report');
        $this->db->join('tb_buyer', 'tb_report.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_user', 'tb_report.user_id = tb_user.user_id', 'inner');
        $this->db->where('id_report', $id_report);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function  addalert()
    {
        $buyer_id = $this->input->post('buyer_id');
        $user_id = $this->input->post('user_id');
        $topic = $this->input->post('topic');
        $product_number = $this->input->post('product_number');
        $this->db->select('*');
        $query = $this->db->get('tb_alert');
        $num = $query->num_rows();
        if ($num >= 0) {
            $buyer_id = $this->input->post('buyer_id');
            $user_id = $this->input->post('user_id');
            $topic = $this->input->post('topic');
            $product_number = $this->input->post('product_number');
            $data = array(
                'buyer_id' =>  $buyer_id,
                'user_id' =>  $user_id,
                'topic' =>  $topic,
                'product_number' =>  $product_number,
            );
            $query = $this->db->insert('tb_alert', $data);
            redirect('Dashboard/player_player');
        }
    }

    public function  addreport()
    {
        $buyer_id = $this->input->post('buyer_id');
        $user_id = $this->input->post('user_id');
        $topic_report = $this->input->post('topic_report');
        $detel_report = $this->input->post('detel_report');
        $this->db->select('*');
        $query = $this->db->get('tb_alert');
        $num = $query->num_rows();
        if ($num >= 0) {
            $buyer_id = $this->input->post('buyer_id');
            $user_id = $this->input->post('user_id');
            $topic_report = $this->input->post('topic_report');
            $detel_report = $this->input->post('detel_report');
            $data = array(
                'buyer_id' =>  $buyer_id,
                'user_id' =>  $user_id,
                'topic_report' =>  $topic_report,
                'detel_report' =>  $detel_report,
            );
            $query = $this->db->insert('tb_report', $data);
            redirect('Member/Alertwrit');
        }
    }

    public function  addreportbuyer()
    {
        $buyer_id = $this->input->post('buyer_id');
        $admin_id = $this->input->post('admin_id');
        $topic_report_buyer = $this->input->post('topic_report_buyer');
        $detel_report_buyer = $this->input->post('detel_report_buyer');
        $this->db->select('*');
        $query = $this->db->get('tb_report_buyer');
        $num = $query->num_rows();
        if ($num >= 0) {
            $buyer_id = $this->input->post('buyer_id');
            $admin_id = $this->input->post('admin_id');
            $topic_report_buyer = $this->input->post('topic_report_buyer');
            $detel_report_buyer = $this->input->post('detel_report_buyer');
            $data = array(
                'buyer_id' =>  $buyer_id,
                'admin_id' =>  $admin_id,
                'topic_report_buyer' =>  $topic_report_buyer,
                'detel_report_buyer' =>  $detel_report_buyer,
            );
            $query = $this->db->insert('tb_report_buyer', $data);
            redirect('Member/Alertwritadmin');
        }
    }

    public function  addreportuser()
    {
        $user_id = $this->input->post('user_id');
        $admin_id = $this->input->post('admin_id');
        $topic_report_user = $this->input->post('topic_report_user');
        $detel_report_user = $this->input->post('detel_report_user');
        $this->db->select('*');
        $query = $this->db->get('tb_report_user');
        $num = $query->num_rows();
        if ($num >= 0) {
            $user_id = $this->input->post('user_id');
            $admin_id = $this->input->post('admin_id');
            $topic_report_user = $this->input->post('topic_report_user');
            $detel_report_user = $this->input->post('detel_report_user');
            $data = array(
                'user_id' =>  $user_id,
                'admin_id' =>  $admin_id,
                'topic_report_user' =>  $topic_report_user,
                'detel_report_user' =>  $detel_report_user,
            );
            $query = $this->db->insert('tb_report_user', $data);
            redirect('Dashboard/Alertwritadmin');
        }
    }

    public function  addalertreport()
    {
        $buyer_id = $this->input->post('buyer_id');
        $user_id = $this->input->post('user_id');
        $topic = $this->input->post('topic');
        $product_number = $this->input->post('product_number');
        $this->db->select('*');
        $query = $this->db->get('tb_alert');
        $num = $query->num_rows();
        if ($num >= 0) {
            $buyer_id = $this->input->post('buyer_id');
            $user_id = $this->input->post('user_id');
            $topic = $this->input->post('topic');
            $product_number = $this->input->post('product_number');
            $data = array(
                'buyer_id' =>  $buyer_id,
                'user_id' =>  $user_id,
                'topic' =>  $topic,
                'product_number' =>  $product_number,
            );
            $query = $this->db->insert('tb_alert', $data);
            redirect('Dashboard/Alertorder');
        }
    }

    public function showalertadmin_buy($buyer_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_alertadmin');
        $this->db->join('tb_buyer', 'tb_alertadmin.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_admin', 'tb_alertadmin.admin_id = tb_admin.admin_id', 'inner');
        $this->db->where('tb_alertadmin.buyer_id', $buyer_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowalertadmin_buy($id_alertadmin)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_alertadmin');
        $this->db->join('tb_buyer', 'tb_alertadmin.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_admin', 'tb_alertadmin.admin_id = tb_admin.admin_id', 'inner');
        $this->db->where('id_alertadmin', $id_alertadmin);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showalertadmin_user($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_alertadmin_user');
        $this->db->join('tb_admin', 'tb_alertadmin_user.admin_id = tb_admin.admin_id', 'inner');
        $this->db->join('tb_user', 'tb_alertadmin_user.user_id = tb_user.user_id', 'inner');
        $this->db->where('tb_alertadmin_user.user_id', $user_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowalertadmin_user($id_alertadmin_user)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_alertadmin_user');
        $this->db->join('tb_user', 'tb_alertadmin_user.user_id = tb_user.user_id', 'inner');
        $this->db->join('tb_admin', 'tb_alertadmin_user.admin_id = tb_admin.admin_id', 'inner');
        $this->db->where('tb_alertadmin_user.id_alert_user', $id_alertadmin_user);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function addstatusbillotop()
    {
        $id_billotop = $this->input->post('id_billotop');
        $data = array(
            'status_bill' => $this->input->post('status_bill')
        );
        $this->db->where('id_billotop', $this->input->post('id_billotop'));
        $query = $this->db->update('tb_billotop', $data);
        redirect('Dashboard/player_player/' . $id_billotop);
    }

    public function addblocksell()
    {
        $id_product = $this->input->post('id_product');
        $data = array(
            'status_product' => $this->input->post('status_product')
        );
        $this->db->where('id_product', $this->input->post('id_product'));
        $query = $this->db->update('tb_product', $data);
        redirect('Dashboard/Statusproduct/' . $id_product);
    }

    public function addnoblocksell()
    {
        $id_product = $this->input->post('id_product');
        $data = array(
            'status_product' => $this->input->post('status_product')
        );
        $this->db->where('id_product', $this->input->post('id_product'));
        $query = $this->db->update('tb_product', $data);
        redirect('Dashboard/Statusproduct/' . $id_product);
    }

    public function shownewsmember()
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_news');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readnewsmember($id_news)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_news');
        $this->db->where('tb_news.id_news', $id_news);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function addlike()
    {
        $buyer_id = $this->input->post('buyer_id');
        $user_id = $this->input->post('user_id');
        $this->db->select('*');
        $this->db->where('buyer_id', $buyer_id);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('tb_like');
        $num = $query->num_rows($query);
        if ($num >= 1) {
            echo $this->session->set_flashdata('msg', 'มีหมวดหมู่เเล้ว');
            redirect('Store/store_view/'.$user_id);
        } else {
            $buyer_id = $this->input->post('buyer_id');
            $user_id = $this->input->post('user_id');
            $data = array(
                'buyer_id' =>  $buyer_id,
                'user_id' =>  $user_id,
            );
            $query = $this->db->insert('tb_like', $data);
            redirect('Store/store_view/'.$user_id);
        }
    }

    public function showlike($buyer_id,$user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_like');
        $this->db->where('buyer_id',$buyer_id);
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function dellike($id_like)
    {
        $user_id = $this->input->post('user_id');
        $buyer_id = $this->input->post('buyer_id');
        $this->db->delete('tb_like', array('id_like' => $id_like));
        redirect('Store/store_view/'.$user_id);
    }


    public function countlike($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_like');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        $rescount = $query->result();
        return $rescount;
    }

    public function showomembertopgood()
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_otopgood');
        $this->db->join('tb_user', 'tb_otopgood.user_id = tb_user.user_id', 'inner');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function addimgtrust()
    {
        $id_product  = $this->input->post('id_product');
        $config['upload_path'] = './assest/img/product/';
        $config['allowed_types'] = 'gif|jpg|png|tif|jpeg';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
          if ($num >= 0) {
            $id_product  = $this->input->post('id_product');
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $data = array(

                'id_product' => $this->input->post('id_product'),
            );
            $query = $this->db->insert('tb_addimg', $data);
            $id_product  = $this->input->post('id_product');
            redirect('/dashboard/Addimgproduct/' . $id_product);
        }
    }

    // public function delimgorder($id_imgorder)
    // {
    //     $id_game  = $this->input->post('id_game');
    //     $this->db->delete('tb_imgshow', array('id_imgshow' => $id_imgorder));
    //     redirect('/Gameshope/Addimgproduct/' . $id_product);
    // }


    public function showidproduct($id_product)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_addimg');
        $this->db->join('tb_product', 'tb_addimg.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_addimg.id_product', $id_product);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function addimgtrustv2()
    {
        $id_product  = $this->input->post('id_product');
        $config['upload_path'] = './assest/img/product/';
        $config['allowed_types'] = 'gif|jpg|png|tif|jpeg';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $query = $this->db->get('tb_addimg');
        $num = $query->num_rows();
        if (!$this->upload->do_upload('name_img')) {
            echo $this->upload->display_errors();
        } else {
            $id_product  = $this->input->post('id_product');
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $data = array(
                'id_product' => $this->input->post('id_product'),
                'name_img' => $filename,
            );
            $query = $this->db->insert('tb_addimg', $data);
            redirect('/dashboard/Addimgproduct/' . $id_product);
        }
    }

    public function showimgorder($id_product)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_addimg');
        $this->db->join('tb_product', 'tb_addimg.id_product = tb_product.id_product', 'inner');
        $this->db->where('tb_addimg.id_product', $id_product);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function delimg($id_imgorder)
    {
        $id_product  = $this->input->post('id_product');
        $this->db->delete('tb_addimg', array('id_imgorder' => $id_imgorder));
        redirect('/dashboard/Addimgproduct/' . $id_product);
    }

    public function editstock()
    {
        $id_product  = $this->input->post('id_product');
            $data = array(

                'number' => $this->input->post('number'),
            );
            $this->db->where('id_product', $this->input->post('id_product'));
            $query = $this->db->update('tb_product', $data);
            redirect('/dashboard/Statusproduct/' . $id_product);
        } 

}
