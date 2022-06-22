<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_pekerjaan');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Pekerjaan';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/pekerjaan/view';


		$d['data'] = $this->model_pekerjaan->all();

		$this->load->view('template/home', $d);
	}
	public function simpan()
	{




		$id['id_pekerjaan'] = $this->input->post('id_pekerjaan');


		$dt['id_pekerjaan'] = $this->input->post('id_pekerjaan');
		$dt['deskripsi'] = $this->input->post('deskripsi');
		$dt['deskripsi_singkat'] = $this->input->post('deskripsi_singkat');


		if ($this->model_pekerjaan->ada($id)) {
			$this->model_pekerjaan->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_pekerjaan->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_pekerjaan'] = $this->uri->segment(3);

		if ($this->model_pekerjaan->ada($id)) {
			$this->model_pekerjaan->delete($id);
		}
		redirect('pekerjaan', 'refresh');
	}
	public function cari()
	{


		$id['id_pekerjaan'] = $this->uri->segment(3);

		if ($this->model_pekerjaan->ada($id)) {

			$dt = $this->model_pekerjaan->get($id);



			$d['id_pekerjaan'] = $dt->id_pekerjaan;
			$d['deskripsi'] = $dt->deskripsi;
			$d['deskripsi_singkat'] = $dt->deskripsi_singkat;
		} else {

			$d['id_pekerjaan'] = "";
			$d['deskripsi'] = "";

			$d['deskripsi_singkat'] = "";
		}
		echo json_encode($d);
	}
}
