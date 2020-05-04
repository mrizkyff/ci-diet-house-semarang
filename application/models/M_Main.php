<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class M_Main extends CI_Model
	{
		public function get_menu(){
			$query = $this->db->get('tb_item');
			return $query->result_array();
		}
		public function get_menu_by_code($id){
			$this->db->where('id_produk',$id);
			$query = $this->db->get('tb_item');
			return $query->result_array();
		}
		public function buy($data){
			return $this->db->insert('tb_transaksi',$data);
		}
		public function update_stok($id,$data){
			$this->db->where('id_produk',$id);
			$stock = array(
				'stok' => $data
			);
			return $this->db->update('tb_item',$stock);
		}
		
		
	}
 ?>