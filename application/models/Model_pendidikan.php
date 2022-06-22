<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_pendidikan extends CI_Model
{

	public function all()
	{
		$this->db->order_by('id_pendidikan');
		$q = $this->db->get('ref_pendidikan');

		return $q->result();
	}
	public function countpenduduk()
	{
		$query = $this->db->query('SELECT * FROM tb_penduduk');

		return $query->num_rows();
	}
	public function countkeluarga()
	{
		$query = $this->db->query('SELECT * FROM tb_keluarga');

		return $query->num_rows();
	}

	public function ada($id)
	{
		$q = $this->db->get_where('ref_pendidikan', $id);
		$row = $q->num_rows();

		return $row > 0;
	}
	public function update($id, $dt)
	{
		$this->db->update("ref_pendidikan", $dt, $id);
	}

	public function get($id)
	{
		$q = $this->db->get_where('ref_pendidikan', $id);
		$row = $q->num_rows();

		if ($row > 0) {
			return $q->row();
		} else {
			return null;
		}
	}


	public function insert($id, $dt)
	{
		$this->db->insert("ref_pendidikan", $dt, $id);
	}

	public function delete($id)
	{
		$this->db->delete("pendidikan", $id);
	}
}
