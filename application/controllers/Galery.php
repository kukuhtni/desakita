<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
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
        $d['judul'] = "Galery";
        $d['subjudul'] = "Galery";
        $d['konten'] = "web/galery";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();

        //main
        $d['galeri'] = $this->galeri->gambar();



        $this->load->view('web/home', $d);
    }
}
