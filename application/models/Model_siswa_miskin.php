<?php if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Model_siswa_miskin extends CI_Model{

	public function all()
	{
		$this->db->order_by('id_siswa');
		$q=$this->db->get('siswa_miskin');
		
		return $q->result();
	}

	public function ada($id)
	{
		$q=$this->db->get_where('siswa_miskin',$id);
		$row=$q->num_rows();
		
		return $row > 0;
	}
		public function update($id,$dt)
	{
		$this->db->update("siswa_miskin",$dt,$id);
	
	}

	public function get($id)
	{
		$q=$this->db->get_where('siswa_miskin',$id);
		$row=$q->num_rows();

		if ($row > 0){
			return $q->row();
		} else {
			return null;
		}
	
	}


		public function insert($id,$dt)
	{
		$this->db->insert("siswa_miskin",$dt,$id);
	
	}

		public function delete($id)
	{
		$this->db->delete("siswa_miskin",$id);
	
	}
	
	}