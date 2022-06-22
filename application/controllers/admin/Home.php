<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_profil', 'data');
		$d['namadesa'] = $this->data->namadesa();
	}
	public function index()
	{
		$d['judul'] = "Dashboard";
		$d['subjudul'] = "";
		$d['content'] = "admin/dashboard";
		$d['menu'] = "admin/menu";
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
}
