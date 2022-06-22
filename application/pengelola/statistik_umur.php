<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_umur extends CI_Controller
{



    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'Statistik Umur';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/statistik/umur';

        $this->load->view('template/home', $d);
    }
}
