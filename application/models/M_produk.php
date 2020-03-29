<?php
    class M_produk extends CI_Model
    {
        public function getProduk(){
            return $this->db->get('item')->result();
        }
        public function simpanProduk($data){
            return $this->db->insert('item',$data);
        }
    }
    
?>