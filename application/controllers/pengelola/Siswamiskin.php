<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswamiskin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_siswa_miskin');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Bantuan Siswa Miskin';
		$d['home'] = 'template/sk_home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/perspektif/siswamiskin/view';


		$d['data'] = $this->model_siswa_miskin->all();

		$this->load->view('template/home', $d);
	}
	public function simpan()
	{




		$id['id_siswa'] = $this->input->post('id_siswa');


		$dt['id_siswa'] = $this->input->post('id_siswa');
		$dt['no_kk'] = $this->input->post('no_kk');
		$dt['nik'] = $this->input->post('nik');
		$dt['nama'] = $this->input->post('nama');
		$dt['pendidikan'] = $this->input->post('pendidikan');
		$dt['bsm'] = $this->input->post('bsm');
		$dt['s_ekonomi'] = $this->input->post('s_ekonomi');


		if ($this->model_siswa_miskin->ada($id)) {
			$this->model_siswa_miskin->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_siswa_miskin->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_siswa'] = $this->uri->segment(3);

		if ($this->model_siswa_miskin->ada($id)) {
			$this->model_siswa_miskin->delete($id);
		}
		redirect('pengelola/siswamiskin', 'refresh');
	}
	public function cari()
	{


		$id['id_siswa'] = $this->uri->segment(3);

		if ($this->model_siswa_miskin->ada($id)) {

			$dt = $this->model_siswa_miskin->get($id);



			$d['id_siswa'] = $dt->id_siswa;
			$d['no_kk'] = $dt->no_kk;
			$d['nik'] = $dt->nik;
			$d['nama'] = $dt->nama;
			$d['pendidikan'] = $dt->pendidikan;
			$d['bsm'] = $dt->bsm;
			$d['s_ekonomi'] = $dt->s_ekonomi;
		} else {

			$d['id_siswa'] = "";
			$d['no_kk'] = "";

			$d['nik'] = "";
			$d['nama'] = "";

			$d['pendidikan'] = "";
			$d['bsm'] = "";
			$d['s_ekonomi'] = "";
		}
		echo json_encode($d);
	}
}
