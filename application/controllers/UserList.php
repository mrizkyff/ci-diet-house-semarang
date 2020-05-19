<?php
    class UserList extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_UserList','User');
        }
        public function getAllUser(){
            $hasil = $this->User->get_all_user();
            echo json_encode($hasil);
        }
        public function getUserById(){  
            $id = $this->input->post('id');
            $hasil = $this->User->get_by_id($id);
            echo json_encode($hasil);
        }
    }
    
?>