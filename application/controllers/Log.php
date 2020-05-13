<?php 
    class Log extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Logsys','Logs');
        }
        public function getAllLog(){
            $data = $this->Logs->get_all_log();
            echo json_encode($data);
        }
    }
?>