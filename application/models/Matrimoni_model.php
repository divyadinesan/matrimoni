<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matrimoni_model extends CI_model 
{


public function registration_model($result)
{
   return $this->db->insert('matrimoni_registration',$result);
}

public function signin_model($sign)
{
	$this->db->where($sign);
    return $this->db->count_all_results('matrimoni_registration');
}
public function matrimoni_email_fetch_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('matrimoni_registration');
	$this->db->where('Mat_email',$email);
	return $this->db->get()->result();

}

public function matrimoni_id_fetch_model($Matrimoni_id)
{
	$this->db->select('*');
	$this->db->from('matrimoni_registration');
	$this->db->where('Matrimoni_id',$Matrimoni_id);
	return $this->db->get()->result();
}

// public function matrimoni_user_fetch_model()
// {
	
// 	$this->db->select('*');
// 	$this->db->from('user_registration');
// 	$this->db->join('matrimoni_registration','matrimoni_registration.matrimoni_id=user_registration.Matrimoni_id');
// 	$this->db->where('matrimoni_registration.matrimoni_id','user_registration.Matrimoni_id');
// 	return $this->db->get()->result();
// }
public function myprofile_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('matrimoni_registration');
	$this->db->where('Mat_email',$email);
	return $this->db->get()->result();
}

public function paymentdetails_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('payment');
	$this->db->where('matrimoni_email',$email);
	return $this->db->get()->result();
}

public function match_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('matches');
	$this->db->join('matrimoni_registration','matrimoni_registration.matrimoni_id=matches.sender_matid');
	$this->db->join('user_registration','user_registration.user_id=matches.sender_userid');
	$this->db->where('matrimoni_registration.Mat_email',$email);
	return $this->db->get()->result();

}


















}