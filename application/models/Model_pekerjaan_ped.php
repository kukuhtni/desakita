<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Model_pekerjaan_ped extends CI_Model{

	public function all()
	{
		$this->db->order_by('id_pekerjaan_ped');
		$q=$this->db->get('ref_pekerjaan_ped');
		
		return $q->result();
	}

	public function ada($id)
	{
		$q=$this->db->get_where('ref_pekerjaan_ped',$id);
		$row=$q->num_rows();
		
		return $row > 0;
	}
		public function update($id,$dt)
	{
		$this->db->update("ref_pekerjaan_ped",$dt,$id);
	
	}

	public function get($id)
	{
		$q=$this->db->get_where('ref_pekerjaan_ped',$id);
		$row=$q->num_rows();

		if ($row > 0){
			return $q->row();
		} else {
			return null;
		}
	
	}


		public function insert($id,$dt)
	{
		$this->db->insert("ref_pekerjaan_ped",$dt,$id);
	
	}

		public function delete($id)
	{
		$this->db->delete("ref_pekerjaan_ped",$id);
	
	}
	
	}