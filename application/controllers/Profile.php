<?php 
    class Profile extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Profile','Profile');
        }
        public function getProfile(){
            $id = $this->input->post('id');
            $hasil = $this->Profile->get_profile($id);
            echo json_encode($hasil);
        }
        public function do_upload(){
            // //variabel get
            $id = $this->input->post('idUser');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $telp = $this->input->post('telp');
            $alamat = $this->input->post('alamat');

            $config['upload_path']          = './asset/img/user/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['encrypt_name']        = TRUE;
        
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foto')){
                $upload_data = $this->upload->data();
                $nama_gambar = $upload_data['file_name'];

                // variabel where

                //variabel array data buat dimasukin ke db
                $data = array(
                    'password' => $password,
                    'email' => $email,
                    'telp' => $telp,
                    'alamat' => $alamat,
                    'foto' => $nama_gambar
                );


                //panggil model buat insert
                $hasil = $this->Profile->update($id,$data);
                echo json_encode($hasil);
            }
            else{
                
                echo 'gagal';
            }
        }
    }
?>