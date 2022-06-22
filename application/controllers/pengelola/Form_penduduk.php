<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_penduduk extends CI_Controller
{
    public function index()
	{

		$d['class'] = 'home';
		$d['judul'] = 'Kependudukan';
		$d['subjudul'] = 'Penduduk';
		$d['home'] = 'template/home';
		$d['menu'] = "pengelola/menu";
		$d['content'] = 'form_penduduk';

		$this->load->view('template/home', $d);
    }
}