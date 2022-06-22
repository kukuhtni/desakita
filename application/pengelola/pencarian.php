<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencarian extends CI_Controller
{


	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Pencarian';
		$d['home'] = 'template/sk_home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pencarian/view';


		$this->load->view('template/sk_home', $d);
	}
}
