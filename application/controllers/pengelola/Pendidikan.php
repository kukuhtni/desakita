<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_pendidikan');
	}

	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Pendidikan';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/pendidikan/view';
		$d['data'] = $this->model_pendidikan->all();

		$this->load->view('template/home', $d);
	}
	public function simpan()
	{




		$id['id_pendidikan'] = $this->input->post('id_pendidikan');


		$dt['id_pendidikan'] = $this->input->post('id_pendidikan');
		$dt['deskripsi'] = $this->input->post('deskripsi');
		$dt['is_bsm'] = $this->input->post('is_bsm');


		if ($this->model_pendidikan->ada($id)) {
			$this->model_pendidikan->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_pendidikan->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_pendidikan'] = $this->uri->segment(3);

		if ($this->model_pendidikan->ada($id)) {
			$this->model_pendidikan->delete($id);
		}
		redirect('pendidikan', 'refresh');
	}
	public function cari()
	{


		$id['id_pendidikan'] = $this->uri->segment(3);

		if ($this->model_pendidikan->ada($id)) {

			$dt = $this->model_pendidikan->get($id);



			$d['id_pendidikan'] = $dt->id_pendidikan;
			$d['deskripsi'] = $dt->deskripsi;
			$d['is_bsm'] = $dt->is_bsm;
		} else {

			$d['id_pendidikan'] = "";
			$d['deskripsi'] = "";

			$d['is_bsm'] = "";
		}
		echo json_encode($d);
	}
}
