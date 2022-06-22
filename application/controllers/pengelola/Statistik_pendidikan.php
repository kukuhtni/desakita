<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_pendidikan extends CI_Controller
{



    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'Statistik';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/statistik/view';

        $this->load->view('template/home', $d);
    }
}
