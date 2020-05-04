<?php
    class M_Transaksi extends CI_Model
    {
        public function get_all_transaksi(){
            $this->db->select('*');
            $this->db->from('tb_transaksi');
            $this->db->join('tb_item','tb_transaksi.id_produk = tb_item.id_produk');
            $this->db->join('tb_user','tb_transaksi.id_user = tb_user.id_user');
            return $this->db->get()->result();
        }
    }
    
?>