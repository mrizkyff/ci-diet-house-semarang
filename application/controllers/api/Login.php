<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

    class Login extends REST_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Login','Login');
        }
        public function index_post(){
            $username = $this->post('username');
            $password = $this->post('password');

            $where = array(
                'username' => $username,
                'password' => $password,
            );

            // data session
            
            $cek = $this->Login->cek_login($where)->num_rows();
            $userInfo = $this->Login->cek_login($where)->result_array();

            if($cek >0){
                $this->response([
                    'status' => true,
                    'message' => 'Login Sukses!',
                    'data' => $userInfo
                ], REST_Controller::HTTP_OK);
            }
            else{
                // id not found
                $this->response([
                    'status' => false,
                    'message' => 'login gagal!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }        
    }
    
?>