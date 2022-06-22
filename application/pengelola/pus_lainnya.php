<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pus_lainnya extends CI_Controller
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
		$d['content'] = 'pengelola/pus_lainnya/difabilitas';



		$this->load->view('template/home', $d);
    }
	public function difabilitas()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_lainnya/difabilitas';



		$this->load->view('template/home', $d);
    }
    public function kodesurat()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_lainnya/kodesurat';



		$this->load->view('template/home', $d);
    }
    public function kontrasepsi()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_lainnya/kontrasepsi';



		$this->load->view('template/home', $d);
    }
    public function statustinggal()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_lainnya/statustinggal';



		$this->load->view('template/home', $d);
    }
    public function alasanpindah()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_lainnya/alasanpindah';



		$this->load->view('template/home', $d);
    }
    public function jabatan()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_lainnya/jabatan';



		$this->load->view('template/home', $d);
    }
    public function jenispindah()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_lainnya/jenispindah';



		$this->load->view('template/home', $d);
    }
    public function klasifikasipindah()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Status penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_lainnya/klasifikasipindah';



		$this->load->view('template/home', $d);
    }
}
