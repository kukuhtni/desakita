<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_penduduk', 'penduduk');
		$this->load->model('model_struktur', 'struktur');
	}
	public function index()
	{
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Struktur Pemerintahan Desa";
		$d['content'] = "admin/struktur";
		$d['submenu'] = "Setting Aparat Pemerintahan Desa";
		$d['menu'] = "admin/menu";



		//database
		$d['aparatur'] = $this->struktur->get_data_all();



		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function form_struktur()
	{
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Struktur Pemerintahan Desa";
		$d['content'] = "admin/form/form_struktur";
		$d['submenu'] = "Setting Aparat Pemerintahan Desa";
		$d['submenu2'] = "Tambah Aparat Desa";
		$d['menu'] = "admin/menu";

		//database
		$d['listpenduduk'] = $this->penduduk->listpenduduk();

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	function getPenduduk()
	{
		$id = [
			'nik' => $this->input->get('nik')
		];
		$d['getpenduduk'] = $this->penduduk->getPenduduk_id($id, true);

		echo json_encode($d);
	}
}
