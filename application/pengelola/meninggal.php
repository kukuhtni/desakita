<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meninggal extends CI_Controller
{


	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Meninggal';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/peristiwa/meninggal/view';


		$this->load->view('template/home', $d);
	}
}
