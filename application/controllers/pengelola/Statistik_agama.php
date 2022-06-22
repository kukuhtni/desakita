<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_agama extends CI_Controller
{



    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'Statistik agama';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/statistik/agama';

        $this->load->view('template/home', $d);
    }
}
