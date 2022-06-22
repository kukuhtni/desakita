<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tulispesan extends CI_Controller
{


	public function index()
	{
		$d['judul'] = "Pengajuan Surat";
		$d['content'] = "rtrw/Tulispesan";
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'RW' || $role == 'RT') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
}
