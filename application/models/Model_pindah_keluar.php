<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_pindah_keluar extends CI_Model
{

    public function all()
    {
        $this->db->order_by('id_pindah_keluar');
        $q = $this->db->get('tb_pindah_keluar');

        return $q->result();
    }

    public function ada($id)
    {
        $q = $this->db->get_where('tb_pindah_keluar', $id);
        $row = $q->num_rows();

        return $row > 0;
    }
    public function update($id, $dt)
    {
        $this->db->update("tb_pindah_keluar", $dt, $id);
    }

    public function get($id)
    {
        $q = $this->db->get_where('tb_pindah_keluar', $id);
        $row = $q->num_rows();

        if ($row > 0) {
            return $q->row();
        } else {
            return null;
        }
    }


    public function insert($id, $dt)
    {
        $this->db->insert("tb_pindah_keluar", $dt, $id);
    }

    public function delete($id)
    {
        $this->db->delete("tb_pindah_keluar", $id);
    }
}
