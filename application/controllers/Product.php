<?php
    class Product extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Product');
        }
        public function getAllProduk(){
            $data = $this->M_Product->getProduk();
            echo json_encode($data);
        }
        public function save(){
            $tanggal = date('Y-m-d H:i:s');
            $nmbrg = $this->input->post('nmbrg');
            $jml = $this->input->post('jml');
            $hrg = $this->input->post('hrg');
            $desc = $this->input->post('desc');

            $data = array(
                'nmbrg' => $nmbrg,
                'stok' => $jml,
                'harga' => $hrg,
                'deskripsi' => $desc,
                'tgl_stok' => $tanggal
            );

            $hasil = $this->M_Product->save_product($data);
            echo json_encode($hasil);
        }
    }
    
?>