<?php
    class Login extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Login');
        }
        public function index(){
            $this->load->view('public/template/header');
            $this->load->view('public/page/pageLogin');
			$this->load->view('public/template/footer');
			$this->load->view('public/script/login');
        }
        public function act_login(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'password' => $password,
            );
    
            $idUser = $this->M_Login->find_id($where);
            $level = $this->M_Login->find_level($where);
            $cek = $this->M_Login->cek_login($where)->num_rows();
            if($cek > 0){
    
                $data_session = array(
                    'username' => $username,
                    'status' => "login",
                    'idUser' => $idUser[0]->id_user
                );
    
                $this->session->set_userdata($data_session);
                if($level[0]->level == 2){
                    redirect(base_url("main"));
                }
                elseif($level[0]->level == 1){
                    redirect(base_url("administrator"));
                }
    
            }
            else{
                echo "Username dan password salah!";
            }
        }
        function logout(){
            $this->session->sess_destroy();
            redirect(base_url("login"));
        }
    }
    
?>