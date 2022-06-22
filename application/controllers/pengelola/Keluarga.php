<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluarga extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_keluarga');
		$this->load->model('model_penduduk', 'penduduk');
		$this->load->model('model_profil', 'profil');
	}
	public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Data Keluarga';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/kependudukan/keluarga/view';

		$d['listpenduduk'] = $this->penduduk->listpenduduk();

		$d['data'] = $this->model_keluarga->all();
		$this->load->view('template/home', $d);
	}
	public function tambah_anggota($id = '', $data = '')
	{
		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Data Keluarga';
		$d['subjudul2'] = 'Tambah Anggota';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/kependudukan/keluarga/tambah_anggota';

		// Reset kalau dipanggil dari luar pertama kali ($_POST kosong)
		// if (empty($_POST) and !$_SESSION['dari_internal'])
		// 	unset($_SESSION['validation_error']);
		// else unset($_SESSION['dari_internal']);

		// $data['id_kk'] = $id;
		// $data['kk'] = $this->model_keluarga->get_kepala_a($id);
		// $data['form_action'] = site_url("keluarga/insert_a");
		// $nav['act'] = 2;
		// $nav['act_sub'] = 22;

		$data['agama'] = $this->model_penduduk->list_agama();
		$data['pendidikan_kk'] = $this->model_penduduk->list_pendidikan_kk();
		$data['pendidikan_sedang'] = $this->model_penduduk->list_pendidikan_sedang();
		$data['pekerjaan'] = $this->model_penduduk->list_pekerjaan();
		$data['warganegara'] = $this->model_penduduk->list_warganegara();
		$data['hubungan'] = $this->model_penduduk->list_hubungan($data['kk']['status_kawin']);
		$data['kawin'] = $this->model_penduduk->list_status_kawin();
		$data['golongan_darah'] = $this->model_penduduk->list_golongan_darah();
		$data['cacat'] = $this->model_penduduk->list_cacat();
		// $data['sakit_menahun'] = $this->referensi_model->list_data('tb_sakit_menahun');
		// $data['cara_kb'] = $this->penduduk_model->list_cara_kb($data['penduduk']['id_sex']);
		// $data['wajib_ktp'] = $this->referensi_model->list_wajib_ktp();
		// $data['ktp_el'] = $this->referensi_model->list_ktp_el();
		// $data['status_rekam'] = $this->referensi_model->list_status_rekam();
		// $data['tempat_dilahirkan'] = $this->referensi_model->list_kode_array(TEMPAT_DILAHIRKAN);
		// $data['jenis_kelahiran'] = $this->referensi_model->list_kode_array(JENIS_KELAHIRAN);
		// $data['penolong_kelahiran'] = $this->referensi_model->list_kode_array(PENOLONG_KELAHIRAN);

		// // Validasi dilakukan di keluarga_model sewaktu insert dan update
		// if ($_SESSION['validation_error']) {
		// 	$data['id_kk'] = $_SESSION['id_kk'];
		// 	$data['kk'] = $_SESSION['kk'];
		// 	$data['penduduk'] = $_SESSION['post'];
		// }


		$d['data'] = $this->model_keluarga->all();
		$this->load->view('template/home', $d);
	}
	public function form_keluarga($id = false, $nik = false)
	{
		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Data Keluarga';
		$d['subjudul2'] = 'Form Keluarga';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'pengelola/kependudukan/keluarga/form';

		$d['datakeluarga'] = $this->model_keluarga->kk_by_id($id);
		$d['kepala_kk'] = $this->model_keluarga->kepala_kk_id($nik);

		//ambil data desa
		$d['datadesa'] = $this->profil->alldesa();


		// $d['data'] = $this->model_keluarga->all();
		$this->load->view('template/home', $d);
	}
	public function cetak_kk($id = false, $nik = false)
	{
		// $d['class'] = 'home';
		// $d['judul'] = 'Kependudukan';
		// $d['subjudul'] = 'Data Keluarga';
		// $d['subjudul2'] = 'Form Keluarga';
		// $d['home'] = 'template/home';
		// $d['menu'] = "pengelola/menu";
		// $d['content'] = 'pengelola/kependudukan/keluarga/form';

		// $d['datakeluarga'] = $this->model_keluarga->kk_by_id($id);
		// $d['kepala_kk'] = $this->model_keluarga->kepala_kk_id($nik);
		// //ambil data desa
		// $d['datadesa'] = $this->profil->alldesa();


		// $d['data'] = $this->model_keluarga->all();
		// $this->load->view('template/home', $d);
		$data['keluarga']   = $this->model_keluarga->cetak_by_id($id);
		$data['kepala_kk'] = $this->model_keluarga->kepala_kk_id($nik);
		$data['datadesa'] = $this->profil->alldesa();
		// $kepala_kk          = $this->model_keluarga->kepala_kk_id($nik);
		$data['title'] = "SALINAN KARTU KELUARGA";
		// var_dump($data['keluarga']);
		$this->load->view('pengelola/kependudukan/keluarga/cetak_kk', $data, FALSE);
	}
	public function dftanggota_keluarga($p = 1, $o = 0, $id = 0)
	{
		$data['p'] = $p;
		$data['o'] = $o;
		$data['kk'] = $id;

		$data['main'] = $this->model_keluarga->list_anggota($id);
		$data['kepala_kk'] = $this->model_keluarga->get_kepala_kk($id);

		$nav['act'] = 2;
		$nav['act_sub'] = 22;
		$header = $this->header_model->get_data();
		$header['minsidebar'] = 1;

		// $this->load->view('header', $header);
		// $this->load->view('nav', $nav);
		// $this->load->view('pengelola/kependudukan/keluarga/dftanggota_keluarga', $data);
		// $this->load->view('footer');

		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Data Keluarga';
		$d['subjudul2'] = 'Form Keluarga';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";


		$d['data'] = $this->model_keluarga->all();
		$this->load->view('template/home', $d);
	}
	function ambildatakeluarga()
	{
		$d = $this->model_keluarga->all();
		var_dump($d);
	}
	function ambiljumlah()
	{
		var_dump($d['data'] = $this->model_keluarga->jumlah_anggota());
	}
	public function simpan()
	{




		$id['id'] = $this->input->post('id');


		$dt['id'] = $this->input->post('id');
		$dt['no_kk'] = $this->input->post('no_kk');
		$dt['nik_kepala'] = $this->input->post('nik_kepala');
		$dt['jml_anggota'] = $this->input->post('jml_anggota');
		$dt['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$dt['alamat'] = $this->input->post('alamat');
		$dt['dusun'] = $this->input->post('dusun');
		$dt['rw'] = $this->input->post('rw');
		$dt['rt'] = $this->input->post('rt');
		$dt['tgl_terdaftar'] = $this->input->post('tgl_terdaftar');



		if ($this->model_keluarga->ada($id)) {
			$this->model_keluarga->update($id, $dt);
			echo "Data sukses disimpan";
		} else {
			$this->model_keluarga->insert($id, $dt);
			echo "Data sukses disimpan";
		}
	}

	public function hapus()
	{

		$id['id'] = $this->uri->segment(3);

		if ($this->model_keluarga->ada($id)) {
			$this->model_keluarga->delete($id);
		}
		redirect('pengelola/keluarga', 'refresh');
	}
	public function cari()
	{


		$id['id'] = $this->uri->segment(3);

		if ($this->model_keluarga->ada($id)) {

			$dt = $this->model_keluarga->get($id);



			$d['id'] = $dt->id;
			$d['kepala_keluarga'] = $dt->kepala_keluarga;
			$d['nik'] = $dt->nik;
			$d['jml_anggota'] = $dt->jml_anggota;
			$d['jenis_kelamin'] = $dt->jenis_kelamin;
			$d['alamat'] = $dt->alamat;
			$d['dusun'] = $dt->dusun;
			$d['rw'] = $dt->rw;
			$d['rt'] = $dt->rt;
			$d['tgl_terdaftar'] = $dt->tgl_terdaftar;
		} else {

			$d['id'] = "";
			$d['kepala_keluarga'] = "";

			$d['nik'] = "";
			$d['jml_anggota'] = "";

			$d['jenis_kelamin'] = "";
			$d['alamat'] = "";
			$d['dusun'] = "";

			$d['rw'] = "";
			$d['rt'] = "";
			$d['tgl_terdaftar'] = "";
		}
		echo json_encode($d);
	}
}
