 <?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Main extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Main','Main');
		}
		public function index(){
			$category = $this->input->get('category');
			if(isset($category)){
				$data['menu'] = $this->Main->get_category($category);
			}
			else{
					$data['menu'] = $this->Main->get_menu();	
			}
			$this->load->view('public/template/header');
			$this->load->view('public/home/index',$data);
			$this->load->view('public/template/footer');
			$this->load->view('public/script/Homepage');
		}		
		public function beli(){
			$tanggal = date('Y-m-d H:i:s');
			$id_user = $this->session->userdata('idUser');
			$id = $this->input->post('id');
			$jmlBeli = $this->input->post('jmlBeli');
			
			$data = array(
				'id_produk' => $id,
				'id_user' => $id_user,
				'stat' => '1',
				'jmlJual' => $jmlBeli,
				'tgl_transaksi' => $tanggal
			);


			if($this->Main->buy($data)){
				// update stok
				// $stok = $this->Main->get_menu_by_code($id)->;
				$stok = ($this->Main->get_menu_by_code($id)[0]['stok']);
				$stok = $stok - $jmlBeli;
				var_dump($stok);
				$this->Main->update_stok($id,$stok);
				redirect(base_url('main'));
			}
			else{
				echo 'transaksi gagal';
			}
			// proses pembelian
		}

		public function profile(){
			$this->load->view('public/template/header');
			$this->load->view('public/page/pageProfile');
			$this->load->view('public/template/footer');
			$this->load->view('public/script/Profile');
		}
		public function myCart(){
			$this->load->view('public/template/header');
			$this->load->view('public/page/pageCart');
			$this->load->view('public/template/footer');
			$this->load->view('public/script/MyCart');
		}
	}
 ?>