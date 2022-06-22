<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Model_status_tinggal extends CI_Model{

	public function all()
	{
		$this->db->order_by('id_status_tinggal');
		$q=$this->db->get('ref_status_tinggal');
		
		return $q->result();
	}

	public function ada($id)
	{
		$q=$this->db->get_where('ref_status_tinggal',$id);
		$row=$q->num_rows();
		
		return $row > 0;
	}
		public function update($id,$dt)
	{
		$this->db->update("ref_status_tinggal",$dt,$id);
	
	}

	public function get($id)
	{
		$q=$this->db->get_where('ref_status_tinggal',$id);
		$row=$q->num_rows();

		if ($row > 0){
			return $q->row();
		} else {
			return null;
		}
	
	}


		public function insert($id,$dt)
	{
		$this->db->insert("ref_status_tinggal",$dt,$id);
	
	}

		public function delete($id)
	{
		$this->db->delete("ref_status_tinggal",$id);
	
	}
	
	}