<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Goldar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_goldar');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Pekerjaan PED';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/goldar/view';


		$d['data'] = $this->model_goldar->all();

		$this->load->view('template/home', $d);
	}
	public function simpan()
	{




		$id['id_goldar'] = $this->input->post('id_goldar');


		$dt['id_goldar'] = $this->input->post('id_goldar');
		$dt['deskripsi'] = $this->input->post('deskripsi');


		if ($this->model_goldar->ada($id)) {
			$this->model_goldar->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_goldar->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_goldar'] = $this->uri->segment(3);

		if ($this->model_goldar->ada($id)) {
			$this->model_goldar->delete($id);
		}
		redirect('goldar', 'refresh');
	}
	public function cari()
	{


		$id['id_goldar'] = $this->uri->segment(3);

		if ($this->model_goldar->ada($id)) {

			$dt = $this->model_goldar->get($id);



			$d['id_goldar'] = $dt->id_goldar;
			$d['deskripsi'] = $dt->deskripsi;
		} else {

			$d['id_goldar'] = "";
			$d['deskripsi'] = "";
		}
		echo json_encode($d);
	}
}
