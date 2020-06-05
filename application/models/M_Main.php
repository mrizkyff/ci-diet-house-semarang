<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class M_Main extends CI_Model
	{
		// ini buat panggil semua menu
		public function get_menu(){
			$query = $this->db->get('tb_item');
			return $query->result_array();
		}
		// ini buat panggil kategori tertentu
		public function get_category($category){
			$this->db->where('kategori',$category);
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

		// rest api
		public function getMenu($id = null){
			if($id===null){
				return $this->db->get('tb_item')->result_array();
			}
			else{
				return $this->db->get_where('tb_item',['id_produk' => $id])->result_array();
			}
		}
		public function deleteMenu($id){
			$this->db->delete('tb_item',['id_produk' => $id]);
			return $this->db->affected_rows();
		}
		public function index_post(){
			
		}
		
	}
 ?>