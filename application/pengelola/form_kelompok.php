<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_kelompok extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_data');
        $this->load->model('model_form_kelompok');
    }
    public function index()
    {

        $d['class'] = 'home';
        $d['judul'] = 'form_kelompok';
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";
        $d['content'] = 'pengelola/kelompok/form_kelompok';
        $d['data'] = $this->model_form_kelompok->all();


        $this->load->view('template/home', $d);
    }
}
