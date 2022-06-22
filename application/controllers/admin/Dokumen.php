<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
	}
	public function index()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Dokumen Publik";
		$d['content'] = "admin/dokumen";
		$d['submenu'] = "Peraturan Desa";
		$d['menu'] = "admin/menu";
		$d['dataPengguna'] = $this->model_data->ambilPengguna();
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function perpusat()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Dokumen Publik";
		$d['content'] = "admin/dokumen";
		$d['submenu'] = "Peraturan Pusat";
		$d['menu'] = "admin/menu";
		$d['dataPengguna'] = $this->model_data->ambilPengguna();
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
}
