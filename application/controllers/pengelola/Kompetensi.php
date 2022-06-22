<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kompetensi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_kompetensi');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Kompetensi';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/kompetensi/view';


		

		$this->load->view('template/home', $d);
	}

}
