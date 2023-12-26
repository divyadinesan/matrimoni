<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_model 
{
	public function matrimoni()
	{
		$this->db->select('*');
		$this->db->from('matrimoni_registration');
		$this->db->where('matrimony_status','Approve');
		return $this->db->get()->result();
	}

}
