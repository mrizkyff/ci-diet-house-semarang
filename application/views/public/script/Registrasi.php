<?php
    class Registrasi extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Registrasi','Registrasi');
        }
    }
    
?>