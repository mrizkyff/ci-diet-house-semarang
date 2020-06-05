<?php
    class M_Product extends CI_Model
    {
        public function __construct(){
            parent::__construct();
        }
        public function get_all_product(){
            return $this->db->get('tb_item')->result();
        }
        public function get_by_id($id){
            $this->db->where('id_produk',$id);
            $result = $this->db->get('tb_item');
            return $result->result();
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
        public function update_product($data,$id){
            $this->db->where('id_produk',$id);
            $result = $this->db->update('tb_item',$data);
            return $result;
        }
        
    }
    
?>