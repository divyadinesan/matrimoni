<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matrimoni_controller extends CI_Controller 
{


public function index()
{
	$this->load->view('Matrimoni/index');
}

public function register()
{
	$this->load->view('Matrimoni/registration');
}
public function registration()
{
	$name=$this->input->post('name');
	$address=$this->input->post('address');
	$country=$this->input->post('country');
	$num=$this->input->post('num');
	$email=$this->input->post('email');
	$pass=$this->input->post('password');
	$exep=$this->input->post('exp');
	$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Assets/Matrimoni/product/';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if( $this->upload->do_upload('image'))
			{
	$result=array('Name'=>$name,'Address'=>$address,'Country'=>$country,'Number'=>$num,'Mat_email'=>$email,'Password'=>$pass,'experience'=>$exep,'image'=>$photo,'martimoni_type'=>'Matrimoni','matrimony_status'=>'requested');
	 $this->load->model('Matrimoni_model');
                $exe=$this->Matrimoni_model->registration_model($result);
				
				if($exe==1)
				{
					echo"<script>alert('Success!!...Waiting for Admin's Approvel!!!')</script>";
					$this->login();
				}
				else
				{
					echo"<script>alert('Failed!! Please Try Again..')</script>";
					$this->registration();
				}

}

}

public function login()
{
   $this->load->view('Matrimoni/login');
}

public function signin()
{
	$email=$this->input->post('Email');
	$password=$this->input->post('Password');
	$sign=array('Mat_email'=>$email,'Password'=>$password,'matrimony_status'=>'Approve');
	$this->load->model('Matrimoni_model');
	$res=$this->Matrimoni_model->signin_model($sign);
	if($res>0)
	{
		echo"<script>alert('signin successful')</script>";
		$this->session->set_userdata('Email',$email);
		$this->add_customer();
	}
	else
	{
		echo"<script>alert('Failed!! Please Try Again..')</script>";
		$this->login();
	}
}

// public function home()
// {
	
// 	if($this->session->has_userdata('Email'))
// 	{
// 	$this->load->view('Matrimoni/home');
//     }
//     else
//     {
//     	$this->login();
//     }
// }

public function add_customer()
{
	
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Matrimoni_model');
	$ArrData['matrimoni']=$this->Matrimoni_model->matrimoni_email_fetch_model();
	$this->load->view('Matrimoni/add_customer',$ArrData);
    }
    else
    {
    	$this->login();
    }
}

public function user_registration()
{
	$matrimoni_id=$this->input->post('matrimoni_id');
	$name=$this->input->post('name');
	$age=$this->input->post('age');
    $gender=$this->input->post('gender');
    $height=$this->input->post('height');
	$address=$this->input->post('address');
	$number=$this->input->post('num');
	$quali=$this->input->post('quali');
	$job=$this->input->post('job');
	$family=$this->input->post('fam');
	$email=$this->input->post('email');
	$pass=$this->input->post('password');
	$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Assets/User/coustomer/';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if( $this->upload->do_upload('image'))
			{
	$result=array('user_Name'=>$name,'user_Age'=>$age,'user_Gender'=>$gender,'user_Height'=>$height,'user_Address'=>$address,'user_Number'=>$number,'user_Qualification'=>$quali,'user_Job'=>$job,'user_Family'=>$family,'Email'=>$email,'Password'=>$pass,'Pic'=>$photo,'Matrimoni_id'=>$matrimoni_id,'payment'=>'Null');
	 $this->load->model('User_model');
      $exe=$this->User_model->registration_model($result);
				
				if($exe==1)
				{
					echo"<script>alert('registration successfull')</script>";
					$this->add_customer();
				}
				else
				{
					echo"<script>alert('failed')</script>";
					$this->add_customer();
				}

}
}

public function myprofile()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Matrimoni_model');
		$result['pro']=$this->Matrimoni_model->myprofile_model();
	    $this->load->view('Matrimoni/myprofile',$result);

    }
    else
    {
    	$this->login();
    }
}
public function payment_details()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Matrimoni_model');
		$result['use']=$this->Matrimoni_model->paymentdetails_model();
		$this->load->view('Matrimoni/payment_details',$result);
	}
	else
	{
		$this->login();
	}
}

public function logout()
{
	$this->session->sess_destroy();
	return redirect('Indexcontroller/Matrimoni');
}

public function match_profile()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Matrimoni_model');
		$result['match']=$this->Matrimoni_model->match_model();
		$this->load->view('Matrimoni/match_profile',$result);
	}
	else
	{
		$this->login();
	}
}





















}