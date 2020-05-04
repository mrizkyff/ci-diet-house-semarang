<?php
    class Product extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Product');
        }
        public function getAllProduk(){
            $data = $this->M_Product->get_all_product();
            echo json_encode($data);
        }
        public function getByCode(){
            $id = $this->input->post('id');
            $hasil = $this->M_Product->get_by_id($id);
            echo json_encode($hasil);
        }

        public function do_upload()
        {
            $tanggal = date('Y-m-d H:i:s');
            $nmbrg = $this->input->post('nmbrg');
            $jml = $this->input->post('jml');
            $hrg = $this->input->post('hrg');
            $desc = $this->input->post('desc');
            $kategori = $this->input->post('kategori');

            // membuat kombinasi kode
            $kode = date('Ymd');
            $jam = date('Hi');
            $kode = $kode.'DHS'.$kategori.$kategori.$jam;

                $config['upload_path']          = './asset/img/food/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['encrypt_name']        = TRUE;
               

                $this->load->library('upload', $config);
                if($this->upload->do_upload('foto')){

                    $upload_data = $this->upload->data();
                    
                    
                    $nama = $upload_data['file_name'];

                    $data = array(
                        'nmbrg' => $nmbrg,
                        'kdbrg' => $kode,
                        'stok' => $jml,
                        'harga' => $hrg,
                        'deskripsi' => $desc,
                        'tgl_stok' => $tanggal,
                        'kategori' => $kategori,
                        'gambar' => $nama
                    );
                    
                    
                    $hasil = $this->M_Product->save_product($data);
                    echo json_encode($hasil);
                }
        }
        
        public function delete(){
            $id = $this->input->post('id');
            $hasil = $this->M_Product->delete_product($id);
            echo json_encode($hasil);
        }
        public function update(){
            $id = $this->input->post('id');
            $nmbrg = $this->input->post('nmbrg');
            $kategori = $this->input->post('kategori');
            $jml = $this->input->post('jml');
            $hrg = $this->input->post('hrg');
            $desc = $this->input->post('desc');

            $data = array(
                'nmbrg' => $nmbrg,
                'kategori' => $kategori,
                'stok' => $jml,
                'harga' => $hrg,
                'deskripsi' => $desc
            );
            $result = $this->M_Product->update_product($data,$id);
            echo json_encode($result);
            // print_r($data);
        }


    }
    
?>
        