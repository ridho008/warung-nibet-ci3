<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->cekLogin();
		$data['title'] = 'Halaman Login';
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('auth/login', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = html_escape($this->input->post('username', true));
		$password = html_escape($this->input->post('password', true));

		$user = $this->Auth_m->get_where('users', ['username' => $username])->row_array();
		if($user != null) {
			if(sha1($password) == $user['password']) {
				$data = [
					'user_id' => $user['user_id'],
					'username' => $user['username']
				];
				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert-danger">Password Salah!.</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert-danger">Akun Belum Terdaftar!.</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('user_id');
		$this->session->set_flashdata('pesan', '<div class="alert-success">Berhasil Logout</div>');
		redirect('auth');
	}

	public function cekLogin()
	{
		if($this->session->userdata('username')) {
			redirect('admin/dashboard');
		}
	}

}
