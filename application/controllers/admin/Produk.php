<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->model('Produk_m');
		$this->load->library('form_validation');
		cekSession();
	}

	public function index()
	{
		$data['title'] = 'Produk';
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['produk'] = $this->Produk_m->get_join('produk', 'kategori')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('admin/produk/index', $data);
		$this->load->view('layout/footer');
	}

	public function tambah()
	{
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'Tambah Data Produk';
		$data['kategori'] = $this->Produk_m->get('kategori')->result_array();
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('produk', 'Produk', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar', $data);
			$this->load->view('admin/produk/tambah_produk', $data);
			$this->load->view('layout/footer');
		} else {
			$this->tambahDataProduk();
		}
	}

	public function tambahDataProduk()
	{
		$fotoProduk = $_FILES['foto']['name'];

		if($fotoProduk) {
			$config['upload_path']          = './assets/img/produk/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/artikel/index', $error);
            }
            else
            {
                $this->upload->data('file_name');
            }
		}

		$slug = str_replace(' ', '-', $this->input->post('produk', true));

		$data = [
			'kategori_id' => html_escape($this->input->post('kategori', true)),
			'nama_produk' => html_escape(ucwords($this->input->post('produk', true))),
			'slug' => html_escape(strtolower($slug)),
			'harga' => html_escape($this->input->post('harga', true)),
			'deskripsi' => $this->input->post('deskripsi', true),
			'foto_produk' => $fotoProduk,
			'status' => 1
		];

		$this->Produk_m->insert('produk', $data);
		$this->session->set_flashdata('pesan', '<div class="alert-success">Data Produk Berhasil Ditambahkan.</div>');
		redirect('admin/produk');
	}

	public function ubah($id)
	{
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'Ubah Data Produk';
		$where = ['produk_id' => $id];
		$data['produk'] = $this->Produk_m->get_where('produk', $where)->row_array();
		$data['countProduk'] = $this->Produk_m->get_where('produk', $where)->num_rows();

		if(empty($data['countProduk'])) {
			$this->session->set_flashdata('pesan', '<div class="alert-danger">Data Produk Tidak Tersedia.</div>');
			redirect('admin/produk');
		}

		$data['kategori'] = $this->Produk_m->get('kategori')->result_array();

		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		$this->form_validation->set_rules('produk', 'Produk', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar', $data);
			$this->load->view('admin/produk/ubah_produk', $data);
			$this->load->view('layout/footer');
		} else {
			$this->ubahDataProduk($id);
		}
	}

	public function ubahDataProduk($id)
	{
		$fotoProduk = $_FILES['foto']['name'];

		if($fotoProduk) {
			$config['upload_path']          = './assets/img/produk/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/artikel/index', $error);
            }
            else
            {
                $fotoProdukLama = $this->input->post('fotoLamaProduk');
            	$result = $this->Produk_m->get_where('produk', ['produk_id' => $id])->row_array();
            	$fotoProdukDB = $result['foto_produk'];
            	if($fotoProdukLama == $fotoProdukDB) {
            		unlink(FCPATH . 'assets/img/produk/' . $fotoProdukDB);
            	}
                $fotoBaruArtikel = $this->upload->data('file_name');
                $this->db->set('foto_produk', $fotoBaruArtikel);
            }
		}

		$where = ['produk_id' => $id];
		// $slug = str_replace(' ', '-', $this->input->post('produk', true));
		$data = [
			'kategori_id' => html_escape($this->input->post('kategori', true)),
			'nama_produk' => html_escape(ucwords($this->input->post('produk', true))),
			'harga' => html_escape($this->input->post('harga', true)),
			'deskripsi' => $this->input->post('deskripsi', true)
		];

		$this->Produk_m->update('produk', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert-success">Data Produk Berhasil Diubah.</div>');
		redirect('admin/produk');
	}

	public function hapus($id)
	{
		$result = $this->Produk_m->get_where('produk', ['produk_id' => $id])->row_array();
		$row = $result['foto_produk'];
		unlink('assets/img/produk/' . $row);
		$this->db->delete('produk', ['produk_id' => $id]);
		$this->session->set_flashdata('pesan', '<div class="alert-success">Data Produk Berhasil Dihapus.</div>');
		redirect('admin/produk');
	}

}