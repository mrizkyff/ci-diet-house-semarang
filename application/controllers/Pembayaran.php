<?php 
    class Pembayaran extends CI_Controller
    {
        public function __construct(){
            parent:: __construct();
            $this->load->model('M_Pembayaran','Pembayaran');
        }
        public function do_upload()
        {
            $id = $this->session->userdata('idUser');
            $total = $this->input->post('total');
            $tanggal = date('Y-m-d H:i:s');

            // var_dump($_POST);
            // var_dump($_FILES);

                $config['upload_path']          = './asset/img/pembayaran/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['encrypt_name']        = TRUE;
               
                $this->load->library('upload', $config);
                if($this->upload->do_upload('foto')){
                    $upload_data = $this->upload->data();
                    
                    
                    $nama = $upload_data['file_name'];
                    
                    $data = array(
                        'foto_pembayaran' => $nama,
                        'id_user' => $id,
                        'total_pembayaran' => $total,
                        'tanggal_checkout' => $tanggal,
                    );
                    $hasil = $this->Pembayaran->submit_pembayaran($data);
                    echo json_encode($hasil);
                }
                else{
                    echo 'gagal';
                }
        }
    }
    
?>