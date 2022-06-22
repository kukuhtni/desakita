<?php
defined('BASEPATH') or exit('No direct script access allowed');

class D_arsip extends CI_Controller
{


	public function index()
	{
		$d['judul'] = "Dokumen Arsip";
		$d['content'] = "rtrw/d_arsip";
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
