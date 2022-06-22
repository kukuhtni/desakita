<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuansurat extends CI_Controller
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
		$d['content'] = "kk/pengajuansurat";
		$d['menu'] = "kk/menu";

		//session
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		$nokk = $session['hasil']->no_kk;

		$d['listsurat'] = $this->pengajuan->getAll();;
		$d['datapengajuan'] = $this->pengajuan->get_id_kk($nokk);

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Kepala Keluarga') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}

	public function form_pengajuan()
	{
		$d['judul'] = "Pengajuan Surat";
		$d['subjudul'] = "";
		$d['content'] = "kk/form_pengajuan";
		$d['menu'] = "kk/menu";

		//session
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		$nokk = $session['hasil']->no_kk;

		$d['listsurat'] = $this->pengajuan->getAll();;
		$d['datakeluarga'] = $this->keluarga->all_by_kk($nokk);

		if ($this->session->userdata('logged_in') and $role == 'Kepala Keluarga') {
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
			redirect('kk/pengajuansurat');
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('kk/pengajuansurat');
		}
	}
}
