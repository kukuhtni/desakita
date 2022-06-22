<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('web_artikel_model', 'data');
        $this->load->model('Model_mediasosial', 'sosial');
        $this->load->model('model_profil', 'desa');
        $this->load->model('model_galeri', 'galeri');
    }
    public function index()
    {
        $d['judul'] = "Halaman Utama";
        $d['subjudul'] = "Berita";
        $d['konten'] = "web/homepage";


        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();


        $d['headline'] = $this->data->headline();
        $d['portalberita'] = $this->data->artikelall();
        $d['testimonial'] = $this->data->testimonial();

        $d['album'] = $this->galeri->album_all6();


        $this->load->view('web/home', $d);
    }
}
