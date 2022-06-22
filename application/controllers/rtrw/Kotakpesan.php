<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KotakPesan extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
	}

	public function index()
	{
		$d['judul'] = "Kotak Pesan";
		$d['subjudul'] = "";
		$d['submenu'] = "Kotak Masuk";
		$d['content'] = "rtrw/kotakpesan";
		$d['menu'] = "rtrw/menu";
		$d['pesan'] = "rtrw/kotakmasuk";
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'RW') {
			$nik = $session['hasil']->nik;
			$d['dataPesan'] = $this->model_data->ambilPesan($nik);
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}

	public function kotakterkirim()
	{
		$d['judul'] = "Kotak Pesan";
		$d['subjudul'] = "";
		$d['submenu'] = "Terkirim";
		$d['content'] = "rtrw/kotakpesan";
		$d['menu'] = "rtrw/menu";
		$d['pesan'] = "rtrw/kotakterkirim";
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

	public function kotaktulis()
	{
		$d['judul'] = "Kotak Pesan";
		$d['subjudul'] = "";
		$d['submenu'] = "";
		$d['content'] = "rtrw/kotakpesan";
		$d['menu'] = "rtrw/menu";
		$d['pesan'] = "rtrw/kotaktulis";
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
}
