<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kotakpesan extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
	}
	public function index()
	{
		$d['judul'] = "Kotak Pesan";
		$d['subjudul'] = "";
		$d['content'] = "admin/kotakpesan";
		$d['submenu'] = "Kotak Pesan";
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
	
	public function rtrw()
	{
		$d['judul'] = "Kotak Pesan";
		$d['subjudul'] = "";
		$d['content'] = "admin/kotakpesan";
		$d['submenu'] = "Layanan Pengaduan Eror";
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
