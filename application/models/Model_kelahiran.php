<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Model_kelahiran extends CI_Model{

	public function all()
	{
		$this->db->order_by('id_kelahiran');
		$q=$this->db->get('tb_kelahiran');
		
		return $q->result();
	}

	public function ada($id)
	{
		$q=$this->db->get_where('tb_kelahiran',$id);
		$row=$q->num_rows();
		
		return $row > 0;
	}
		public function update($id,$dt)
	{
		$this->db->update("tb_kelahiran",$dt,$id);
	
	}

	public function get($id)
	{
		$q=$this->db->get_where('tb_kelahiran',$id);
		$row=$q->num_rows();

		if ($row > 0){
			return $q->row();
		} else {
			return null;
		}
	
	}


		public function insert($id,$dt)
	{
		$this->db->insert("tb_kelahiran",$dt,$id);
	
	}

		public function delete($id)
	{
		$this->db->delete("tb_kelahiran",$id);
	
	}
	
	}