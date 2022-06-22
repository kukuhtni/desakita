<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_jabatan extends CI_Model
{

    public function all()
    {
        $this->db->order_by('id_jabatan');
        $q = $this->db->get('ref_jabatan');

        return $q->result();
    }

    public function ada($id)
    {
        $q = $this->db->get_where('ref_jabatan', $id);
        $row = $q->num_rows();

        return $row > 0;
    }
    public function update($id, $dt)
    {
        $this->db->update("ref_jabatan", $dt, $id);
    }

    public function get($id)
    {
        $q = $this->db->get_where('ref_jabatan', $id);
        $row = $q->num_rows();

        if ($row > 0) {
            return $q->row();
        } else {
            return null;
        }
    }


    public function insert($id, $dt)
    {
        $this->db->insert("ref_jabatan", $dt, $id);
    }

    public function delete($id)
    {
        $this->db->delete("ref_jabatan", $id);
    }
}
