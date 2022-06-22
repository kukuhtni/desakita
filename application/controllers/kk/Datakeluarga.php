<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataKeluarga extends CI_Controller
{
	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_keluarga', 'keluarga');
		$this->load->model('model_profil', 'profil');
	}

	public function index()
	{
		$d['judul'] = "Keluarga";
		$d['subjudul'] = "Data Keluarga";
		$d['content'] = "kk/datakeluarga";
		$d['menu'] = "kk/menu";




		//ambil data dari session login
		$session['hasil'] = $this->session->userdata('logged_in');
		$nokk = $session['hasil']->no_kk;
		$namakk = $session['hasil']->nama;

		//ambil data masing" keluarga
		$d['datakeluarga'] = $this->keluarga->all_by_kk($nokk);
		$d['no_kk'] = $nokk;
		$d['nama_kk'] = $namakk;

		//ambil data desa
		$d['datadesa'] = $this->profil->alldesa();



		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Kepala Keluarga') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
}
