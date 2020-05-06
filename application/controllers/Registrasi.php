<?php
    class Registrasi extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Registrasi','Registrasi');
        }
        public function index(){
            $this->load->view('public/template/header');
            $this->load->view('public/page/pageRegistrasi');
			$this->load->view('public/template/footer');
			$this->load->view('public/script/Registrasi');
        }
        public function do_upload()
        {

            $tanggal = date('Y-m-d H:i:s');
            $f_name = $this->input->post('first_name');
            $l_name = $this->input->post('last_name');
            $username = $this->input->post('username');
            $gender = $this->input->post('gender');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $telp = $this->input->post('telp');
            $alamat = $this->input->post('alamat');

                $config['upload_path']          = './asset/img/user/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['encrypt_name']        = TRUE;
               

                
                
                $this->load->library('upload', $config);
                if($this->upload->do_upload('foto')){
                    $upload_data = $this->upload->data();
                    
                    
                    $nama = $upload_data['file_name'];
                    
                    $data = array(
                        'f_name' => $f_name,
                        'l_name' => $l_name,
                        'username' => $username,
                        'password' => $password,
                        'email' => $email,
                        'telp' => $telp,
                        'level' => '2',
                        'alamat' => $alamat,
                        'tgl_registrasi' => $tanggal,
                        'foto' => $nama
                    );
                    $this->Registrasi->save_user($data);
                    // // echo json_encode($hasil);
                    ?>
                    <script type="text/javascript">
                        alert("Registrasi berhasil! Silakan login");
                        window.location.href = "<?= base_url('main')?>";
                    </script>
                    <?php
                }
                else{
                    echo 'gagal';
                }
        }
    }
    
?>