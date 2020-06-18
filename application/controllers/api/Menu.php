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
    public function beli_get(){
        $id_user = $this->get('id_user');
        $id_produk = $this->get('id_produk');
        $qty = $this->get('quantity');
        $tanggal = date('Y-m-d H:i:s');
        
        $data = array(
            'id_produk' => $id_produk,
            'id_user' => $id_user,
            'stat' => '1',
            'jmlJual' => $qty,
            'tgl_transaksi' => $tanggal
        );

        if($id_user === null){
            // id not found
            $this->response([
                'status' => false,
                'message' => 'harus login, id session tidak ada'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        else{
            if($id_produk === null){
                // id not found
                $this->response([
                    'status' => false,
                    'message' => 'id produk tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
            else{
                if($this->menu->buy($data)){
                    $stok = ($this->menu->get_menu_by_code($id_produk)[0]['stok']);
                    $stok = $stok - $qty;
                    $this->menu->update_stok($id_produk,$stok);
                    $this->response([
                        'status' => true,
                        'message' => 'pembelian sukses'
                    ], REST_Controller::HTTP_OK);
                }
                else{
                    $this->response([
                        'status' => false,
                        'message' => 'gagal beli'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }
            }
        }
    }
    public function category_get(){
        $id_kategori = $this->get('category');
        if($id_kategori === null){
            $this->response([
                'status' => false,
                'message' => 'id kategori tidak tersedia',
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        else{
            $menu_by_kategory = $this->menu->get_category($id_kategori);
            $this->response([
                'status' => true,
                'message' => 'sukses fetch menu by kategori',
                'data' => $menu_by_kategory,
            ], REST_Controller::HTTP_OK);
        }
    }
}

?>