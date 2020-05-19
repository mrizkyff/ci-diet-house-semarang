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
        public function updateUser(){
            $id = $this->input->post('id');
            $level = $this->input->post('level');
            $status = $this->input->post('status');

            $where = array(
                'id_user' => $id
            );

            $data = array(
                'level' => $level,
                'status' => $status
            );
            $hasil = $this->User->update_user($where,$data);
            echo json_encode($hasil);
        }
        public function resetpassword(){    
            $id = $this->input->post('id');
            $password = $this->input->post('password');

            $where = array(
                'id_user' => $id
            );

            $data = array(
                'password' => $password
            );

            $hasil = $this->User->update_user($where,$data);
            echo json_encode($hasil);
        }
    }
    
?>