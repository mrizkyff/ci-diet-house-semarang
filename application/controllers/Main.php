<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Main extends CI_Controller
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }
		public function index(){
			$this->load->model('menu_model');
			$data['menu'] = $this->menu_model->loadMenu();
			$this->load->view('template/header.php');
			$this->load->view('home/index.php',$data);
			$this->load->view('template/footer.php');
		

		}		
		public function daftar_barang(){
			$this->load->model('menu_model');
			$data['item'] = $this->menu_model->loadMenu();
			$this->load->view('template/header.php');
			$this->load->view('page/daftar_barang.php',$data);
			$this->load->view('template/footer.php');
		}
		public function tambahItem(){
			$this->load->model('menu_model');
			$this->menu_model->addItem();
			redirect('main/daftar_barang');
		}
		public function do_upload(){
			$config['upload_path'] = './asset/img/food';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 1000;
			$config['max_width'] = 10240;
			$config['max_height'] = 7680;

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				// $this->session->set_flashdata('gagal','Registrasi Gagal');
				// redirect('home/index');
			}
			else{
				$this->tambahItem();
				// $this->session->set_flashdata('sukses','Registrasi Berhasil!');
				// redirect('home/index');

			}
		}
		public function editItem(){
			$this->load->model('menu_model');
			$this->menu_model->editItem();
			redirect('main/daftar_barang');
		}

		public function deleteItem(){
			$this->load->model('menu_model');
			$this->menu_model->deleteItem();
			redirect('main/daftar_barang');
		}

		public function laporanPenjualan(){
			$this->load->model('menu_model');
			$data['penjualan'] = $this->menu_model->loadLaporanPenjualan();
			$this->load->view('template/header.php');
			$this->load->view('page/laporanPenjualan.php',$data);
			$this->load->view('template/footer.php');
		}


		public function checkOut(){
			$this->load->model('menu_model');
			$total = $this->menu_model->hitungBelanja();
			$data = [
				'namaBarang' => $this->input->post('namaBarang'),
				'hargaBarang' => $this->input->post('hargaBarang'),
				'jumlahBeli' => $this->input->post('jmlBeli'),
				'total' => $total
			];
			$this->load->view('template/header.php');
			$this->load->view('page/checkOut.php',$data);
			$this->load->view('template/footer.php');	
		}

		public function updateStok(){
			$this->load->model('menu_model');
			$this->menu_model->updateStok();
			// $this->menu_model->buatNota();
			$this->laporanPenjualan();

		}
	}
 ?>