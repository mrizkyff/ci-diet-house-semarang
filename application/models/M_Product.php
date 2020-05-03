<?php
    class M_Product extends CI_Model
    {
        public function getProduk(){
            return $this->db->get('tb_item')->result();
        }
        public function save_product($data){
            $result = $this->db->insert('tb_item',$data);
            return $result;
        }
    }
    
?>