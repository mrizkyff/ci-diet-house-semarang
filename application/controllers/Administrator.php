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
}

?>