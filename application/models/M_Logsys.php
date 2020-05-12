<?php 
    class M_Logsys extends CI_Model{
        public function save_log($data){
            return $this->db->insert('tb_logsys',$data);
        }
    }
?>