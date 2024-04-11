<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model 
{
public function registration_model($result)
{
  return $this->db->insert('user_registration',$result);
}
public function signin_model($sign)
{
	$this->db->where($sign);
    return $this->db->count_all_results('user_registration');
}

public function matrimoni_fetch_model()
{
	$this->db->select('*');
	$this->db->from('matrimoni_registration');
	return $this->db->get()->result();
}
public function user_fetch_model($matrimoni_id)
{
	$this->db->select('*');
	$this->db->from('user_registration');
	$this->db->where('Matrimoni_id',$matrimoni_id);
	return $this->db->get()->result();
}

public function matrimony_fetch_model($matrimoni_id)
{
	$this->db->select('*');
	$this->db->from('matrimoni_registration');
	$this->db->where('Matrimoni_id',$matrimoni_id);
	return $this->db->get()->result();
}
public function mymatches_fetch_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('matches');
	$this->db->where('receiver_email',$email);
	$this->db->join('user_registration','user_registration.Email=matches.sender_email');
	// // Start the OR condition group
 //    $this->db->group_start();
 //    $this->db->join('user_registration','user_registration.Email = matches.receiver_email');
 //    $this->db->or_where('matches.sender_email', $email);
 //    $this->db->group_end();
	return $this->db->get()->result();

}
public function mymatches_sender_fetch_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('matches');
	$this->db->where('sender_email',$email);
	$this->db->join('user_registration','user_registration.Email=matches.receiver_email');
	
	return $this->db->get()->result();
}
public function user_all_fetch_model()
{
	$this->db->select('*');
	$this->db->from('user_registration');
	//$this->db->where('Matrimoni_id',$matrimoni_id);
	return $this->db->get()->result();
}
public function user_matrimoni_fetch_model($Matrimoni_id)
{
	$this->db->select('*');
	$this->db->from('user_registration');
	$this->db->where('Matrimoni_id',$Matrimoni_id);
	return $this->db->get()->result();
}

public function user_login_fetch_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('user_registration');
	$this->db->join('matrimoni_registration','user_registration.Matrimoni_id=matrimoni_registration.matrimoni_id');
	$this->db->where('Email',$email);
	return $this->db->get()->result(); 
}
// public function matrimoni_user_fetch_model()
// {
// 	$email=$this->session->userdata('Email');
// 	$this->db->select('*');
// 	$this->db->from('user_registration');
// 	$this->db->join('matrimoni_registration','matrimoni_registration.matrimoni_id=user_registration.Matrimoni_id');
// 	$this->db->where('matrimoni_registration.matrimoni_id','user_registration.Matrimoni_id');
// 	$this->db->where('user_registration.Email',$email);
// 	return $this->db->get()->result(); 
// }

public function fullprofile_model($user_id)
{
     $this->db->select('*');
     $this->db->from('user_registration');
     $this->db->where('user_id',$user_id);
     return $this->db->get()->result();
}

public function payment_model($result)
{
    return $this->db->insert('payment',$result);
} 

public function myprofile_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('user_registration');
	$this->db->where('Email',$email);
	return $this->db->get()->result();
}


// public function payment_model($result)
// {
//  	return $this->db->insert('payment',$result);
// }


public function paid_model($paid,$mid)
{
	$email=$this->session->userdata('Email');
	$this->db->where('Email',$email);
	$this->db->where('Matrimoni_id',$mid);
    return $this->db->update('user_registration',$paid);
}
public function matches_model($match)
{
	return $this->db->insert('matches',$match);
}

public function request_model()
{
	$email=$this->session->userdata('Email');
	$this->db->where('receiver_email',$email);
	$this->db->select('*');
	$this->db->from('matches');
	$this->db->where('status','pending');
	return $this->db->get()->result();
}
public function my_request_model()
{
	$email=$this->session->userdata('Email');
	$this->db->where('sender_email',$email);
	$this->db->select('*');
	$this->db->from('matches');
	$this->db->join('user_registration','matches.receiver_email=user_registration.Email');
	return $this->db->get()->result();
}
public function acceptrequest_model($user_id,$approve)
{
	$email=$this->session->userdata('Email');
	$this->db->where('sender_userid',$user_id);
	$this->db->where('receiver_email',$email);
    return $this->db->update('matches',$approve);
}
public function rejectrequest_model($user_id,$reject)
{
	$email=$this->session->userdata('Email');
	$this->db->where('sender_userid',$user_id);
	$this->db->where('receiver_email',$email);
    return $this->db->update('matches',$reject);
}













}

















