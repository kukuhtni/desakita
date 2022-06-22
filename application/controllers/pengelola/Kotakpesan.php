<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kotakpesan extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$d['judul'] = "Kotak Pesan";
		$d['subjudul'] = "";
		$d['home'] = 'pengelola/sk_home';
		$d['content'] = "pengelola/kotakpesan";
		$d['submenu'] = "Kotak Pesan";
		$d['menu'] = "pengelola/menu";
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Pengelola Data') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function pengaduan()
	{
		$d['judul'] = "Kotak Pesan";
		$d['subjudul'] = "";
		$d['home'] = 'pengelola/sk_home';
		$d['content'] = "pengelola/pengaduan";
		$d['submenu'] = "Kotak Pesan";
		$d['menu'] = "pengelola/menu";
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Pengelola Data') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
}
