<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
        $this->load->model('model_jabatan');
    }
    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'Jabatan';
        $d['subjudul'] = 'Data jabatan';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_lain/jabatan/view';
        $d['data'] = $this->model_jabatan->all();


        $this->load->view('template/home', $d);
    }

    public function simpan()
    {




        $id['id'] = $this->input->post('id');

        $dt['nama'] = $this->input->post('nama');
        $dt['nik'] = $this->input->post('nik');
        $dt['id_kk'] = $this->input->post('id_kk');
        $dt['kk_level'] = $this->input->post('kk_level');
        $dt['id_rtm'] = $this->input->post('id_rtm');
        $dt['rtm_level'] = $this->input->post('rtm_level');
        $dt['sex'] = $this->input->post('sex');
        $dt['tempatlahir'] = $this->input->post('tempatlahir');
        $dt['tanggallahir'] = $this->input->post('agama_id');
        $dt['pendidikan_kk_id'] = $this->input->post('pendidikan_kk_id');
        $dt['pendidikan_sedang_id'] = $this->input->post('pendidikan_sedang_id');
        $dt['pekerjaan_id'] = $this->input->post('pekerjaan_id');
        $dt['status_kawin'] = $this->input->post('status_kawin');
        $dt['warganegara_id'] = $this->input->post('warganegara_id');
        $dt['dokumen_pasport'] = $this->input->post('dokumen_pasport');
        $dt['dokumen_kitas'] = $this->input->post('dokumen_kitas');
        $dt['ayah_nik'] = $this->input->post('ayah_nik');
        $dt['ibu_nik'] = $this->input->post('ibu_nik');
        $dt['nama_ayah'] = $this->input->post('nama_ayah');
        $dt['nama_ibu'] = $this->input->post('nama_ibu');
        $dt['foto'] = $this->input->post('foto');
        $dt['golongan_darah_id'] = $this->input->post('golongan_darah_id');
        $dt['id_cluster'] = $this->input->post('id_cluster');
        $dt['status'] = $this->input->post('status');
        $dt['alamat_sebelumnya'] = $this->input->post('alamat_sebelumnya');
        $dt['alamat_sekarang'] = $this->input->post('alamat_sekarang');
        $dt['status_dasar'] = $this->input->post('status_dasar');
        $dt['hamil'] = $this->input->post('hamil');
        $dt['cacat_id'] = $this->input->post('cacat_id');
        $dt['sakit_menahun_id'] = $this->input->post('sakit_menahun_id');
        $dt['kta_lahir'] = $this->input->post('kta_lahir');
        $dt['akta_perkawinan'] = $this->input->post('akta_perkawinan');
        $dt['tanggal_perkawinan'] = $this->input->post('itanggal_perkawinand');
        $dt['akta_perceraian'] = $this->input->post('akta_perceraian');
        $dt['tanggal_perceraian'] = $this->input->post('tanggal_perceraian');
        $dt['cara_kb_id'] = $this->input->post('cara_kb_id');
        $dt['telepon'] = $this->input->post('telepon');
        $dt['tgl_akhir_paspor'] = $this->input->post('tgl_akhir_paspor');
        $dt['no_kk_sebelumnya'] = $this->input->post('no_kk_sebelumnya');
        $dt['ktp_el'] = $this->input->post('ktp_el');
        $dt['status_rekam'] = $this->input->post('status_rekam');
        $dt['waktulahir'] = $this->input->post('waktulahir');
        $dt['tempat_dilahrikan'] = $this->input->post('natempat_dilahrikanma');
        $dt['jenis_kelahiran'] = $this->input->post('jenis_kelahiran');
        $dt['kelahiran_anak_ke'] = $this->input->post('kelahiran_anak_ke');
        $dt['penolong_kelahiran'] = $this->input->post('penolong_kelahiran');
        $dt['berat_lahir'] = $this->input->post('berat_lahir');
        $dt['panjang_lahir'] = $this->input->post('panjang_lahir');



        if ($this->model_jabatan->ada($id)) {
            $this->model_jabatan->update($id, $dt);
            echo "Data sukses disimpan";
        } else {
            $this->model_jabatan->insert($id, $dt);
            echo "Data sukses disimpan";
        }
    }

    public function hapus()
    {

        $id['id'] = $this->uri->segment(3);

        if ($this->model_jabatan->ada($id)) {
            $this->model_jabatan->delete($id);
        }
        redirect('pengelola/jabatan', 'refresh');
    }
    public function cari()
    {


        $id['id'] = $this->uri->segment(3);

        if ($this->model_jabatan->ada($id)) {

            $dt = $this->model_jabatan->get($id);


            $d['id'] = $dt->id;
            $d['nama'] = $dt->nama;
            $d['nik'] = $dt->nik;
            $d['id_kk'] = $dt->id_kk;
            $d['kk_level'] = $dt->kk_level;
            $d['id_rtm'] = $dt->id_rtm;
            $d['rtm_level'] = $dt->rtm_level;
            $d['sex'] = $dt->sex;
            $d['tempatlahir'] = $dt->tempatlahir;
            $d['tanggallahir'] = $dt->agama_id;
            $d['pendidikan_kk_id'] = $dt->pendidikan_kk_id;
            $d['pendidikan_sedang_id'] = $dt->pendidikan_sedang_id;
            $d['pekerjaan_id'] = $dt->pekerjaan_id;
            $d['status_kawin'] = $dt->status_kawin;
            $d['warganegara_id'] = $dt->warganegara_id;
            $d['dokumen_pasport'] = $dt->dokumen_pasport;
            $d['dokumen_kitas'] = $dt->dokumen_kitas;
            $d['ayah_nik'] = $dt->ayah_nik;
            $d['ibu_nik'] = $dt->ibu_nik;
            $d['nama_ayah'] = $dt->nama_ayah;
            $d['nama_ibu'] = $dt->nama_ibu;
            $d['foto'] = $dt->foto;
            $d['golongan_darah_id'] = $dt->golongan_darah_id;
            $d['id_cluster'] = $dt->id_cluster;
            $d['status'] = $dt->status;
            $d['alamat_sebelumnya'] = $dt->alamat_sebelumnya;
            $d['alamat_sekarang'] = $dt->alamat_sekarang;
            $d['status_dasar'] = $dt->status_dasar;
            $d['hamil'] = $dt->hamil;
            $d['cacat_id'] = $dt->cacat_id;
            $d['sakit_menahun_id'] = $dt->sakit_menahun_id;
            $d['kta_lahir'] = $dt->kta_lahir;
            $d['akta_perkawinan'] = $dt->akta_perkawinan;
            $d['tanggal_perkawinan'] = $dt->itanggal_perkawinand;
            $d['akta_perceraian'] = $dt->akta_perceraian;
            $d['tanggal_perceraian'] = $dt->tanggal_perceraian;
            $d['cara_kb_id'] = $dt->cara_kb_id;
            $d['telepon'] = $dt->telepon;
            $d['tgl_akhir_paspor'] = $dt->tgl_akhir_paspor;
            $d['no_kk_sebelumnya'] = $dt->no_kk_sebelumnya;
            $d['ktp_el'] = $dt->ktp_el;
            $d['status_rekam'] = $dt->status_rekam;
            $d['waktulahir'] = $dt->waktulahir;
            $d['tempat_dilahrikan'] = $dt->natempat_dilahrikanma;
            $d['jenis_kelahiran'] = $dt->jenis_kelahiran;
            $d['kelahiran_anak_ke'] = $dt->kelahiran_anak_ke;
            $d['penolong_kelahiran'] = $dt->penolong_kelahiran;
            $d['berat_lahir'] = $dt->berat_lahir;
            $d['panjang_lahir'] = $dt->panjang_lahir;
        } else {

            $d['id'] = "";
            $d['nama'] = "";
            $d['nik'] = "";
            $d['id_kk'] = "";
            $d['kk_level'] = "";
            $d['id_rtm'] = "";
            $d['rtm_level'] = "";
            $d['sex'] = "";
            $d['tempatlahir'] = "";
            $d['tanggallahir'] = "";
            $d['pendidikan_kk_id'] = "";
            $d['pendidikan_sedang_id'] = "";
            $d['pekerjaan_id'] = "";
            $d['status_kawin'] = "";
            $d['warganegara_id'] = "";
            $d['dokumen_pasport'] = "";
            $d['dokumen_kitas'] = "";
            $d['ayah_nik'] = "";
            $d['ibu_nik'] = "";
            $d['nama_ayah'] = "";
            $d['nama_ibu'] = "";
            $d['foto'] = "";
            $d['golongan_darah_id'] = "";
            $d['id_cluster'] = "";
            $d['status'] = "";
            $d['alamat_sebelumnya'] = "";
            $d['alamat_sekarang'] = "";
            $d['status_dasar'] = "";
            $d['hamil'] = "";
            $d['cacat_id'] = "";
            $d['sakit_menahun_id'] = "";
            $d['kta_lahir'] = "";
            $d['akta_perkawinan'] = "";
            $d['tanggal_perkawinan'] = "";
            $d['akta_perceraian'] = "";
            $d['tanggal_perceraian'] = "";
            $d['cara_kb_id'] = "";
            $d['telepon'] = "";
            $d['tgl_akhir_paspor'] = "";
            $d['no_kk_sebelumnya'] = "";
            $d['ktp_el'] = "";
            $d['status_rekam'] = "";
            $d['waktulahir'] = "";
            $d['tempat_dilahrikan'] = "";
            $d['jenis_kelahiran'] = "";
            $d['kelahiran_anak_ke'] = "";
            $d['penolong_kelahiran'] = "";
            $d['berat_lahir'] = "";
            $d['panjang_lahir'] = "";
        }
        echo json_encode($d);
    }
}
