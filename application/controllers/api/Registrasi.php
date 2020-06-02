<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class Registrasi extends REST_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("M_Registrasi",'Registrasi');
    }
    public function index_post(){
        $tanggal = date('Y-m-d H:i:s');
        $data = [
            'f_name' => $this->post('firstname'),
            'l_name' => $this->post('lastname'),
            'username' => $this->post('username'),
            'password' => $this->post('password'),
            'email' => $this->post('email'),
            'telp' => $this->post('telp'),
            'level' => '2',
            'alamat' => $this->post('alamat'),
            'tgl_registrasi' => $tanggal,
            'status' => '1'
        ];

        if($this->Registrasi->createUser($data)>0){
            $this->response([
                'status' => true,
                'message' => 'user created (registrasi berhasil)'
            ], REST_Controller::HTTP_CREATED);
        }
        else{
            // id not found
            $this->response([
                'status' => false,
                'message' => 'registrasi gagal'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    public function index_put(){
        $id = $this->put('id');

        $tanggal = date('Y-m-d H:i:s');
        $data = [
            'f_name' => $this->put('firstname'),
            'l_name' => $this->put('lastname'),
            'username' => $this->put('username'),
            'password' => $this->put('password'),
            'email' => $this->put('email'),
            'telp' => $this->put('telp'),
            'level' => '2',
            'alamat' => $this->put('alamat'),
            'tgl_registrasi' => $tanggal,
            'status' => '1'
        ];

        if($this->Registrasi->updateUser($data,$id)>0){
            $this->response([
                'status' => true,
                'message' => 'user creaupdated (update berhasil)'
            ], REST_Controller::HTTP_CREATED);
        }
        else{
            // id not found
            $this->response([
                'status' => false,
                'message' => 'update user gagal'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}


?>