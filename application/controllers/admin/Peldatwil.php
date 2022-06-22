<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peldatwil extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->model('peldatwil_model', 'wilayah');
		$this->load->model('model_penduduk', 'penduduk');
	}
	public function index()
	{
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Pengelolaan Data Wilayah";
		$d['content'] = "admin/wilayah/peldatwil";
		$d['submenu'] = "Kelola Wilayah Dusun";
		$d['menu'] = "admin/menu";
		$d['back'] = "";
		$d['next'] = "peldatwil/form_dusun";
		$d['kelola'] = "Dusun";
		$d['ada'] = "Dusun";

		$d['rw'] = null;
		$d['datawilayah'] = $this->wilayah->datawilayah();
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function kelola_rw($id_dusun = '')
	{
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Pengelolaan Data Wilayah";
		$d['content'] = "admin/wilayah/peldatwil_rw";
		$d['submenu'] = "Kelola Wilayah RW";
		$d['menu'] = "admin/menu";
		$d['back'] = "peldatwil";
		$d['next'] = "peldatwil/form_rw";
		$d['kelola'] = "RW";

		$dusun = $this->wilayah->datawilayah_id($id_dusun);
		$nama_dusun = $dusun['dusun'];
		$d['dusun'] = $dusun['dusun'];
		$d['id_dusun'] = $id_dusun;
		$d['datawilayah'] = $this->wilayah->datawilayah_rw($id_dusun);

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function kelola_rt($id_dusun = '', $rw = '')
	{
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Pengelolaan Data Wilayah";
		$d['content'] = "admin/wilayah/peldatwil_rt";
		$d['submenu'] = "Kelola Wilayah RT";
		$d['menu'] = "admin/menu";
		$d['back'] = "peldatwil/kelola_rw";
		$d['next'] = "peldatwil/form_rt";
		$d['kelola'] = "RT";

		$temp = $this->wilayah->datawilayah_id($id_dusun);
		$dusun = $temp['dusun'];
		$d['dusun'] = $temp['dusun'];
		$d['id_dusun'] = $id_dusun;

		$d['rw'] = $rw;
		$d['datawilayah'] = $this->wilayah->datawilayah_rt($dusun, $rw);

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function form_dusun($id = '')
	{
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Pengelolaan Data Wilayah";
		$d['content'] = "admin/form/form_dusun";
		$d['submenu'] = "Kelola Dusun";
		$d['menu'] = "admin/menu";
		$d['back'] = "peldatwil";
		$d['next'] = "peldatwil/form_rw";

		//database
		$d['id_dusun'] = "";
		$d['listpenduduk'] = $this->wilayah->list_penduduk();
		if ($id) {
			$temp = $this->wilayah->datawilayah_id($id);
			$d['dusun'] = $temp['dusun'];
			$d['individu'] = $this->wilayah->get_penduduk($temp['id_kepala']);
			if (empty($d['individu']))
				$d['individu'] = NULL;
			else {
				$ex = $d['individu'];
				$d['penduduk'] = $this->wilayah_model->list_penduduk_ex($ex['id']);
			}
			$d['form_action'] = site_url("sid_core/update/$id");
		} else {
			$d['dusun'] = null;
			$d['form_action'] = site_url("sid_core/insert");
		}

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function form_rw($id_dusun = '', $rw = '')
	{
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Pengelolaan Data Wilayah";
		$d['content'] = "admin/form/form_dusun";
		$d['submenu'] = "Kelola RW";
		$d['menu'] = "admin/menu";
		$d['back'] = "peldatwil/kelola_rw";
		$d['next'] = "peldatwil/form_rt";

		//database
		$d['listpenduduk'] = $this->wilayah->list_penduduk();
		$temp = $this->wilayah->datawilayah_id($id_dusun);
		$dusun = $temp['dusun'];
		$d['dusun'] = $temp['dusun'];
		$d['id_dusun'] = $id_dusun;

		if ($rw) {
			$d['rw'] = $rw;
			$temp = $this->wilayah->get_rw($dusun, $rw);
			$d['individu'] = $this->wilayah->get_penduduk($temp['id_kepala']);
			if (empty($d['individu']))
				$d['individu'] = NULL;
			else {
				$ex = $d['individu'];
				$d['penduduk'] = $this->wilayah->list_penduduk_ex($ex['id']);
			}
			$d['form_action'] = "peldatwil/ubah_rw/$id_dusun/$rw";
		} else {
			$d['rw'] = NULL;
			$d['form_action'] = "peldatwil/tambah_rw/$id_dusun";
		}

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function form_rt($id_dusun = '', $rw = '', $rt = '')
	{
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Pengelolaan Data Wilayah";
		$d['content'] = "admin/form/form_dusun";
		$d['submenu'] = "Kelola RT";
		$d['menu'] = "admin/menu";
		$d['back'] = "peldatwil/kelola_rt";

		//database
		$d['listpenduduk'] = $this->wilayah->list_penduduk();
		$temp = $this->wilayah->datawilayah_id($id_dusun);

		$d['dusun'] = $temp['dusun'];
		$d['id_dusun'] = $id_dusun;

		$d['rw'] = $rw;
		$d['penduduk'] = $this->wilayah->list_penduduk();

		if ($rt) {
			$temp2 = $this->wilayah->datawilayah_id($rt);
			$id_cluster = $temp2['id'];
			$d['rt'] = $temp2['rt'];
			$d['individu'] = $this->wilayah->get_penduduk($temp2['id_kepala']);
			if (empty($d['individu']))
				$d['individu'] = NULL;
			else {
				$ex = $d['individu'];
				$d['penduduk'] = $this->wilayah->list_penduduk_ex($ex['id']);
			}
			$d['form_action'] = "peldatwil/ubah_rt/$id_dusun/$rw/$id_cluster";
		} else {
			$d['rt'] = NULL;
			$d['form_action'] = "peldatwil/tambah_rt/$id_dusun/$rw";
		}

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}

	public function tambah_dusun()
	{
		$data = [
			'dusun' => $this->input->post('namadusun'),
			'id_kepala' => $this->input->post('nik')
		];

		if ($hasil = $this->wilayah->tambah_dusun($data) > 0) {
			//berhasil, rubah, delete, gagal flash pesan
			$this->session->set_flashdata('pesan', 'berhasil');
			redirect('admin/peldatwil');
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/peldatwil');
		}
	}
	public function tambah_rw($dusun = '')
	{
		$data = [
			'rw' => $this->input->post('norw'),
			'id_kepala' => $this->input->post('nik')
		];

		if ($hasil = $this->wilayah->tambah_rw($dusun, $data) > 0) {
			//berhasil, rubah, delete, gagal flash pesan
			$this->session->set_flashdata('pesan', 'berhasil');
			redirect('admin/peldatwil/kelola_rw/' . $dusun);
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/peldatwil/kelola_rw/' . $dusun);
		}
	}
	public function tambah_rt($dusun = '', $rw = '')
	{
		$data = [
			'rt' => $this->input->post('nort'),
			'id_kepala' => $this->input->post('nik')
		];

		if ($hasil = $this->wilayah->tambah_rt($dusun, $rw, $data) > 0) {
			//berhasil, rubah, delete, gagal flash pesan
			$this->session->set_flashdata('pesan', 'berhasil');
			redirect('admin/peldatwil/kelola_rt/' . $dusun . '/' . $rw);
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/peldatwil/kelola_rt/' . $dusun . '/' . $rw);
		}
	}
}
