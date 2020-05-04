<?php
    class Transaksi extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Transaksi','Transaksi');
        }
        public function getAllTransaksi(){
            $result = $this->Transaksi->get_all_transaksi();
            echo json_encode($result);
        }
    }
    
?>