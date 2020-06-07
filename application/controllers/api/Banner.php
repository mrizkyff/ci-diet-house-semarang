<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class Banner extends REST_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Main', 'main');
    }
    public function banner_get(){
        $banner = $this->main->getBanner();

        if($banner){
            $this->response([
                'status' => true,
                'data' => $banner
            ], REST_Controller::HTTP_OK);
        }
        else{
            $this->response([
                'status' => false,
                'message' => 'id tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}

?>