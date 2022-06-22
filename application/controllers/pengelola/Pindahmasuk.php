<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pindahmasuk extends CI_Controller
{


	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Peristiwa / Pindah Masuk';
		$d['home'] = 'template/sk_home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/peristiwa/pindahmasuk/view';


		$this->load->view('template/sk_home', $d);
	}
}
