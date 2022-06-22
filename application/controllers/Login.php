<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('model_login');
		// $this->load->view('Login');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$role['role'] = $this->session->userdata('logged_in');
			if ($role['role']->role == "Administrator") {
				redirect('admin/home');
			} else
			if ($role['role']->role == 'Perangkat Desa') {
				redirect('pengelola/home');
			} else
			if ($role['role']->role == 'Kepala Keluarga') {
				redirect('kk/home');
			} else
			if ($role['role']->role == 'RW') {
				redirect('rtrw/home');
			} else
			if ($role['role']->role == 'RT') {
				redirect('rtrw/home');
			}
		} else {
			$data['cek'] = '1';
			$this->load->view('Login', $data);
		}
	}

	function getLogin()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$password = sha1($password);
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($hasil = $this->model_login->cekAdmin($username, $password) > 0) {
			$data['hasil'] = $hasil;
			if ($data['hasil'] == null) {
				$data['cek'] = '0';
				$this->load->view('Login', $data);
			} else {
				redirect('Login');
			}
		} elseif ($hasil = $this->model_login->cekLogin($username, $password) > 0) {
			$data['hasil'] = $hasil;
			if ($data['hasil'] == null) {
				$data['cek'] = '0';
				$this->load->view('Login', $data);
			} else {
				redirect('Login');
			}
		} elseif ($hasil = $this->model_login->cekLoginAparatur($username, $password) > 0) {
			$data['hasil'] = $hasil;
			if ($data['hasil'] == null) {
				$data['cek'] = '0';
				$this->load->view('Login', $data);
			} else {
				redirect('Login');
			}
		} else
			$this->load->view('Login', true);
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');

		session_destroy();
		redirect('login', 'refresh');
	}
}
