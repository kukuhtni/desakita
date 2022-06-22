<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArsipData extends CI_Controller
{


	public function index()
	{
		$d['judul'] = "Arsip Data";
		$d['subjudul'] = "";
		$d['content'] = "kk/arsipdata";
		$d['menu'] = "kk/menu";
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Kepala Keluarga') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
}
