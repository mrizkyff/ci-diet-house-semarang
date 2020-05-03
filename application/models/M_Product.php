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
        public function delete_product($id){
            $this->db->where('id_produk',$id);
            $result = $this->db->delete('tb_item');
            return $result;
        }
        
    }
    
?>