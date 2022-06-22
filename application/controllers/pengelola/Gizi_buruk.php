<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gizi_buruk extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_gizi_buruk');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'gizi_buruk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/kesehatan/gizi_buruk/view';
		$d['data'] = $this->model_gizi_buruk->all();


		$this->load->view('template/home', $d);
	}

	public function simpan()
	{




		$id['id_gizi_buruk'] = $this->input->post('id_gizi_buruk');


		$dt['id_gizi_buruk'] = $this->input->post('id_gizi_buruk');
		$dt['deskripsi'] = $this->input->post('deskripsi');
		$dt['is_diakui'] = $this->input->post('is_diakui');


		if ($this->model_gizi_buruk->ada($id)) {
			$this->model_gizi_buruk->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_gizi_buruk->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_gizi_buruk'] = $this->uri->segment(3);

		if ($this->model_gizi_buruk->ada($id)) {
			$this->model_gizi_buruk->delete($id);
		}
		redirect('pengelola/gizi_buruk', 'refresh');
	}
	public function cari()
	{


		$id['id_gizi_buruk'] = $this->uri->segment(3);

		if ($this->model_gizi_buruk->ada($id)) {

			$dt = $this->model_gizi_buruk->get($id);



			$d['id_gizi_buruk'] = $dt->id_gizi_buruk;
			$d['deskripsi'] = $dt->deskripsi;
			$d['is_diakui'] = $dt->is_diakui;
		} else {

			$d['id_gizi_buruk'] = "";
			$d['deskripsi'] = "";

			$d['is_diakui'] = "";
		}
		echo json_encode($d);
	}
}
