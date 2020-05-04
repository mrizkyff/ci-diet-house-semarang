<?php
    class M_Transaksi extends CI_Model
    {
        public function get_all_transaksi(){
            return $this->db->get('tb_transaksi')->result();
        }
    }
    
?>