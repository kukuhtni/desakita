<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_data extends CI_Model
{

    public function jml_data($table)
    {
        $q = $this->db->get($table);
        $jumlah = $q->num_rows();
        return $jumlah;
    }

    public function ambilPengguna()
    {
        $q = $this->db->get('tb_user');
        return $q->result();
    }
    public function tambahpengguna($data)
    {
        $this->db->insert('tb_pengguna', $data);

        return $this->db->affected_rows();
    }
    public function editpengguna($data, $id)
    {
        $this->db->update('tb_pengguna', $data, ['id' => $id]);

        return $this->db->affected_rows();
    }
    public function inputPengguna($data)
    {
        $this->db->insert('tb_user', $data);
        return $insert_id = $this->db->insert_id();
    }
    public function tampilkeluarga_id($id_kategori)
    {
        $sql = "SELECT d.nama as nama_penduduk, nama_kategori, a.id as id_pengguna, a.password as pass, c.no_kk,d.nik, a.id_kk, foto 
        FROM tb_pengguna as a, tb_kategori_pengguna as b, tb_keluarga as c, tb_penduduk as d 
        WHERE a.id_kategori = b.id AND b.nama_kategori = '$id_kategori' AND a.id_kk = c.id AND c.nik_kepala = d.id";
        return $this->db->query($sql)->result_array();
    }
    public function tampilperangkat_id($id_kategori)
    {
        $sql = "SELECT DISTINCT u.nama as nama_penduduk, nama_kategori, a.id as id_pengguna, a.password as pass, d.no_kk, u.nik, a.id_kk, foto 
        FROM tb_pengguna as a, tb_kategori_pengguna as b, tb_penduduk u LEFT JOIN tb_keluarga d ON u.id_kk = d.id
        WHERE a.id_kategori = b.id AND b.nama_kategori = '$id_kategori' AND a.id_kk = u.nik";
        return $this->db->query($sql)->result_array();
    }
    function ambil_pengguna_by_id($data)
    {
        $hsl = $this->db->query("SELECT * FROM tb_user WHERE id_user='$data'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'id_user' => $data->id_user,
                    'nik' => $data->nik,
                    'nama_user' => $data->nama_user,
                    'password' => $data->password,
                    'nama' => $data->nama,
                    'no_telepon' => $data->no_telepon,
                    'role' => $data->role,
                );
            }
            return $hasil;
        }
    }
    public function ambilPesan($nik)
    {
        $datanik = $nik;
        $q = $this->db->get_where('tb_pesan', ['nik' => $nik]);
        return  $q;
    }
    public function ambilPesanByID($nik)
    {
        $datanik = $nik;
        $q = $this->db->get_where('tb_pesan', ['nik' => $nik]);
        return  $q->result();
    }
}
