<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_artikel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('web_artikel_model', 'data');
	}

	public function index()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Artikel";
		$d['content'] = "admin/web_artikel";
		$d['submenu'] = "Headline";
		$d['menu'] = "admin/menu";


		$d['artikel'] = $this->data->headline();
		$d['headline'] = $this->data->list_headline();

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function berita_kriminal()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Artikel";
		$d['content'] = "admin/web_artikel";
		$d['submenu'] = "Berita Kriminal";
		$d['menu'] = "admin/menu";

		$id_kategori = 2;
		$d['artikel'] = $this->data->tampilartikel_id($id_kategori);

		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function berita_lokal()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Artikel";
		$d['content'] = "admin/web_artikel";
		$d['submenu'] = "Berita Lokal";
		$d['menu'] = "admin/menu";
		$id_kategori = 3;
		$d['artikel'] = $this->data->tampilartikel_id($id_kategori);
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function berita_desa()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Artikel";
		$d['content'] = "admin/web_artikel";
		$d['submenu'] = "Berita Desa";
		$d['menu'] = "admin/menu";
		$id_kategori = 1;
		$d['artikel'] = $this->data->tampilartikel_id($id_kategori);
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function kegiatan_desa()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Artikel";
		$d['content'] = "admin/web_artikel";
		$d['submenu'] = "Kegiatan Desa";
		$d['menu'] = "admin/menu";
		$id_kategori = 5;
		$d['artikel'] = $this->data->tampilartikel_id($id_kategori);
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function produk_desa()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Artikel";
		$d['content'] = "admin/web_artikel";
		$d['submenu'] = "Produk Desa";
		$d['menu'] = "admin/menu";
		$id_kategori = 6;
		$d['artikel'] = $this->data->tampilartikel_id($id_kategori);
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function peraturan_desa()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Artikel";
		$d['content'] = "admin/web_artikel";
		$d['submenu'] = "Peraturan Desa";
		$d['menu'] = "admin/menu";
		$id_kategori = 7;
		$d['artikel'] = $this->data->tampilartikel_id($id_kategori);
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function laporan_desa()
	{
		$d['judul'] = "Pengelolaan Data Web";
		$d['subjudul'] = "Artikel";
		$d['content'] = "admin/web_artikel";
		$d['submenu'] = "Laporan Desa";
		$d['menu'] = "admin/menu";
		$id_kategori = 8;
		$d['artikel'] = $this->data->tampilartikel_id($id_kategori);
		$session['hasil'] = $this->session->userdata('logged_in');
		$role = $session['hasil']->role;
		if ($this->session->userdata('logged_in') and $role == 'Administrator') {
			$this->load->view('template/home', $d);
		} else {
			redirect('login');
		}
	}
	public function setingheadline()
	{
		$id = $this->input->post('artikel');
		$data = [
			'headline' => $this->input->post('status')
		];
		if ($hasil = $this->data->settingheadline($data, $id) > 0) {
			$this->session->set_flashdata('pesan', 'berhasil');
			redirect('admin/web_artikel');
		} else {
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/web_artikel');
		}
	}
}
