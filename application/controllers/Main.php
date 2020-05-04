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
			$this->load->model('M_Menu','Menu');
		}
		public function login(){
			echo 'halaman login';
		}
		public function index(){
			$data['menu'] = $this->Menu->get_menu();
			$this->load->view('public/template/header');
			$this->load->view('public/home/index',$data);
			$this->load->view('public/template/footer');
			$this->load->view('public/script/Homepage');
		}		
		public function beli(){
				$id = $this->input->post('id');
				$jmlBeli = $this->input->post('jmlBeli');
				echo $id;
				echo $jmlBeli;
		}
	}
 ?>