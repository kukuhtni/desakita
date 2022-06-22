<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pus_kependudukan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
        $this->load->model('model_keluarga');
        $this->load->model('model_penduduk', 'penduduk');
        $this->load->model('model_profil', 'profil');
        $this->load->model('model_pustaka');
    }
    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'Kependudukan';
        $d['subjudul'] = 'Data Pendidikan';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_kependudukan/pendidikan/view';

        // $d['listpenduduk'] = $this->penduduk->listpenduduk();

        $d['data'] = $this->model_pustaka->pendidikan();
        $this->load->view('template/home', $d);
    }
    public function pendidikan()
    {
        $d['class'] = 'home';
        $d['judul'] = 'Kependudukan';
        $d['subjudul'] = 'Data Pendidikan';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_kependudukan/pendidikan/view';

        // $d['listpenduduk'] = $this->penduduk->listpenduduk();

        $d['data'] = $this->model_pustaka->pendidikan();
        $this->load->view('template/home', $d);
    }
    public function pekerjaan()
    {
        $d['class'] = 'home';
        $d['judul'] = 'Kependudukan';
        $d['subjudul'] = 'Data Pekerjaan';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_kependudukan/pekerjaan/view';

        // $d['listpenduduk'] = $this->penduduk->listpenduduk();

        $d['data'] = $this->model_pustaka->pekerjaan();
        $this->load->view('template/home', $d);
    }
    public function goldar()
    {
        $d['class'] = 'home';
        $d['judul'] = 'Kependudukan';
        $d['subjudul'] = 'Data Golongan Darah';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_kependudukan/goldar/view';

        // $d['listpenduduk'] = $this->penduduk->listpenduduk();

        $d['data'] = $this->model_pustaka->goldar();
        $this->load->view('template/home', $d);
    }
    public function agama()
    {
        $d['class'] = 'home';
        $d['judul'] = 'Kependudukan';
        $d['subjudul'] = 'Data Agama';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_kependudukan/agama/view';

        // $d['listpenduduk'] = $this->penduduk->listpenduduk();

        $d['data'] = $this->model_pustaka->agama();
        $this->load->view('template/home', $d);
    }
    public function kewarganegaraan()
    {
        $d['class'] = 'home';
        $d['judul'] = 'Kependudukan';
        $d['subjudul'] = 'Data Kewarganegaraan';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_kependudukan/kewarganegaraan/view';

        // $d['listpenduduk'] = $this->penduduk->listpenduduk();

        $d['data'] = $this->model_pustaka->kewarganegaraan();
        $this->load->view('template/home', $d);
    }
    public function skeluarga()
    {
        $d['class'] = 'home';
        $d['judul'] = 'Kependudukan';
        $d['subjudul'] = 'Data Status keluarga';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_kependudukan/Skeluarga/view';

        // $d['listpenduduk'] = $this->penduduk->listpenduduk();

        $d['data'] = $this->model_pustaka->skeluarga();
        $this->load->view('template/home', $d);
    }
    public function spenduduk()
    {
        $d['class'] = 'home';
        $d['judul'] = 'Kependudukan';
        $d['subjudul'] = 'Data Status Penduduk';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/pus_kependudukan/spenduduk/view';

        // $d['listpenduduk'] = $this->penduduk->listpenduduk();

        $d['data'] = $this->model_pustaka->spenduduk();
        $this->load->view('template/home', $d);
    }
}
