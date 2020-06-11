<?php

class Administrator extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') !== 'login'){
            if($this->session->userdata('level') !== '1'){
                echo 'anda harus login sebagai admin';
                redirect('login');
            }
        }
    }
    public function index(){
        $this->load->view('administrator/templates/adm_header');
        $this->load->view('administrator/templates/adm_sidebar');
        $this->load->view('administrator/pages/adm_dashboard');
        $this->load->view('administrator/templates/adm_footer');
        $this->load->view('administrator/script/dashboard');
    }
    public function produk(){
        $this->load->view('administrator/templates/adm_header');
        $this->load->view('administrator/templates/adm_sidebar');
        $this->load->view('administrator/pages/adm_produk');
        $this->load->view('administrator/templates/adm_footer');
        $this->load->view('administrator/script/produk');
    }
    public function transaksi(){
        $this->load->view('administrator/templates/adm_header');
        $this->load->view('administrator/templates/adm_sidebar');
        $this->load->view('administrator/pages/adm_transaksi_list');
        $this->load->view('administrator/templates/adm_footer');
        $this->load->view('administrator/script/transaksi');
    }
    public function user_list(){
        $this->load->view('administrator/templates/adm_header');
        $this->load->view('administrator/templates/adm_sidebar');
        $this->load->view('administrator/pages/adm_user_list');
        $this->load->view('administrator/templates/adm_footer');
        $this->load->view('administrator/script/userlist');
    }
    public function log_sys(){
        $this->load->view('administrator/templates/adm_header');
        $this->load->view('administrator/templates/adm_sidebar');
        $this->load->view('administrator/pages/adm_logsys');
        $this->load->view('administrator/templates/adm_footer');
        $this->load->view('administrator/script/logsys');
    }
    public function setting(){
        $this->load->view('administrator/templates/adm_header');
        $this->load->view('administrator/templates/adm_sidebar');
        $this->load->view('administrator/pages/adm_setting');
        $this->load->view('administrator/templates/adm_footer');
        $this->load->view('administrator/script/setting');
    }
    public function profile(){
        $this->load->view('administrator/templates/adm_header');
        $this->load->view('administrator/templates/adm_sidebar');
        $this->load->view('administrator/pages/adm_profile');
        $this->load->view('administrator/templates/adm_footer');
        $this->load->view('administrator/script/profile');
    }
        
}

?>