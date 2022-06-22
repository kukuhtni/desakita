<?php
defined('BASEPATH') or exit('No direct script access allowed');

class layanansurat extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();
        $this->load->model('Model_pengajuan', 'pengajuan');
        $this->load->model('Model_keluarga', 'keluarga');
    }

    public function index()
    {
        $d['judul'] = "Layanan Surat";
        $d['subjudul'] = "";
        $d['content'] = "pengelola/layanansurat/layanansurat";
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";

        //session
        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->role;

        $d['role'] = $role;

        $d['listsuraxt'] = $this->pengajuan->getAll();
        $d['datapengajuan'] = $this->pengajuan->get_id_desa();


        if ($this->session->userdata('logged_in') and $role == 'Perangkat Desa') {
            $this->load->view('template/home', $d);
        } else {
            redirect('login');
        }
    }
    public function formatsurat()
    {
        $d['judul'] = "Layanan Surat";
        $d['subjudul'] = "Format Surat";
        $d['content'] = "pengelola/layanansurat/formatsurat";
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";

        //session
        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->role;

        $d['role'] = $role;


        $d['listsurat'] = $this->pengajuan->list_format_surat();


        if ($this->session->userdata('logged_in') and $role == 'Perangkat Desa') {
            $this->load->view('template/home', $d);
        } else {
            redirect('login');
        }
    }
    public function update($role, $id)
    {

        if ($role == "RT") {
            $data = [
                'rt_status' => $this->input->post('konfirmasi'),
                'status' => 2
            ];
        } elseif ($role == "RW") {
            $data = [
                'rw_status' => $this->input->post('konfirmasi'),
                'status' => 3
            ];
        } elseif ($role == "Perangkat%20Desa") {
            $data = [
                'desa_status' => $this->input->post('konfirmasi'),
                'status' => 4
            ];
        } else {
            $this->session->set_flashdata('pesan', 'eror');
            redirect('pengelola/layanansurat');
        }

        if ($hasil = $this->pengajuan->updatepengajuan($data, $id) > 0) {
            $this->session->set_flashdata('pesan', 'konfirmasi');
            redirect('pengelola/layanansurat');
        } else {
            $this->session->set_flashdata('pesan', 'eror');
            redirect('pengelola/layanansurat');
        }
    }
    public function form($id = false, $idpenduduk = false)
    {
        $d['judul'] = "Layanan Surat";
        $d['subjudul'] = "Form Pemohon";
        $d['content'] = "pengelola/layanansurat/form";
        $d['home'] = 'template/home';
        $d['menu'] = "pengelola/menu";

        //session
        $session['hasil'] = $this->session->userdata('logged_in');
        $role = $session['hasil']->role;
        $d['namaperangkat'] = $session['hasil']->nama;

        $d['role'] = $role;

        $penduduk_id = $this->keluarga->penduduk_id($idpenduduk);
        $d['nik'] = $penduduk_id['0']['nik'];
        $d['nama'] = $penduduk_id['0']['nama'];
        $d['tempatlahir'] = $penduduk_id['0']['tempatlahir'];
        $d['tanggallahir'] = $penduduk_id['0']['tanggallahir'];
        $d['umur'] = $penduduk_id['0']['umur'];
        $d['alamat'] = $penduduk_id['0']['alamat'];
        $d['pendidikan'] = $penduduk_id['0']['pendidikan'];
        $d['kewarganegaraan'] = $penduduk_id['0']['kewarganegaraan'];
        $d['agama'] = $penduduk_id['0']['agama'];

        $dataformid = $this->pengajuan->get_form_id($id);
        $d['keperluan'] = $dataformid[0]['keperluan'];
        $d['keterangan'] = $dataformid[0]['keterangan'];

        if ($this->session->userdata('logged_in') and $role == 'Perangkat Desa') {
            $this->load->view('template/home', $d);
        } else {
            redirect('login');
        }
    }
    public function doc($url = '')
    {
        $format = $this->surat_model->get_surat($url);
        $log_surat['url_surat'] = $format['id'];
        $log_surat['id_pamong'] = $_POST['pamong_id'];
        $log_surat['id_user'] = $_SESSION['user'];
        $log_surat['no_surat'] = $_POST['nomor'];
        $id = $_POST['nik'];
        switch ($url) {
            case 'surat_ket_kelahiran':
                // surat_ket_kelahiran id-nya ibu atau bayi
                if (!$id) $id = $_SESSION['id_ibu'];
                if (!$id) $id = $_SESSION['id_bayi'];
                break;
            case 'surat_ket_nikah':
                // id-nya calon pasangan pria atau wanita
                if (!$id) $id = $_POST['id_pria'];
                if (!$id) $id = $_POST['id_wanita'];
                break;
            default:
                # code...
                break;
        }

        if ($id) {
            $log_surat['id_pend'] = $id;
            $nik = $this->db->select('nik')->where('id', $id)->get('tweb_penduduk')
                ->row()->nik;
        } else {
            // Surat untuk non-warga
            $log_surat['nama_non_warga'] = $_POST['nama_non_warga'];
            $log_surat['nik_non_warga'] = $_POST['nik_non_warga'];
            $nik = $log_surat['nik_non_warga'];
        }

        $nama_surat = $this->keluar_model->nama_surat_arsip($url, $nik, $_POST['nomor']);
        $lampiran = '';
        $this->surat_model->buat_surat($url, $nama_surat, $lampiran);
        $log_surat['nama_surat'] = $nama_surat;
        $log_surat['lampiran'] = $lampiran;
        $this->keluar_model->log_surat($log_surat);

        header("location:" . base_url(LOKASI_ARSIP . $nama_surat));
    }
}
