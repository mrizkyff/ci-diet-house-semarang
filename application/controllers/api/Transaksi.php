<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class Transaksi extends REST_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Transaksi', 'Transaksi');
    }
    public function transaction_get(){
        
        $id = $this->get('id');
        if ($id === null){
            $this->response([
                'status' => false,
                'message' => 'masukkan id'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        else{
            $transaksi = $this->Transaksi->get_all_transaksi($id);
            if($transaksi){
                $this->response([
                    'status' => true,
                    'data' => $transaksi
                ], REST_Controller::HTTP_OK);
            }
            else{
                $this->response([
                    'status' => false,
                    'message' => 'transaksi kosong'
                ], REST_Controller::HTTP_OK);
            }
        }
        
    }
    
}


?>