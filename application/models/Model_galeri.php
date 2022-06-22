<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_galeri extends CI_Model
{

    public function listalbum()
    {
        $this->db->ORDER_BY('tanggal', 'DESC');
        return $this->db->get('tb_album')->result_array();
    }
    public function album_all()
    {
        $sql = "SELECT *, a.id FROM tb_album as a, tb_album_galeri as d WHERE a.id = d.album_id";
        return $this->db->query($sql)->result_array();
    }
    public function album_id($id)
    {
        $sql = "SELECT *, a.id FROM tb_album as a, tb_album_galeri as d WHERE a.id = d.album_id AND a.id=$id";
        return $this->db->query($sql)->result_array();
    }
    public function album_all6()
    {
        $sql = "SELECT *, a.id FROM tb_album as a, tb_album_galeri as d WHERE a.id = d.album_id LIMIT 6";
        return $this->db->query($sql)->result_array();
    }
    public function gambar()
    {
        return $this->db->get('tb_album_galeri')->result_array();
    }
}
