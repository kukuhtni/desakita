<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$d['class'] = 'home';
		$d['judul'] = 'Dashboard';
		$d['home'] = 'pengelola/sk_home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/sk_dashboard';


		$this->load->view('template/home', $d);
	}
}
