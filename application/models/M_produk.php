<?php
    class M_produk extends CI_Model
    {
        public function getProduk(){
            return $this->db->get('tb_item')->result();
        }
        public function simpanProduk($data){
            return $this->db->insert('tb_item',$data);
        }
    }
    
?>