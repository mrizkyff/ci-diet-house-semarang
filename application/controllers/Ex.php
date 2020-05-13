<?php 
    class Ex extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Main','Main');
            $this->load->model('M_Logsys','Logs');
        }
        public function index(){
            // $stok = $this->Main->get_menu_by_code('3')[0]["stok"];
            // $stok = $stok + 7;
            // if($this->Main->update_stok('3',$stok)){
            //     var_dump($stok);
            // };
            // var_dump($this->session->userdata());
            echo '<pre>' ,var_dump($this->Logs->get_all_log()) ,'</pre>';
        }
    }
?>