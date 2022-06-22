<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skeluarga extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_skeluarga');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status keluarga';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/skeluarga/view';




		$this->load->view('template/home', $d);
	}
	
}
