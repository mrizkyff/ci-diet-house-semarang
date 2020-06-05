<?php
    class Transaksi extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Transaksi','Transaksi');
            $this->load->model('M_Main','Main');
            $this->load->model('M_Logsys','Logs');
        }
        public function getAllTransaksi(){
            $result = $this->Transaksi->get_all_transaksi();
            echo json_encode($result);
        }
        public function hapus(){
            $id = $this->input->post('id');
            $jmlBeli = $this->input->post('jml');
            $idProduk = $this->input->post('idproduk');
            
            // update stok
            $stok = $this->Main->get_menu_by_code($idProduk)[0]["stok"];
            $stok = $stok + $jmlBeli;
            $this->Main->update_stok($idProduk,$stok);
            
            
            // untuk log decline
            $tanggal = date('Y-m-d H:i:s');
            $data = array(
                'id_transaksi' => $id,
                'edit_by' => $this->session->userdata('idUser'),
                'action' => 'Del Transaksi',
                'tgl_action' => $tanggal
            );
            $this->Logs->save_log($data);
            
            // update status jadi declined
            $data = array(
                'stat' => '13'
            );
            $result = $this->Transaksi->declined($id,$data);

            echo json_encode($result);
        }
        
        public function approve(){
            $id = $this->input->post('id');
            
            // untuk log approve
            $tanggal = date('Y-m-d H:i:s');
            $data = array(
                'id_transaksi' => $id,
                'edit_by' => $this->session->userdata('idUser'),
                'action' => 'Acc Transaksi',
                'tgl_action' => $tanggal
            );
            $this->Logs->save_log($data);

            $data = array(
                'stat' => '2'
            );

            $result = $this->Transaksi->paid($id,$data);
            echo json_encode($result);
        }
        public function sent(){
            $id = $this->input->post('id');
            
            // untuk log sent delivery
            $tanggal = date('Y-m-d H:i:s');
            $data = array(
                'id_transaksi' => $id,
                'edit_by' => $this->session->userdata('idUser'),
                'action' => 'Delivery',
                'tgl_action' => $tanggal
            );
            $this->Logs->save_log($data);


            $data = array(
                'stat' => '3'
            );

            $result = $this->Transaksi->sent($id,$data);
            echo json_encode($result);
        }
        
    }
    
?>