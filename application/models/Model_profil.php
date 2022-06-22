<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_profil extends CI_Model
{
    public function allprovinsi()
    {
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('tb_provinsi')->result_array();
    }
    public function namadesa()
    {
        $this->db->select('nama_desa');
        return $this->db->get('tb_profildesa')->result_array();
    }
    public function alldesa()
    {
        return $this->db->get('tb_profildesa')->result_array();
    }
    public function updatedatadesa($id, $data)
    {
        $this->db->update('tb_profildesa', $data, ['id' => $id]);

        return $this->db->affected_rows();
    }

    public function logodesa()
    {
        $this->db->select('logo,icon_logo');
        return $this->db->get('tb_profildesa')->result_array();
    }

    //deskripsi desa
    public function alldeskripsi()
    {
        return $this->db->get('tb_deskrip_desa')->result_array();
    }
    public function updatedatadeskrip($id, $data)
    {
        $this->db->update('tb_deskrip_desa', $data, ['id' => $id]);

        return $this->db->affected_rows();
    }
}
