<?php
    class Registrasi extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Registrasi','Registrasi');
        }
        public function index(){
            $this->load->view('public/template/header');
            $this->load->view('public/page/pageRegistrasi');
			$this->load->view('public/template/footer');
			$this->load->view('public/script/Registrasi');
        }
        public function daftar(){
            
        }
    }
    
?>