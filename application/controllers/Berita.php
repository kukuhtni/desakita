<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
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
        $d['judul'] = "Berita Desa";
        $d['subjudul'] = "Berita";
        $d['konten'] = "web/berita";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();


        //main
        $id = "1";
        $d['berita'] = $this->data->beritaall($id);
        $d['recentberita'] = $this->data->artikelall();


        $this->load->view('web/home', $d);
    }

    public function lokal()
    {
        $d['judul'] = "Berita Lokal";
        $d['subjudul'] = "Berita";
        $d['konten'] = "web/berita";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();
        $d['recentberita'] = $this->data->artikelall();

        //main
        $id = "3";
        $d['berita'] = $this->data->beritaall($id);


        $this->load->view('web/home', $d);
    }

    public function kriminal()
    {
        $d['judul'] = "Berita Kriminal";
        $d['subjudul'] = "Berita";
        $d['konten'] = "web/berita";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();
        $d['recentberita'] = $this->data->artikelall();

        //main
        $id = "2";
        $d['berita'] = $this->data->beritaall($id);


        $this->load->view('web/home', $d);
    }
    public function detail_berita($id = false)
    {
        $id_artikel = $id;
        $berita_id = $this->data->berita_id($id_artikel);
        $judul = $berita_id[0]['judul'];
        $kategori = $berita_id[0]['nama_kategori'];

        $d['berita'] = $berita_id;

        $d['judul'] = $judul;
        $d['subjudul'] = $kategori;
        $d['konten'] = "web/detail_berita";

        // database
        $d['mediasosial'] = $this->sosial->dbmedia_sosialall();
        $d['datadesa'] = $this->desa->alldesa();
        $d['ket_desa'] = $this->desa->alldeskripsi();
        $d['artikelbaru'] = $this->data->artikelbaru();



        $this->load->view('web/home', $d);
    }
}
