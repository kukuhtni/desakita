<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik extends CI_Controller
{
    public function index()
    {
        $d['judul'] = "Kepala Keluarga";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function penduduk()
    {
        $d['judul'] = "Penduduk";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function pekerjaan()
    {
        $d['judul'] = "Pekerjaan";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function pendidikan()
    {
        $d['judul'] = "Pendidikan";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function statuskawin()
    {
        $d['judul'] = "Status Kawin";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function golongandarah()
    {
        $d['judul'] = "Golongan Darah";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function agama()
    {
        $d['judul'] = "Agama";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function raskin()
    {
        $d['judul'] = "Raskin";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function phk()
    {
        $d['judul'] = "PKH";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function bantuansiswa()
    {
        $d['judul'] = "Bantuan Siswa";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function potensiekonomi()
    {
        $d['judul'] = "Potensi Ekonomi";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }
    public function kelompokternak()
    {
        $d['judul'] = "Kelompok Ternak";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function kelompoktani()
    {
        $d['judul'] = "Kelompok Tani";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }

    public function kelompokkayu()
    {
        $d['judul'] = "Kelompok Kayu";
        $d['subjudul'] = "Statistik";
        $d['konten'] = "web/statistik";
        $this->load->view('web/home', $d);
    }
}
