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
        public function do_upload(){
            $tanggal = date('Y-m-d H:i:s');
            $kdbrg = 'DHS';
            $nmbrg = $this->input->post('nmbrg');
            $stok = $this->input->post('jml');
            $harga = $this->input->post('hrg');
            $deskripsi = $this->input->post('desc');
            // $gambar = $data['upload_data']['file_name'];

            $config['upload_path']=  './asset/img/food/';
            $config['allowed_types']='jpg';
            // $config['encrypt_name']=TRUE;

            $this->load->library('upload',$config);
            if($this->upload->do_upload('file')){
                $data = array('upload_data' => $this->upload->data());

                $dt = array(
                    'kdbrg' => $kdbrg,
                    'nmbrg' => $nmbrg,
                    'stok' => $stok,
                    'harga' => $harga,
                    'deskripsi' => $deskripsi,
                    'tgl_stok' => $tanggal,
                    // 'gambar' => $gambar
                );

                $result = $this->produk->simpanProduk($dt);

                echo json_decode($result);
            }
        }
    }
    
?>