<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('layout/footer');
	}

	public function profil($username)
	{
		$data['users'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'Profil ' . $data['users']['nama_user'];
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('telp', 'Telepon', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar', $data);
			$this->load->view('admin/profil/index', $data);
			$this->load->view('layout/footer');
		} else {
			$where = ['user_id' => $this->session->userdata('user_id')];
			$data = [
				'nama_user' => html_escape(ucwords($this->input->post('nama', true))),
				'password' => html_escape(sha1($this->input->post('password', true))),
				'telp' => html_escape($this->input->post('telp', true)),
				'email' => html_escape($this->input->post('email', true)),
				'alamat' => html_escape($this->input->post('alamat', true))
			];

			$this->Auth_m->update('users', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert-success">Profil Berhasil Diperbarui.</div>');
			redirect('profil/' . $username);
		}
	}

}