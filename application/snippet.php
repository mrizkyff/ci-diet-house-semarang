<?php 
    class Snippet extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('modelku','modelmu');
        }
        
    }
    class Modelku extends CI_Model{
        public function yaitu(){
            function hapus(){
                $this->hapus->delete();
            }
        }
        public function do_upload(){
            $tanggal = date('Y-m-d H:i:s');
            $variabel = $this->input->tget('');
            //variabel get
            $config['upload_path']          = './direktori';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['encrypt_name']        = TRUE;
        
            $this->load->library('upload', config);
            if($this->upload->do_upload('namaform')){
                $upload_data = $this->upload->data();
                $nama_gambar = $upload_data['file_name'];
                //variabel array data buat dimasukin ke db
                
                //panggil model buat insert
                
            }
            else{
                
            }
        }
    }   
?>
<script type="text/javascript">
    $.ajax({
        type: "method",
        url: "url",
        data: "data",
        dataType: "dataType",
        success: function (response) {
            
        }
    });
</script>

