<?php 
    class M_Logsys extends CI_Model{
        public function save_log($data){
            return $this->db->insert('tb_logsys',$data);
        }
        public function get_all_log(){
            $this->db->select('id_log, logsys.id_transaksi, editor.username act_do, buyer.username as buyerr, produk.nmbrg, transaction.jmlJual, logsys.action, logsys.tgl_action');
            $this->db->from('tb_logsys as logsys');
            $this->db->join('tb_transaksi as transaction', 'logsys.id_transaksi = transaction.id_transaksi');
            $this->db->join('tb_user as buyer', 'transaction.id_user = buyer.id_user');
            $this->db->join('tb_user as editor', 'logsys.edit_by = editor.id_user');
            $this->db->join('tb_item produk', 'transaction.id_produk = produk.id_produk');
            return $this->db->get()->result();
        }
    }
?>