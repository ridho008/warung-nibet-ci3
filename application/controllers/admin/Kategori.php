<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->model('Kategori_m');
		$this->load->library('form_validation');
		cekSession();
	}

	public function index()
	{
		$data['title'] = 'Kategori';
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['kategori'] = $this->Kategori_m->get('kategori')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('admin/kategori/index', $data);
		$this->load->view('layout/footer');
	}

	public function tambah()
	{
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'Tambah Data Kategori';
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar', $data);
			$this->load->view('admin/kategori/tambah_kategori', $data);
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama_kate' => html_escape(ucwords($this->input->post('kategori', true))),
				'slug_kate' => html_escape(str_replace(' ', '-', strtolower($this->input->post('kategori', true))))
			];

			$this->Kategori_m->insert('kategori', $data);
			$this->session->set_flashdata('pesan', '<div class="alert-success">Data Kategori Berhasil Ditambahkan.</div>');
			redirect('admin/kategori');
		}
	}

	public function ubah($id)
	{
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'Tambah Data Kategori';
		$where = ['kategori_id' => $id];
		$data['kategori'] = $this->Kategori_m->get_where('kategori', $where)->row_array();
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar', $data);
			$this->load->view('admin/kategori/ubah_kategori', $data);
			$this->load->view('layout/footer');
		} else {
			$where = ['kategori_id' => $id];
			$data = [
				'nama_kate' => html_escape(ucwords($this->input->post('kategori', true))),
				'slug_kate' => html_escape(str_replace(' ', '-', strtolower($this->input->post('kategori', true))))
			];

			$this->Kategori_m->update('kategori', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert-success">Data Kategori Berhasil Diubah.</div>');
			redirect('admin/kategori');
		}
	}

	public function hapus($id)
	{
		$this->db->delete('kategori', ['kategori_id' => $id]);
		$this->session->set_flashdata('pesan', '<div class="alert-success">Data Kategori Berhasil Dihapus.</div>');
		redirect('admin/kategori');
	}

}