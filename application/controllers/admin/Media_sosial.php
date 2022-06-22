<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Media_sosial extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('web_artikel_model', 'data');
        $this->load->model('Model_mediasosial', 'sosial');
    }

    public function index()
    {
        $d['judul'] = "Pengelolaan Data Web";
        $d['subjudul'] = "Media Sosial";
        $d['content'] = "admin/media_sosial";
        $d['submenu'] = "Facebook";
        $d['menu'] = "admin/menu";

        $id_kategori = 1;
        $d['artikel'] = $this->sosial->dbmedia_sosial($id_kategori);

        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->role;
        if ($this->session->userdata('logged_in') and $role == 'Administrator') {
            $this->load->view('template/home', $d);
        } else {
            redirect('login');
        }
    }
    public function twitter()
    {
        $d['judul'] = "Pengelolaan Data Web";
        $d['subjudul'] = "Media Sosial";
        $d['content'] = "admin/media_sosial";
        $d['submenu'] = "Twitter";
        $d['menu'] = "admin/menu";

        $id_kategori = 2;
        $d['artikel'] = $this->sosial->dbmedia_sosial($id_kategori);

        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->role;
        if ($this->session->userdata('logged_in') and $role == 'Administrator') {
            $this->load->view('template/home', $d);
        } else {
            redirect('login');
        }
    }
    public function youtube()
    {
        $d['judul'] = "Pengelolaan Data Web";
        $d['subjudul'] = "Media Sosial";
        $d['content'] = "admin/media_sosial";
        $d['submenu'] = "Youtube";
        $d['menu'] = "admin/menu";

        $id_kategori = 3;
        $d['artikel'] = $this->sosial->dbmedia_sosial($id_kategori);

        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->role;
        if ($this->session->userdata('logged_in') and $role == 'Administrator') {
            $this->load->view('template/home', $d);
        } else {
            redirect('login');
        }
    }
    public function instagram()
    {
        $d['judul'] = "Pengelolaan Data Web";
        $d['subjudul'] = "Media Sosial";
        $d['content'] = "admin/media_sosial";
        $d['submenu'] = "Instagram";
        $d['menu'] = "admin/menu";

        $id_kategori = 4;
        $d['artikel'] =  $this->sosial->dbmedia_sosial($id_kategori);

        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->role;
        if ($this->session->userdata('logged_in') and $role == 'Administrator') {
            $this->load->view('template/home', $d);
        } else {
            redirect('login');
        }
    }
}
