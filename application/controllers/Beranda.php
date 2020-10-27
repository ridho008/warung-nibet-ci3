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
		$this->db->where('status', 1);
		$data['produk'] = $this->Produk_m->get_join('produk', 'kategori')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('beranda/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function cari()
	{
		$keyword = $this->input->get('keyword');
		$data['title'] = 'Anda Mencari ' . $keyword;
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		if($this->input->get('cari')) {
			$data['produk'] = $this->Produk_m->getProdukKeyword($keyword)->result_array();
		}
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('beranda/index', $data);
		$this->load->view('layout/footer');
	}

	public function kategori($slug)
	{
		$data['title'] = 'Kategori ' . str_replace('-', ' ', ucwords($slug));
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['produk'] = $this->Produk_m->getKategoriWhere($slug)->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('beranda/kategori', $data);
		$this->load->view('layout/footer');
	}

	public function detail($slug)
	{
		$data['title'] = '' . str_replace('-', ' ', ucwords($slug));
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['produk'] = $this->Produk_m->getDetailProdukWhere($slug)->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('beranda/detail_produk', $data);
		$this->load->view('layout/footer');
	}

	

}
