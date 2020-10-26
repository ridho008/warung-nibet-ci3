<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->model('Kategori_m');
		$this->load->model('Produk_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Beranda';
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['kategori'] = $this->Kategori_m->get('kategori')->result_array();
		$data['produk'] = $this->Produk_m->get_join('produk', 'kategori')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('beranda/index', $data);
		$this->load->view('layout/footer', $data);
	}

	

}
