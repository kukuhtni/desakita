<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_pekerjaan extends CI_Controller
{



    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'Statistik Pekerjaan';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/statistik/pekerjaan';

        $this->load->view('template/home', $d);
    }
}
