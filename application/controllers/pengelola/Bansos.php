<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Bansos extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_penduduk_miskin');
	}

	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Penerima Bantuan Sosial';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/perspektif/bansos/view';

		$d['data'] = $this->model_penduduk_miskin->all();

		$this->load->view('template/home', $d);
	}

	public function simpan()
	{




		$id['id_pen'] = $this->input->post('id_pen');


		$dt['id_pen'] = $this->input->post('id_pen');
		$dt['no_kk'] = $this->input->post('no_kk');
		$dt['n_kpl_keluarga'] = $this->input->post('n_kpl_keluarga');
		$dt['nama'] = $this->input->post('nama');
		$dt['raskin'] = $this->input->post('raskin');
		$dt['jamkesmas'] = $this->input->post('jamkesmas');
		$dt['pkh'] = $this->input->post('pkh');
		$dt['s_ekonomi'] = $this->input->post('s_ekonomi');


		if ($this->model_penduduk_miskin->ada($id)) {
			$this->model_penduduk_miskin->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_penduduk_miskin->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id_pen'] = $this->uri->segment(3);

		if ($this->model_penduduk_miskin->ada($id)) {
			$this->model_penduduk_miskin->delete($id);
		}
		redirect('pengelola/bansos', 'refresh');
	}
	public function cari()
	{


		$id['id_pen'] = $this->uri->segment(3);

		if ($this->model_penduduk_miskin->ada($id)) {

			$dt = $this->model_penduduk_miskin->get($id);



			$d['id_pen'] = $dt->id_pen;
			$d['no_kk'] = $dt->no_kk;
			$d['n_kpl_keluarga'] = $dt->n_kpl_keluarga;
			$d['nama'] = $dt->nama;
			$d['raskin'] = $dt->raskin;
			$d['jamkesmas'] = $dt->jamkesmas;
			$d['pkh'] = $dt->pkh;
			$d['s_ekonomi'] = $dt->s_ekonomi;
		} else {

			$d['id_pen'] = "";
			$d['no_kk'] = "";

			$d['n_kpl_keluarga'] = "";
			$d['nama'] = "";

			$d['raskin'] = "";
			$d['jamkesmas'] = "";
			$d['pkh'] = "";
			$d['s_ekonomi'] = "";
		}
		echo json_encode($d);
	}
}
