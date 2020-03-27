<?php
    class Produk extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_produk','produk');
        }
        public function getAllProduk(){
            $data = $this->produk->getProduk();
            echo json_encode($data);
        }
    }
    
?>