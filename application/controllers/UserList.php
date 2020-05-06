<?php
    class UserList extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_UserList','User');
        }
        
    }
    
?>