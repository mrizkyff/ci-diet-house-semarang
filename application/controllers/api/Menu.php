<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;


class Menu extends REST_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Main','menu');
    }
    public function index_get(){
        $id = $this->get('id');

        if($id === null){
            $menu = $this->menu->getMenu();
        }
        else{
            $menu = $this->menu->getMenu($id);
        }

        if($menu){
            $this->response([
                'status' => true,
                'data' => $menu
            ], REST_Controller::HTTP_OK);
        }
        else{
            $this->response([
                'status' => false,
                'message' => 'id tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function index_delete(){
        $id = $this->delete('id');

        if($id === null){
            $this->response([
                'status' => false,
                'message' => 'masukkan id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        else{
            if($this->menu->deleteMenu($id)>0){
                // ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'berhasil dihapus'
                ], REST_Controller::HTTP_NO_CONTENT);
            }
            else{
                // id not found
                $this->response([
                    'status' => false,
                    'message' => 'id tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
}

?>