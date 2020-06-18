<?php 
    class M_Pembayaran extends CI_Model
    {
        public function submit_pembayaran($data){
            return $this->db->insert('tb_pembayaran',$data);
        }
    }
    
?>