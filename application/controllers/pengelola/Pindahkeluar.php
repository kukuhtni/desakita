<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pindahkeluar extends CI_Controller
{


	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Peristiwa / Pindah Keluar';
		$d['home'] = 'template/sk_home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/peristiwa/pindahkeluar/view';


		$this->load->view('template/sk_home', $d);
	}
}
