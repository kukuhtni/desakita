<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

	function  __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_penduduk', 'penduduk');
		$this->load->model('model_keluarga', 'keluarga');
		$this->load->model('model_struktur', 'struktur');
	}
	public function index()
	{
		$d['judul'] = "Pengguna";
		$d['subjudul'] = "";
		$d['content'] = "admin/pengguna";
		$d['submenu'] = "Perangkat Desa";
		$d['menu'] = "admin/menu";
		$d['dataPengguna'] = $this->model_data->ambilPengguna();

		$d['aparatur'] = $this->struktur->list_data_aparatur();
		$d['role'] = "1";

		$id_kategori = "Perangkat Desa";
		$d['perangkat'] = $this->model_data->tampilperangkat_id($id_kategori);

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function rw()
	{
		$d['judul'] = "Pengguna";
		$d['subjudul'] = "";
		$d['content'] = "admin/pengguna";
		$d['submenu'] = "RW";
		$d['menu'] = "admin/menu";
		$d['dataPengguna'] = $this->model_data->ambilPengguna();


		$d['role'] = "2";
		$d['listkeluarga'] = $this->keluarga->listrw();

		$id_kategori = "RW";
		$d['perangkat'] = $this->model_data->tampilperangkat_id($id_kategori);

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function rt()
	{
		$d['judul'] = "Pengguna";
		$d['subjudul'] = "";
		$d['content'] = "admin/pengguna";
		$d['submenu'] = "RT";
		$d['menu'] = "admin/menu";
		$d['dataPengguna'] = $this->model_data->ambilPengguna();


		$d['role'] = "3";
		$d['listkeluarga'] = $this->keluarga->listrt();

		$id_kategori = "RT";
		$d['perangkat'] = $this->model_data->tampilperangkat_id($id_kategori);

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function kepala_keluarga()
	{
		$d['judul'] = "Pengguna";
		$d['subjudul'] = "";
		$d['content'] = "admin/pengguna";
		$d['submenu'] = "Kepala Keluarga";
		$d['menu'] = "admin/menu";
		$d['dataPengguna'] = $this->model_data->ambilPengguna();
		$d['role'] = "4";
		$d['listkeluarga'] = $this->keluarga->listkeluarga();

		$id_kategori = "Kepala Keluarga";
		$d['perangkat'] = $this->model_data->tampilkeluarga_id($id_kategori);

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}

	public function tambahdata()
	{
		$p = $this->input->post('password');
		$p2 = $this->input->post('password2');

		if ($p == $p2) {
			$password = sha1($p);
			$data = [
				'id_kk' => $this->input->post('kk'),
				'password' => $password,
				'id_kategori' => $this->input->post('role')
			];
			if ($hasil = $this->model_data->tambahpengguna($data) > 0) {
				$this->session->set_flashdata('pesan', 'berhasil');
				redirect('admin/pengguna');
			} else {
				$this->session->set_flashdata('pesan', 'gagal');
				redirect('admin/pengguna');
			}
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/pengguna');
		}
	}
	public function editdata()
	{
		$p = $this->input->post('password');
		$p2 = $this->input->post('password2');

		if ($p == $p2) {
			$password = sha1($p);
			$id = $this->input->post('kk');
			$data = [
				'password' => $password,
				'id_kategori' => $this->input->post('role')
			];
			if ($hasil = $this->model_data->editpengguna($data, $id) > 0) {
				$this->session->set_flashdata('pesan', 'berhasil');
				redirect('admin/pengguna');
			} else {
				$this->session->set_flashdata('pesan', 'gagal');
				redirect('admin/pengguna');
			}
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/pengguna');
		}
	}
}
