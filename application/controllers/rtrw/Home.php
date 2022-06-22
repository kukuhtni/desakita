<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$d['judul'] = "Dashboard";
		$d['subjudul'] = "";
		$d['content'] = "rtrw/dashboard";
		$d['menu'] = "rtrw/menu";
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'RW' || $role == 'RT') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
}
