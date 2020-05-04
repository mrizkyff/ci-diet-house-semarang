<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class M_Menu extends CI_Model
	{
		public function get_menu(){
			$query = $this->db->get('tb_item');
			return $query->result_array();
		}
		
		
	}
 ?>