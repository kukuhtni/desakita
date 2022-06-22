<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan_ped extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_pekerjaan_ped');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Pekerjaan PED';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/pus_kependudukan/pekerjaan_ped/view';


		$d['data'] = $this->model_pekerjaan_ped->all();

		$this->load->view('template/home', $d);
	}
	public function simpan()
	{




		$id['id_pekerjaan_ped'] = $this->input->post('id_pekerjaan_ped');


		$dt['id_pekerjaan_ped'] = $this->input->post('id_pekerjaan_ped');
		$dt['deskripsi'] = $this->input->post('deskripsi');


		if ($this->model_pekerjaan_ped->ada($id)) {
			$this->model_pekerjaan_ped->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_pekerjaan_ped->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_pekerjaan_ped'] = $this->uri->segment(3);

		if ($this->model_pekerjaan_ped->ada($id)) {
			$this->model_pekerjaan_ped->delete($id);
		}
		redirect('pekerjaan_ped', 'refresh');
	}
	public function cari()
	{


		$id['id_pekerjaan_ped'] = $this->uri->segment(3);

		if ($this->model_pekerjaan_ped->ada($id)) {

			$dt = $this->model_pekerjaan_ped->get($id);



			$d['id_pekerjaan_ped'] = $dt->id_pekerjaan_ped;
			$d['deskripsi'] = $dt->deskripsi;
		} else {

			$d['id_pekerjaan_ped'] = "";
			$d['deskripsi'] = "";
		}
		echo json_encode($d);
	}
}
