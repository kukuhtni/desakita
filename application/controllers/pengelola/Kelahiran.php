<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Kelahiran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_kelahiran');
	}

	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Kelahiran';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/peristiwa/kelahiran/view';

		$d['data'] = $this->model_kelahiran->all();

		$this->load->view('template/home', $d);
	}

	public function simpan()
	{




		$id['id_kelahiran'] = $this->input->post('id_kelahiran');


		$dt['id_kelahiran'] = $this->input->post('id_kelahiran');
		$dt['tgl_kelahiran'] = $this->input->post('tgl_kelahiran');
		$dt['nama_bayi'] = $this->input->post('nama_bayi');
		$dt['id_jen_kel'] = $this->input->post('id_jen_kel');
		$dt['berat_bayi'] = $this->input->post('berat_bayi');
		$dt['panjang_bayi'] = $this->input->post('panjang_bayi');
		$dt['nama_ayah'] = $this->input->post('nama_ayah');
		$dt['nama_ibu'] = $this->input->post('nama_ibu');
		$dt['is_kembar'] = $this->input->post('is_kembar');
		$dt['lokasi_lahir'] = $this->input->post('lokasi_lahir');
		$dt['tempat_lahir'] = $this->input->post('tempat_lahir');
		$dt['penolong'] = $this->input->post('penolong');
		$dt['id_keluarga'] = $this->input->post('id_keluarga');
		$dt['nama_pelapor'] = $this->input->post('nama_pelapor');
		$dt['id_pelapor'] = $this->input->post('id_pelapor');
		$dt['id_penduduk'] = $this->input->post('id_penduduk');
		$dt['id_surat'] = $this->input->post('id_surat');


		if ($this->model_kelahiran->ada($id)) {
			$this->model_kelahiran->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_kelahiran->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_kelahiran'] = $this->uri->segment(3);

		if ($this->model_kelahiran->ada($id)) {
			$this->model_kelahiran->delete($id);
		}
		redirect('pengelola/bansos', 'refresh');
	}
	public function cari()
	{


		$id['id_kelahiran'] = $this->uri->segment(3);

		if ($this->model_kelahiran->ada($id)) {

			$dt = $this->model_kelahiran->get($id);



			$d['id_kelahiran'] = $dt->id_kelahiran;
			$d['tgl_kelahiran'] = $dt->tgl_kelahiran;
			$d['nama_bayi'] = $dt->nama_bayi;
			$d['nama'] = $dt->nama;
			$d['berat_bayi'] = $dt->berat_bayi;
			$d['panjang_bayi'] = $dt->panjang_bayi;
			$d['nama_ayah'] = $dt->nama_ayah;
			$d['nama_ibu'] = $dt->nama_ibu;
		} else {

			$d['id_kelahiran'] = "";
			$d['tgl_kelahiran'] = "";

			$d['nama_bayi'] = "";
			$d['nama'] = "";

			$d['berat_bayi'] = "";
			$d['panjang_bayi'] = "";
			$d['nama_ayah'] = "";
			$d['nama_ibu'] = "";
		}
		echo json_encode($d);
	}
}
