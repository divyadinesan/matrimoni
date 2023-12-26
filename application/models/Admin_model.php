<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model 
{

public function login_model($result)
{
	$this->db->where($result);
    return $this->db->count_all_results('login');
}
public function verify_model()
{
	$this->db->select('*');
	$this->db->from('matrimoni_registration');
    $this->db->where('matrimony_status','requested');
    
	return $this->db->get()->result();
}
public function userdetails_model()
{
	$this->db->select('*');
	$this->db->from('user_registration');
	return $this->db->get()->result();
}

public function approvemat_model($id,$appmat)
{
    $this->db->where('matrimoni_id',$id);
    return $this->db->update('matrimoni_registration',$appmat);
 
}
public function rejectmat_model($id)
{
	  $this->db->where('matrimoni_id',$id);
    return $this->db->delete('matrimoni_registration');
}
public function addingmat_model($result)
{
	return $this->db->insert('matrimoni_registration',$result);
}

public function changepass_model()
{
	$email=$this->session->userdata('Email');
    $this->db->select('*');
    $this->db->from('login');
    $this->db->where('Email',$email);
    return $this->db->get()->result();
}

public function passupdate_model($update)
{
    $email=$this->session->userdata('Email');
    $this->db->where('Email',$email);
    return $this->db->update('login',$update);
}
public function paymentdetails_model()
{
    $this->db->select('*');
    $this->db->from('payment');
    return $this->db->get()->result();
}

public function manage_model()
{
    $this->db->select('*');
    $this->db->from('matrimoni_registration');
    $this->db->where('martimoni_type','Admin');
    
    return $this->db->get()->result();
}


public function managemat_model()
{
    $this->db->select('*');
    $this->db->from('matrimoni_registration');
    $this->db->where('martimoni_type','Matrimoni');
    
    return $this->db->get()->result();
}
















}