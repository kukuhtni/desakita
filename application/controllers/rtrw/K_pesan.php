<?php
defined('BASEPATH') or exit('No direct script access allowed');

class K_pesan extends CI_Controller
{


	public function index()
	{
		$d['judul'] = "Kotak pesan";
		$d['content'] = "rtrw/k_pesan";
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
