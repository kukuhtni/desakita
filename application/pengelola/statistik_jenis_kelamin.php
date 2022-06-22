<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_jenis_kelamin extends CI_Controller
{



    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'Statistik Jenis Kelamin';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/statistik/jenis_kelamin';

        $this->load->view('template/home', $d);
    }
}
