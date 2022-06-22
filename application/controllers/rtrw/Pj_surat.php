<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pj_Surat extends CI_Controller
{
	function  __construct()
	{
		parent::__construct();
		$this->load->model('Model_pengajuan', 'pengajuan');
		$this->load->model('Model_keluarga', 'keluarga');
	}

	public function index()
	{
		$d['judul'] = "Pengajuan Surat";
		$d['subjudul'] = "";
		$d['content'] = "rtrw/pj_surat";
		$d['menu'] = "rtrw/menu";


		//session
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		$nokk = $session['hasil']->no_kk;
		$datakeluarga = $this->keluarga->all_by_kk($nokk);
		$rt = $datakeluarga[0]['rt'];
		$rw = $datakeluarga[0]['rw'];

		$d['rt'] = $rt;
		$d['rw'] = $rw;
		$d['role'] = $role;

		if ($role == "RT") {
			$d['datapengajuan'] = $this->pengajuan->get_id_rt($rt, $rw);
		} elseif ($role == "RW") {
			$d['datapengajuan'] = $this->pengajuan->get_id_rw($rw);
		}

		$d['listsuraxt'] = $this->pengajuan->getAll();
		if ($this->session->userdata('logged_in') and $role == 'RW' || $role == 'RT') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}

	public function form_pengajuan()
	{
		$d['judul'] = "Pengajuan Surat";
		$d['subjudul'] = "";
		$d['content'] = "rtrw/form_pengajuan";
		$d['menu'] = "rtrw/menu";

		//session
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		$nokk = $session['hasil']->no_kk;

		$d['listsurat'] = $this->pengajuan->getAll();;
		$d['datakeluarga'] = $this->keluarga->all_by_kk($nokk);


		if ($this->session->userdata('logged_in') and $role == 'RW' || $role == 'RT') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}

	public function tambahpengajuan()
	{
		$data = [
			'rt' => $this->input->post('rt'),
			'rt_status' => 0,
			'rw' => $this->input->post('rw'),
			'rw_status' => 0,
			'desa_status' => 0,
			'surat_id' => $this->input->post('layanansurat'),
			'penduduk_id' => $this->input->post('namakeluarga'),
			'keperluan' => $this->input->post('keperluan'),
			'keterangan' => $this->input->post('keterangan'),
			'status' => 1
		];

		if ($hasil = $this->pengajuan->tambahpengajuan($data) > 0) {
			$this->session->set_flashdata('pesan', 'berhasil');
			redirect('rtrw/pj_surat');
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('rtrw/pj_surat');
		}
	}
	public function update($role, $id)
	{

		if ($role == "RT") {
			$data = [
				'rt_status' => $this->input->post('konfirmasi'),
				'status' => 2
			];
		} elseif ($role == "RW") {
			$data = [
				'rw_status' => $this->input->post('konfirmasi'),
				'status' => 3
			];
		} else {
			$this->session->set_flashdata('pesan', 'eror');
			redirect('rtrw/pj_surat');
		}

		if ($hasil = $this->pengajuan->updatepengajuan($data, $id) > 0) {
			$this->session->set_flashdata('pesan', 'konfirmasi');
			redirect('rtrw/pj_surat');
		} else {
			$this->session->set_flashdata('pesan', 'eror');
			redirect('rtrw/pj_surat');
		}
	}
}
