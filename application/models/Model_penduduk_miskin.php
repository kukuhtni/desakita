<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Model_penduduk_miskin extends CI_Model{

	public function all()
	{
		$this->db->order_by('id_pen');
		$q=$this->db->get('penduduk_miskin');
		
		return $q->result();
	}

	public function ada($id)
	{
		$q=$this->db->get_where('penduduk_miskin',$id);
		$row=$q->num_rows();
		
		return $row > 0;
	}
		public function update($id,$dt)
	{
		$this->db->update("penduduk_miskin",$dt,$id);
	
	}

	public function get($id)
	{
		$q=$this->db->get_where('penduduk_miskin',$id);
		$row=$q->num_rows();

		if ($row > 0){
			return $q->row();
		} else {
			return null;
		}
	
	}


		public function insert($id,$dt)
	{
		$this->db->insert("penduduk_miskin",$dt,$id);
	
	}

		public function delete($id)
	{
		$this->db->delete("penduduk_miskin",$id);
	
	}
	
	}