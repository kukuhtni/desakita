<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewarganegaraan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_kewarganegaraan');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Kewarganegaraan';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/kewarganegaraan/view';


		$d['data'] = $this->model_kewarganegaraan->all();

		$this->load->view('template/home', $d);
	}
	public function simpan()
	{




		$id['id_kewarganegaraan'] = $this->input->post('id_kewarganegaraan');


		$dt['id_kewarganegaraan'] = $this->input->post('id_kewarganegaraan');
		$dt['deskripsi'] = $this->input->post('deskripsi');


		if ($this->model_kewarganegaraan->ada($id)) {
			$this->model_kewarganegaraan->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_kewarganegaraan->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_kewarganegaraan'] = $this->uri->segment(3);

		if ($this->model_kewarganegaraan->ada($id)) {
			$this->model_kewarganegaraan->delete($id);
		}
		redirect('pengelola/kewarganegaraan', 'refresh');
	}
	public function cari()
	{


		$id['id_kewarganegaraan'] = $this->uri->segment(3);

		if ($this->model_kewarganegaraan->ada($id)) {

			$dt = $this->model_kewarganegaraan->get($id);



			$d['id_kewarganegaraan'] = $dt->id_kewarganegaraan;
			$d['deskripsi'] = $dt->deskripsi;
		} else {

			$d['id_kewarganegaraan'] = "";
			$d['deskripsi'] = "";
		}
		echo json_encode($d);
	}
}
