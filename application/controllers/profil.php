<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('web_artikel_model', 'data');
        $this->load->model('Model_mediasosial', 'sosial');
        $this->load->model('model_profil', 'desa');
        $this->load->model('model_galeri', 'galeri');
        $this->load->model('model_struktur', 'struktur');
    }
    public function index()
    {
        $d['judul'] = "Sejarah Desa";
        $d['subjudul'] = "Profil";
        $d['konten'] = "web/profil";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();



        $this->load->view('web/home', $d);
    }

    public function visimisi()
    {
        $d['judul'] = "Visi & Misi";
        $d['subjudul'] = "Profil";
        $d['konten'] = "web/profil";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();


        $this->load->view('web/home', $d);
    }

    public function struktur()
    {
        $d['judul'] = "Struktur Pemerintahan Desa";
        $d['subjudul'] = "Profil";
        $d['konten'] = "web/profil";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();

        //main
        $d['aparatur'] = $this->struktur->get_data_all();

        $this->load->view('web/home', $d);
    }

    public function peta()
    {
        $d['judul'] = "Peta Wilayah Desa";
        $d['subjudul'] = "Profil";
        $d['konten'] = "web/profil";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();


        $this->load->view('web/home', $d);
    }

    public function peraturan()
    {
        $d['judul'] = "Peraturan Desa";
        $d['subjudul'] = "Profil";
        $d['konten'] = "web/profil";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();


        $this->load->view('web/home', $d);
    }
}
