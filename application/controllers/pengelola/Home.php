<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_keluarga');
		$this->load->model('model_penduduk', 'penduduk');
		$this->load->model('model_profil', 'profil');
	}
	public function index()
	{
		$d['class'] = 'home';
		$d['judul'] = 'Dashboard';
		$d['home'] = 'pengelola/sk_home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/sk_dashboard';

		$d['totalkeluarga'] = $this->penduduk->countkeluarga();
		$d['totalpenduduk'] = $this->penduduk->countpenduduk();

		$this->load->view('template/home', $d);
	}
}
