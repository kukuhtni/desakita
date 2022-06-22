<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profildesa extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_profil', 'data');
	}
	public function index()
	{
		$d['namadesa'] = $this->data->namadesa();
		$d['judul'] = "Pengelolaan Data Desa";
		$d['subjudul'] = "Profil Desa";
		$d['content'] = "admin/profildesa";
		$d['submenu'] = "Setting Data";
		$d['menu'] = "admin/menu";

		//ambil data dari database
		$d['profildesa'] = $this->data->alldesa();
		$d['listprovinsi'] = $this->data->allprovinsi();
		$d['deskripsi'] = $this->data->alldeskripsi();
		$d['logo'] = $this->data->logodesa();


		//cek session login
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}

	function updatedesa()
	{
		$cek = $this->input->post('gantiprovinsi');
		if ($cek  == null) {
			$provinsi = $this->input->post('provinsi');
		} else {
			$provinsi = $this->input->post('gantiprovinsi');
		}
		$id = $this->input->post('id');
		$data = [
			'nama_desa' => $this->input->post('namadesa'),
			'kode_desa' => $this->input->post('kodedesa'),
			'kode_pos' => $this->input->post('kodeposdesa'),
			'nama_kepala_desa' => $this->input->post('kepaladesa'),
			'nip_kepala_desa' => $this->input->post('nipkades'),
			'alamat_kantor' => $this->input->post('alamatdesa'),
			'email_desa' => $this->input->post('emaildesa'),
			'telepon' => $this->input->post('telpondesa'),
			'website' => $this->input->post('webdesa'),
			'nama_kecamatan' => $this->input->post('kecamatan'),
			'kode_kecamatan' => $this->input->post('kodekecamatan'),
			'nama_kepala_camat' => $this->input->post('namacamat'),
			'nip_kepala_camat' => $this->input->post('nipcamat'),
			'nama_kabupaten' => $this->input->post('kabupaten'),
			'kode_kabupaten' => $this->input->post('kodekabupaten'),
			'nama_propinsi' => $provinsi,
			'kode_propinsi' => $this->input->post('kodeprovinsi'),
			'logo' => $this->input->post('logo')
		];
		if ($hasil = $this->data->updatedatadesa($id, $data) > 0) {
			$this->session->set_flashdata('pesan', 'berhasil');
			redirect('admin/profildesa');
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/profildesa');
		}
	}
	function updatedeskrip()
	{
		$id = $this->input->post('id');
		$data = [
			'sejarah' => $this->input->post('sejarah'),
			'visi' => $this->input->post('visi'),
			'misi' => $this->input->post('misi')
		];

		if ($hasil = $this->data->updatedatadeskrip($id, $data) > 0) {
			$this->session->set_flashdata('pesan', 'berhasil');
			redirect('admin/profildesa');
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/profildesa');
		}
	}
}
