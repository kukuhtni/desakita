<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_artikel_model extends CI_Model
{
    public function artikelall()
    {
        $sql = "SELECT *,a.id FROM tb_artikel as a, tb_kategori as b  WHERE a.id_kategori = b.id ORDER BY tgl_upload DESC limit 5";
        return $this->db->query($sql)->result_array();
    }
    public function beritaall($id)
    {
        $sql = "SELECT *,a.id FROM tb_artikel as a, tb_kategori as b  WHERE a.id_kategori = b.id AND a.id_kategori = $id ORDER BY tgl_upload DESC limit 5";
        return $this->db->query($sql)->result_array();
    }
    public function berita_id($id)
    {
        $sql = "SELECT *, a.id FROM tb_artikel as a, tb_kategori as b  WHERE a.id_kategori = b.id AND a.id = $id";
        return $this->db->query($sql)->result_array();
    }
    public function artikelbaru()
    {
        $this->db->order_by('tgl_upload', 'DESC');
        $this->db->limit('3');
        return $this->db->get('tb_artikel')->result_array();
    }
    public function tampilartikel_id($id_kategori)
    {
        $sql = "SELECT *,a.id FROM tb_artikel as a, tb_kategori as b WHERE a.id_kategori = b.id AND a.id_kategori = $id_kategori ORDER BY tgl_upload DESC";
        return $this->db->query($sql)->result_array();
    }
    public function headline()
    {
        $sql = "SELECT *,a.id FROM tb_artikel as a, tb_kategori as b  WHERE a.id_kategori = b.id AND a.headline = 1  ORDER BY tgl_upload DESC";
        return $this->db->query($sql)->result_array();
    }
    public function list_headline()
    {
        $sql = "SELECT id, judul FROM tb_artikel ORDER BY tgl_upload DESC";
        return $this->db->query($sql)->result_array();
    }

    public function settingheadline($data, $id)
    {
        $this->db->update('tb_artikel', $data, ['id' => $id]);

        return $this->db->affected_rows();
    }
    public function testimonial()
    {
        return $this->db->get('tb_user')->result_array();
    }
}
