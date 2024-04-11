<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller 
{

public function index()
{
	$this->load->view('User/index');
}
public function matrimony()
{
	$this->load->model('User_model');
	$ArrData['matrimoni']=$this->User_model->matrimoni_fetch_model();
	$this->load->view('User/matrimony',$ArrData);
}

public function user($matrimoni_id)
{
	$this->load->model('User_model');
	$ArrData['matrimony']=$this->User_model->matrimony_fetch_model($matrimoni_id);
	$ArrData['user']=$this->User_model->user_fetch_model($matrimoni_id);
	$this->load->view('User/user',$ArrData);
}
public function register($Matrimoni_id)
{
	$this->load->model('Matrimoni_model');
	$ArrData['matrimoni']=$this->Matrimoni_model->matrimoni_id_fetch_model($Matrimoni_id);
	$this->load->view('User/register',$ArrData);
}
public function registration()
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
	$tongue=$this->input->post('tongue');
	$group=$this->input->post('blood');
	$weight=$this->input->post('weight');
	$diet=$this->input->post('diet');
	$fname=$this->input->post('fname');
	$fjob=$this->input->post('fjob');
	$mname=$this->input->post('mname');
	$mjob=$this->input->post('mjob');
	$nob=$this->input->post('nob');
	$nos=$this->input->post('nos');
	$sage=$this->input->post('sage');
	$sheight=$this->input->post('sheight');
	$sreligion=$this->input->post('sreligion');
	$scaste=$this->input->post('scaste');
	$sedu=$this->input->post('sedu');
	$religion=$this->input->post('religion');
	$caste=$this->input->post('caste');
	
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
	$result=array('user_Name'=>$name,'user_Age'=>$age,'user_Gender'=>$gender,'user_Height'=>$height,'user_Address'=>$address,'user_Number'=>$number,'user_Qualification'=>$quali,'user_Job'=>$job,'user_Family'=>$family,'Email'=>$email,'Password'=>$pass,'Pic'=>$photo,'Matrimoni_id'=>$matrimoni_id,'payment'=>'Pending','mothertongue'=>$tongue,'blood_group'=>$group,'weight'=>$weight,'diet'=>$diet,'father_name'=>$fname,'father_job'=>$fjob,'mother_name'=>$mname,'mother_Job'=>$mjob,'no_of_brothers'=>$nob,'no_of_sisters'=>$nos,'spouse_age'=>$sage,'spouse_height'=>$sheight,'spouse_religion'=>$sreligion,'spouse_caste'=>$scaste,'spouse_education'=>$sedu,'user_religion'=>$religion,'user_caste'=>$caste);
	 $this->load->model('User_model');
      $exe=$this->User_model->registration_model($result);
				
				if($exe==1)
				{
					echo"<script>alert('registration successfull')</script>";
					$this->login();
				}
				else
				{
					echo"<script>alert('failed')</script>";
					$this->register();
				}

}
}
public function login()
{
	$this->load->model('User_model');
	$ArrData['matrimoni']=$this->User_model->matrimoni_fetch_model();
   $this->load->view('User/login',$ArrData);
}
public function logout()
{
	$this->session->sess_destroy();
	return redirect('Indexcontroller/Matrimoni');
}
public function signin()
{
	$matrimoni_id=$this->input->post('matrimoni_id');
	$email=$this->input->post('Email');
	$password=$this->input->post('Password');
	$sign=array('Email'=>$email,'Password'=>$password,'Matrimoni_id'=>$matrimoni_id);
	$this->load->model('User_model');
	$res=$this->User_model->signin_model($sign);
	if($res>0)
	{
		echo"<script>alert('signin successful')</script>";
		$this->session->set_userdata('Email',$email);
		$this->user_home();
	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->login();
	}
}


public function user_home()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('User_model');
		
		$ArrData['user']=$this->User_model->user_login_fetch_model();
		foreach ($ArrData['user'] as $usr) 		
		$Matrimoni_id=$usr->Matrimoni_id;
	
		$ArrData['usr']=$this->User_model->user_matrimoni_fetch_model($Matrimoni_id);
		$this->load->view('User/home',$ArrData);
    }
    else
    {
    	$this->login();
    }
	
}
public function mymatches()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('User_model');
		$result['rec']=$this->User_model->mymatches_fetch_model();
		$result['send']=$this->User_model->mymatches_sender_fetch_model();
		
        $this->load->view('User/mymatches',$result);
	}
	else
	{
		$this->login();
	}
}
public function fullprofile($user_id)
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('User_model');
		$result['user']=$this->User_model->user_login_fetch_model();
		$result['pro']=$this->User_model->fullprofile_model($user_id);
        $this->load->view('User/fullprofile',$result);
	}
	else
	{
		$this->login();
	}
}

public function package()
{
    if($this->session->has_userdata('Email'))
    {
      //  $this->load->model('User_model');
      // $result['pay']= $this->User_model->payment_model($user_id);
       $this->load->view('User/package');
    }
    else
    {
    	$this->login();
    }
}
// public function match_found()
// {
// 	if($this->session->has_userdata('Email'))
// 	{
		
// 		$this->load->view('User/match_found');
// 	}
// 	else
// 	{
// 		$this->login();
// 	}
// }
public function myprofile()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('User_model');
		$result['pro']=$this->User_model->myprofile_model();
		$this->load->view('User/myprofile',$result);
	}
	else
	{
		$this->login();
	}
}

public function goldpayment()
{
	 if($this->session->has_userdata('Email'))
    {
	 	$this->load->model('User_model');
      	$Arrdata['user']= $this->User_model->user_login_fetch_model();
       	$this->load->view('User/goldpayment',$Arrdata);
    }
    else
    {
    	$this->login();
    }
}
public function diamondpayment()
{
	 if($this->session->has_userdata('Email'))
    {
	 	$this->load->model('User_model');
      	$Arrdata['user']= $this->User_model->user_login_fetch_model();
       	$this->load->view('User/diamondpayment',$Arrdata);
    }
    else
    {
    	$this->login();
    }
}
public function platinumpayment()
{
	 if($this->session->has_userdata('Email'))
    {
	 	$this->load->model('User_model');
      	$Arrdata['user']= $this->User_model->user_login_fetch_model();
       	$this->load->view('User/platinumpayment',$Arrdata);
    }
    else
    {
    	$this->login();
    }
}

public function pay()
{
	$uid=$this->input->post('uid');
	$mid=$this->input->post('mid');
	$email=$this->input->post('email');
    $cardname=$this->input->post('name');
    $cardno=$this->input->post('no');
	$expdate=$this->input->post('date');
	$amount=$this->input->post('amount');
	$cvv=$this->input->post('cvv');
	$cdate=date('y-m-d');
	$email=$this->input->post('email');
	$memail=$this->input->post('memail');
	$mname=$this->input->post('mname');
	$result=array('Uid'=>$uid,'Mid'=>$mid,'Card_name'=>$cardname,'Card_no'=>$cardno,'Exp_date'=>$expdate,'Cvv'=>$cvv,'Amount'=>$amount,'C_date'=>$cdate,'Email'=>$email,'matrimoni_email'=>$memail,'matrimoni_name'=>$mname);
	$this->load->model('User_model');
	$execute=$this->User_model->payment_model($result);
	if($execute)
	{
	
		$paid=array('payment'=>'paid');
        $this->load->model('User_model');
        $res=$this->User_model->paid_model($paid,$mid);
    if($res==1)
	{
		echo"<script>alert('payment succesfull')</script>";
		$this->user_home();

	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->payment();
	}

	}
	else
	{
       echo"<script>alert('failed')</script>";
       $this->payment();
	}
}


public function matches()
{

	$snd_id=$this->input->post('user_id');
	$mat_id=$this->input->post('matrimoni_id');
	$usr_email=$this->input->post('user_email');
	$rcvr_id=$this->input->post('recvr_id');
	$rcvr_matid=$this->input->post('recvr_matid');
	$rcvr_email=$this->input->post('receiver_email');
	$snd_name=$this->input->post('snd_name');
	$snd_pic=$this->input->post('snd_pic');
	$recvr_pic=$this->input->post('recvr_pic');
	$match=array('sender_userid'=>$snd_id,'sender_matid'=>$mat_id,'sender_email'=>$usr_email,'receiver_userid'=>$rcvr_id,'rceiver_matid'=>$rcvr_matid,'receiver_email'=>$rcvr_email,'sender_paymentstats'=>'paid','sender_name'=>$snd_name,'sender_pic'=>$snd_pic,'status'=>'Pending','recvr_pic'=>$recvr_pic);
	$this->load->model('User_model');
	$res=$this->User_model->matches_model($match);
	if($res>0)
	{
		echo"<script>alert('request sended')</script>";
		$this->user_home();
	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->login();
	}
}
public function request()
{
	if($this->session->has_userdata('Email'))
	{
	$this->load->model('User_model');
	$result['req']=$this->User_model->request_model();
	$this->load->view('User/request',$result);

    }
    else
    {
    	$this->login();
    }
}
public function my_request()
{
	if($this->session->has_userdata('Email'))
	{
	$this->load->model('User_model');
	$Arrdata['req']=$this->User_model->my_request_model();
	$this->load->view('User/my_request',$Arrdata);

    }
    else
    {
    	$this->login();
    }
}

public function fullprofile1($user_id)
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('User_model');
		$result['user']=$this->User_model->user_login_fetch_model();
		$result['pro']=$this->User_model->fullprofile_model($user_id);
        $this->load->view('User/fullprofile1',$result);
	}
	else
	{
		$this->login();
	}
}

public function accept_request($user_id)
{
	if($this->session->has_userdata('Email'))
	{
		$approve=array('status'=>'Approved');
        $this->load->model('User_model');
       $res= $this->User_model->acceptrequest_model($user_id,$approve);
        if($res>0)
	{
		echo"<script>alert('approved')</script>";
		$this->user_home();
	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->login();
	}
	}
	else
	{
		$this->login();
	}
}

public function reject_request($user_id)
{
	if($this->session->has_userdata('Email'))
	{
		$reject=array('status'=>'Rejected');
        $this->load->model('User_model');
       $res= $this->User_model->acceptrequest_model($user_id,$reject);
        if($res>0)
	{
		echo"<script>alert('rejected')</script>";
		$this->user_home();
	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->login();
	}
	}
	else
	{
		$this->login();
	}
}








}