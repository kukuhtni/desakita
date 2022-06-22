<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Model_gizi_buruk extends CI_Model{

	public function all()
	{
		$this->db->order_by('id_gizi_buruk');
		$q=$this->db->get('tb_gizi_buruk');
		
		return $q->result();
	}

	public function ada($id)
	{
		$q=$this->db->get_where('tb_gizi_buruk',$id);
		$row=$q->num_rows();
		
		return $row > 0;
	}
		public function update($id,$dt)
	{
		$this->db->update("tb_gizi_buruk",$dt,$id);
	
	}

	public function get($id)
	{
		$q=$this->db->get_where('tb_gizi_buruk',$id);
		$row=$q->num_rows();

		if ($row > 0){
			return $q->row();
		} else {
			return null;
		}
	
	}


		public function insert($id,$dt)
	{
		$this->db->insert("tb_gizi_buruk",$dt,$id);
	
	}

		public function delete($id)
	{
		$this->db->delete("tb_gizi_buruk",$id);
	
	}
	
	}