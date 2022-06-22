<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spenduduk extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_spenduduk');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/spenduduk/view';



		$this->load->view('template/home', $d);
	}

}
