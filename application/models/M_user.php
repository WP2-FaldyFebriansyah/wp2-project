<?php
class M_user extends CI_Model
{
	public function inser_data($table,$data)
	{
		return $this->db->insert($table,$data);
	}
} 
?>