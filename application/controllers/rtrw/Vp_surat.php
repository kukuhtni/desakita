<?php
defined('BASEPATH') or exit('No direct script access allowed');

class vp_surat extends CI_Controller
{


	public function index()
	{
		$d['judul'] = "Verifikasi Pengajuan Surat";
		$d['subjudul'] = "";
		$d['content'] = "rtrw/vp_surat";
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
