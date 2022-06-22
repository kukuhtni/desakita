<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_pustaka extends CI_Model
{
    //Load Database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function pendidikan()
    {
        $sql = "SELECT * from tb_penduduk_pendidikan";
        $q = $this->db->query($sql);
        return $q->result();
    }
    public function pekerjaan()
    {
        $sql = "SELECT * from tb_penduduk_pekerjaan";
        $q = $this->db->query($sql);
        return $q->result();
    }
    public function goldar()
    {
        $sql = "SELECT * from tb_golongan_darah";
        $q = $this->db->query($sql);
        return $q->result();
    }
    public function agama()
    {
        $sql = "SELECT * from tb_penduduk_agama";
        $q = $this->db->query($sql);
        return $q->result();
    }
    public function kewarganegaraan()
    {
        $sql = "SELECT * from tb_penduduk_warganegara";
        $q = $this->db->query($sql);
        return $q->result();
    }
    public function skeluarga()
    {
        $sql = "SELECT * from tb_penduduk_status";
        $q = $this->db->query($sql);
        return $q->result();
    }
    public function spenduduk()
    {
        $sql = "SELECT * from tb_status_dasar";
        $q = $this->db->query($sql);
        return $q->result();
    }
}
