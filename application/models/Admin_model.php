<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function showproductadmin()
    {
        $this->db->select('*');
        $this->db->from('tb_product');
        $this->db->join('tb_grop', 'tb_product.id_grop = tb_grop.id_grop', 'inner');
        $this->db->join('tb_user', 'tb_product.user_id = tb_user.user_id', 'inner');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readproductadmin($id_product)
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

    public function addgrop()
    {
        $id_grop = $this->input->post('id_grop');
        $admin_id = $this->input->post('admin_id');
        $grop_name = $this->input->post('grop_name');
        $grop_logo_img = $this->input->post('grop_logo_img');
        $this->db->select('*');
        $this->db->where('grop_name', $grop_name);
        $query = $this->db->get('tb_grop');
        $num = $query->num_rows($query);
        if ($num >= 1) {
            echo $this->session->set_flashdata('msg', 'มีหมวดหมู่เเล้ว');
            $this->load->view('admin/view/group');
        } else {
            $admin_id = $this->input->post('admin_id');
            $grop_name = $this->input->post('grop_name');
            $grop_logo_img = $this->input->post('grop_logo_img');
            $data = array(
                'admin_id' =>  $admin_id,
                'grop_name' =>  $grop_name,
                'grop_logo_img' =>  $grop_logo_img,
            );
            $query = $this->db->insert('tb_grop', $data);
            redirect('Admin/Group');
        }
    }

    public function addnewsadmin()
    {
        $admin_id  = $this->input->post('admin_id');
        $config['upload_path'] = './assest/img/otop/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img_news')) {
            $this->session->set_flashdata('show', 'no');
            redirect('/admin/addnews/');
        } else {
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $data = array(
                'topic_news' => $this->input->post('topic_news'),
                'detel_news' => $this->input->post('detel_news'),
                'admin_id' => $admin_id,
                'img_news' => $filename
            );
            $query = $this->db->insert('tb_news', $data);
            redirect('/admin/addnews/');
        }
    }

    public function shownews()
    {
        $this->db->select('*');
        $this->db->from('tb_news');
        $this->db->join('tb_admin', 'tb_news.admin_id = tb_admin.admin_id', 'inner');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readnews($id_news)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_news');
        $this->db->join('tb_admin', 'tb_news.admin_id = tb_admin.admin_id', 'inner');
        $this->db->where('tb_news.id_news', $id_news);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function delnews($id_news)
    {
        $this->db->delete('tb_news', array('id_news' => $id_news));
        redirect('Admin/news');
    }

    public function showselladmin()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowselladmin($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('tb_user.user_id', $user_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showotopselladmin($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_product');
        $this->db->join('tb_grop', 'tb_product.id_grop = tb_grop.id_grop', 'inner');
        $this->db->join('tb_user', 'tb_product.user_id = tb_user.user_id', 'inner');
        $this->db->where('tb_product.user_id', $user_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function showmemberadmin()
    {
        $this->db->select('*');
        $this->db->from('tb_buyer');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowmemberadmin($buyer_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_buyer');
        $this->db->where('tb_buyer.buyer_id', $buyer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showbillmemberadmin($buyer_id)
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

    public function readbillotopadmin($id_billotop)
    {
        $this->load->library('session');
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

    public function showreportmemberadmin()
    {
        $this->db->select('*');
        $this->db->from('tb_report_buyer');
        $this->db->join('tb_buyer', 'tb_report_buyer.buyer_id = tb_buyer.buyer_id', 'inner');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowreportmemberadmin($id_report_buyer)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_report_buyer');
        $this->db->join('tb_buyer', 'tb_report_buyer.buyer_id = tb_buyer.buyer_id', 'inner');
        $this->db->join('tb_admin', 'tb_report_buyer.admin_id = tb_admin.admin_id', 'inner');
        $this->db->where('tb_report_buyer.id_report_buyer', $id_report_buyer);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function showreportselladmin()
    {
        $this->db->select('*');
        $this->db->from('tb_report_user');
        $this->db->join('tb_user', 'tb_report_user.user_id = tb_user.user_id', 'inner');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function readshowreportselladmin($id_report_user)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_report_user');
        $this->db->join('tb_user', 'tb_report_user.user_id = tb_user.user_id', 'inner');
        $this->db->join('tb_admin', 'tb_report_user.admin_id = tb_admin.admin_id', 'inner');
        $this->db->where('tb_report_user.id_report_user', $id_report_user);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function  addalertuser()
    {
        $user_id = $this->input->post('user_id');
        $admin_id = $this->input->post('admin_id');
        $topic_alert_user = $this->input->post('topic_alert_user');
        $detel_alert_user = $this->input->post('detel_alert_user');
        $this->db->select('*');
        $query = $this->db->get('tb_alertadmin_user');
        $num = $query->num_rows();
        if ($num >= 0) {
            $user_id = $this->input->post('user_id');
            $admin_id = $this->input->post('admin_id');
            $topic_alert_user = $this->input->post('topic_alert_user');
            $detel_alert_user = $this->input->post('detel_alert_user');
            $data = array(
                'user_id' =>  $user_id,
                'admin_id' =>  $admin_id,
                'topic_alert_user' =>  $topic_alert_user,
                'detel_alert_user' =>  $detel_alert_user,
            );
            $query = $this->db->insert('tb_alertadmin_user', $data);
            redirect('Admin/Seller');
        }
    }

    public function addalertbuyer()
    {
        $buyer_id = $this->input->post('buyer_id');
        $admin_id = $this->input->post('admin_id');
        $topic_buy = $this->input->post('topic_buy');
        $detel_buy = $this->input->post('detel_buy');
        $this->db->select('*');
        $query = $this->db->get('tb_alertadmin');
        $num = $query->num_rows();
        if ($num >= 0) {
            $buyer_id = $this->input->post('buyer_id');
            $admin_id = $this->input->post('admin_id');
            $topic_buy = $this->input->post('topic_buy');
            $detel_buy = $this->input->post('detel_buy');
            $data = array(
                'buyer_id' =>  $buyer_id,
                'admin_id' =>  $admin_id,
                'topic_buy' =>  $topic_buy,
                'detel_buy' =>  $detel_buy,
            );
            $query = $this->db->insert('tb_alertadmin', $data);
            redirect('Admin/User');
        }
    }

    public function addblock()
    {
        $id_product = $this->input->post('id_product');
        $data = array(
            'status_product' => $this->input->post('status_product')
        );
        $this->db->where('id_product', $this->input->post('id_product'));
        $query = $this->db->update('tb_product', $data);
        redirect('Admin/ProductView/' . $id_product);
    }

    public function addnoblock()
    {
        $id_product = $this->input->post('id_product');
        $data = array(
            'status_product' => $this->input->post('status_product')
        );
        $this->db->where('id_product', $this->input->post('id_product'));
        $query = $this->db->update('tb_product', $data);
        redirect('Admin/ProductView/' . $id_product);
    }

    public function addblockuser()
    {
        $user_id = $this->input->post('user_id');
        $data = array(
            'user_role' => $this->input->post('user_role')
        );
        $this->db->where('user_id', $this->input->post('user_id'));
        $query = $this->db->update('tb_user', $data);
        redirect('Admin/SellerView/' . $user_id);
    }

    public function addnoblockuser()
    {
        $user_id = $this->input->post('user_id');
        $data = array(
            'user_role' => $this->input->post('user_role')
        );
        $this->db->where('user_id', $this->input->post('user_id'));
        $query = $this->db->update('tb_user', $data);
        redirect('Admin/SellerView/' . $user_id);
    }

    public function addblockbuyer()
    {
        $buyer_id = $this->input->post('buyer_id');
        $data = array(
            'buyer_role' => $this->input->post('buyer_role')
        );
        $this->db->where('buyer_id', $this->input->post('buyer_id'));
        $query = $this->db->update('tb_buyer', $data);
        redirect('Admin/UserView/' . $buyer_id);
    }

    public function addnoblockbuyer()
    {
        $buyer_id = $this->input->post('buyer_id');
        $data = array(
            'buyer_role' => $this->input->post('buyer_role')
        );
        $this->db->where('buyer_id', $this->input->post('buyer_id'));
        $query = $this->db->update('tb_buyer', $data);
        redirect('Admin/UserView/' . $buyer_id);
    }


    public function addotopgood()
    {
     
        $user_id = $this->input->post('user_id');
        $this->db->select('*');
        $query = $this->db->get('tb_otopgood');
            $data = array(
                'user_id' =>  $user_id,
            );
            $query = $this->db->insert('tb_otopgood', $data);
            redirect('Admin/SellerView/'.$user_id);
    }

    public function showotopgood($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_otopgood');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function delotopgood($id_otop_good)
    {
        $user_id = $this->input->post('user_id');
        $this->db->delete('tb_otopgood', array('id_otop_good' => $id_otop_good));
        redirect('Admin/SellerView/'.$user_id);
    }

    public function countlikeadmin($user_id)
    {
        $this->load->library('session');
        $this->db->select('*');
        $this->db->from('tb_like');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        $rescount = $query->result();
        return $rescount;
    }

}
