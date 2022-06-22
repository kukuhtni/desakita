<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
        $this->load->model('model_kelompok');
    }
    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'Kelompok';
        $d['subjudul'] = 'Data kelompok';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/kelompok/view';
        $d['data'] = $this->model_kelompok->all();


        $this->load->view('template/home', $d);
    }
}
