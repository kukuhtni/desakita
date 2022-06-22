<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agama extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_agama');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Agama';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/agama/view';
		$d['data'] = $this->model_agama->all();


		$this->load->view('template/home', $d);
	}

	public function simpan()
	{




		$id['id_agama'] = $this->input->post('id_agama');


		$dt['id_agama'] = $this->input->post('id_agama');
		$dt['deskripsi'] = $this->input->post('deskripsi');
		$dt['is_diakui'] = $this->input->post('is_diakui');


		if ($this->model_agama->ada($id)) {
			$this->model_agama->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_agama->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_agama'] = $this->uri->segment(3);

		if ($this->model_agama->ada($id)) {
			$this->model_agama->delete($id);
		}
		redirect('pengelola/agama', 'refresh');
	}
	public function cari()
	{


		$id['id_agama'] = $this->uri->segment(3);

		if ($this->model_agama->ada($id)) {

			$dt = $this->model_agama->get($id);



			$d['id_agama'] = $dt->id_agama;
			$d['deskripsi'] = $dt->deskripsi;
			$d['is_diakui'] = $dt->is_diakui;
		} else {

			$d['id_agama'] = "";
			$d['deskripsi'] = "";

			$d['is_diakui'] = "";
		}
		echo json_encode($d);
	}
}
