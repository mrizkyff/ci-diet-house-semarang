<?php
    class Transaksi extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Transaksi','Transaksi');
            $this->load->model('M_Main','Main');
        }
        public function getAllTransaksi(){
            $result = $this->Transaksi->get_all_transaksi();
            echo json_encode($result);
        }
        public function hapus(){
            $id = $this->input->post('id');
            $jmlBeli = $this->input->post('jml');
            
            // update stok
            $stok = ($this->Main->get_menu_by_code($id)[0]['stok']);
            $stok = $stok + $jmlBeli;
            $result = $this->Main->update_stok($id,$stok);
            
            $result = $this->Transaksi->delete($id);
            echo json_encode($result);
        }
        
        public function approve(){
            $id = $this->input->post('id');
            
            $data = array(
                'status' => '2'
            );

            $result = $this->Transaksi->paid($id,$data);
            echo json_encode($result);
        }
        
    }
    
?>