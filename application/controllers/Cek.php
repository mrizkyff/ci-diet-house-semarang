<?php
    class Cek extends CI_Controller
    {
        public function index(){
            var_dump($this->session->userdata);
        }
    }
    
?>