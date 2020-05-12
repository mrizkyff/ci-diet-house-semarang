<?php

class Administrator extends CI_Controller
{
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
        
}

?>