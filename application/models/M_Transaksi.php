<?php
    class M_Transaksi extends CI_Model
    {
        public function get_all_transaksi($id = null){
            $this->db->select('*');
            $this->db->from('tb_transaksi');
            $this->db->join('tb_item','tb_transaksi.id_produk = tb_item.id_produk');
            $this->db->join('tb_user','tb_transaksi.id_user = tb_user.id_user');
            // 13 adalah transaksi yang terdecline
            $this->db->where('stat !=','13');
            if($id === null){
                return $this->db->get()->result();
            }
            else{
                $this->db->where('tb_transaksi.id_user',$id);
            }
            return $this->db->get()->result();
        }
        public function get_all_pembayaran(){
            $this->db->select('*');
            $this->db->from('tb_pembayaran');
            $this->db->join('tb_user','tb_pembayaran.id_user = tb_user.id_user');
            return $this->db->get()->result();
        }
        public function delete($id){
            $this->db->where('id_transaksi',$id);
            return $this->db->delete('tb_transaksi');
        }
        public function paid($id,$data){
            $this->db->where('id_transaksi',$id);
            return $this->db->update('tb_transaksi',$data);
        }
        public function sent($id,$data){
            $this->db->where('id_transaksi',$id);
            return $this->db->update('tb_transaksi',$data);
        }
        public function declined($id,$data){
            $this->db->where('id_transaksi',$id);
            return $this->db->update('tb_transaksi',$data);
        }
        public function do_bayar($id){
            $this->db->where('id_checkout',$id);
            $data = array(
                'acc_status' => 1,
            );
            return $this->db->update('tb_pembayaran',$data);
        }
    }
    
?>