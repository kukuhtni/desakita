<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('web_artikel_model', 'data');
        $this->load->model('model_galeri', 'galeri');
    }

    public function index($id = false)
    {
        $d['judul'] = "Pengelolaan Data Web";
        $d['subjudul'] = "Gallery Kegiatan";
        $d['content'] = "admin/galeri";
        $d['submenu'] = "Foto Kegiatan";
        $d['menu'] = "admin/menu";

        $d['list_album'] = $this->galeri->listalbum();

        if (!empty($id)) {
            $album = $this->galeri->album_id($id);
            $d['album'] = $album;
            $d['nama_album'] = $album[0]['nama_album'];
        } else {
            $album = $this->galeri->album_all();
            $d['album'] = $album;
            $d['nama_album'] = $album[0]['nama_album'];
        }

        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->role;
        if ($this->session->userdata('logged_in') and $role == 'Administrator') {
            $this->load->view('template/home', $d);
        } else {
            redirect('login');
        }
    }
}
