<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Menu_model extends CI_Model
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }
		public function loadMenu(){
			$query = $this->db->get('item');
			return $query->result_array();
		}
		public function addItem(){
			$img = $this->upload->data();
			$gambar = $img['file_name'];
			$data = [
				"kdbrg" => $this->input->post('kdbrg'),
				"nmbrg" => $this->input->post('nmbrg'),
				"stok" => $this->input->post('stok'),
				"harga" => $this->input->post('harga'),
				"deskripsi" => $this->input->post('deskripsi'),
				"gambar" => $gambar
			];
			$this->db->insert('item',$data);
		}
		public function editItem(){
			$stok = $this->input->post('stok');
			$harga = $this->input->post('harga');
			$deskripsi = $this->input->post('deskripsi');
			$kode = $this->input->post('kodes');

			$query = $this->db->query("UPDATE item SET stok='$stok', harga='$harga', deskripsi='$deskripsi' WHERE kdbrg='$kode'");
			return $query;
		}
		public function deleteItem(){
			$kode = $this->input->get('kode');
			$query = $this->db->query("DELETE from item where kdbrg='$kode'");
			return $query;
		}
		public function loadLaporanPenjualan(){
			$query = $this->db->get('nota');
			return $query->result_array();
		}
		public function hitungBelanja(){
			$jumlahBeli = $this->input->post('jmlBeli');
			$hargaBarang = $this->input->post('hargaBarang');
			$namaBarang = $this->input->post('namaBarang');
			$total = ($jumlahBeli * $hargaBarang);
			return $total;
		}



		public function updateStok(){
			$jmlBeli = $this->input->post('jml');
			$namaBarang = $this->input->post('nmbrg');

			$nonota = $this->input->post('nonota');
			$hargaBarang = $this->input->post('hrgbrg');
			$total = $this->input->post('total');
			$tanggal = $this->input->post('tanggal');

			$queryStok = $this->db->query("SELECT * FROM item WHERE nmbrg='$namaBarang'");
			$hasilStok = $queryStok->row();
			$stokItem = $hasilStok->stok;
			
			$stokSekarang = ($stokItem - $jmlBeli);
			// var_dump($stokSekarang);

			$queryUpdate = $this->db->query("UPDATE item SET stok='$stokSekarang' WHERE nmbrg='$namaBarang'");

			$data = [
				$nonota,
				$namaBarang,
				$jmlBeli,
				$hargaBarang,
				$total,
				$tanggal
			];

			$queryNota = $this->db->query("INSERT into nota VALUES('$nonota', '$namaBarang', '$jmlBeli', '$hargaBarang', '$total', '$tanggal')");
			
		}

	}
 ?>