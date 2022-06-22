<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_struktur extends CI_Model
{

    public function get_data()
    {
        $sql = "SELECT u.*, p.nama as nama FROM tb_aparatur u LEFT JOIN tb_penduduk p ON u.id_pend = p.id";
        return $this->db->query($sql)->result_array();
    }
    public function get_data_all()
    {
        $sql = "SELECT u.*, p.nama as nama, p.nik as nik, p.tempatlahir, p.tanggallahir, x.nama AS sex, b.nama AS pendidikan_kk, g.nama AS agama, x2.nama AS aparatur_sex, b2.nama AS aparatur_pendidikan, g2.nama AS aparatur_agama
        FROM tb_aparatur u
        LEFT JOIN tb_penduduk p ON u.id_pend = p.id
        LEFT JOIN tb_penduduk_pendidikan_kk b ON p.pendidikan_kk_id = b.id
        LEFT JOIN tb_penduduk_sex x ON p.sex = x.id
        LEFT JOIN tb_penduduk_agama g ON p.agama_id = g.id
        LEFT JOIN tb_penduduk_pendidikan_kk b2 ON u.aparatur_pendidikan = b2.id
        LEFT JOIN tb_penduduk_sex x2 ON u.aparatur_sex = x2.id
        LEFT JOIN tb_penduduk_agama g2 ON u.aparatur_agama = g2.id
        WHERE 1 ORDER BY aparatur_id ASC";

        return $this->db->query($sql)->result_array();
    }

    public function list_data_aparatur()
    {
        $sql = "SELECT * FROM tb_aparatur ORDER BY aparatur_id ASC";

        return $this->db->query($sql)->result_array();
    }
    public function list_data_rw()
    {
        $sql = "SELECT * 
        FROM tb_wil_clusterdesa as a, tb_penduduk as b, tb_keluarga as c
        WHERE a.id_kepala = b.id
        AND b.id_kk = c.id
        ";

        return $this->db->query($sql)->result_array();
    }
}
