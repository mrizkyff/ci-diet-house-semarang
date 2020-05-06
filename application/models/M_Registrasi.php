<?php
    class M_Registrasi extends CI_Model
    {
        public function save_user($data){
            return $this->db->insert('tb_user',$data);
        }
    }
    
?>