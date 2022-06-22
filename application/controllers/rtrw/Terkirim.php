<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terkirim extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
	}

	public function index()
	{
		$d['judul'] = "Terkirim";
		$d['subjudul'] = "";
		$d['content'] = "rtrw/terkirim";
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'RW' || $role == 'RT') {
			$nik = $session['hasil']->nik;
			$d['dataPesan'] = $this->model_data->ambilPesan($nik);
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function ambildata()
	{
		$nik = 0;
		$session['hasil'] = $this->session->userdata('logged_in');
		$d = $this->model_data->ambilPesanByID($nik);
		var_dump($d);
	}
}
