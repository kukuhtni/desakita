<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluarga extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_keluarga');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Data Keluarga';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/kependudukan/keluarga/view';


		$d['data'] = $this->model_keluarga->all();
		$this->load->view('template/home', $d);
	}
	public function tambah_anggota(){
		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Data Keluarga';
		$d['subjudul2'] = 'Tambah Anggota';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/kependudukan/keluarga/tambah_anggota';


		$d['data'] = $this->model_keluarga->all();
		$this->load->view('template/home', $d);
	}
	public function form_keluarga()
	{
		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Data Keluarga';
		$d['subjudul2'] = 'Form Keluarga';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/kependudukan/keluarga/form';


		$d['data'] = $this->model_keluarga->all();
		$this->load->view('template/home', $d);
	}
	public function dftanggota_keluarga()
	{
		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Data Keluarga';
		$d['subjudul2'] = 'Form Keluarga';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/kependudukan/keluarga/dftanggota_keluarga';


		$d['data'] = $this->model_keluarga->all();
		$this->load->view('template/home', $d);
	}
	function ambildatakeluarga()
	{
		$d = $this->model_keluarga->all();
		var_dump($d);
	}
	function ambiljumlah()
	{
		var_dump ($d['data'] = $this->model_keluarga->jumlah_anggota());

	}
	public function simpan()
	{




		$id['id'] = $this->input->post('id');


		$dt['id'] = $this->input->post('id');
		$dt['no_kk'] = $this->input->post('no_kk');
		$dt['nik_kepala'] = $this->input->post('nik_kepala');
		$dt['jml_anggota'] = $this->input->post('jml_anggota');
		$dt['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$dt['alamat'] = $this->input->post('alamat');
		$dt['dusun'] = $this->input->post('dusun');
		$dt['rw'] = $this->input->post('rw');
		$dt['rt'] = $this->input->post('rt');
		$dt['tgl_terdaftar'] = $this->input->post('tgl_terdaftar');



		if ($this->model_keluarga->ada($id)) {
			$this->model_keluarga->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_keluarga->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id'] = $this->uri->segment(3);

		if ($this->model_keluarga->ada($id)) {
			$this->model_keluarga->delete($id);
		}
		redirect('pengelola/keluarga', 'refresh');
	}
	public function cari()
	{


		$id['id'] = $this->uri->segment(3);

		if ($this->model_keluarga->ada($id)) {

			$dt = $this->model_keluarga->get($id);



			$d['id'] = $dt->id;
			$d['kepala_keluarga'] = $dt->kepala_keluarga;
			$d['nik'] = $dt->nik;
			$d['jml_anggota'] = $dt->jml_anggota;
			$d['jenis_kelamin'] = $dt->jenis_kelamin;
			$d['alamat'] = $dt->alamat;
			$d['dusun'] = $dt->dusun;
			$d['rw'] = $dt->rw;
			$d['rt'] = $dt->rt;
			$d['tgl_terdaftar'] = $dt->tgl_terdaftar;
		} else {

			$d['id'] = "";
			$d['kepala_keluarga'] = "";

			$d['nik'] = "";
			$d['jml_anggota'] = "";

			$d['jenis_kelamin'] = "";
			$d['alamat'] = "";
			$d['dusun'] = "";

			$d['rw'] = "";
			$d['rt'] = "";
			$d['tgl_terdaftar'] = "";
		}
		echo json_encode($d);
	}
}
