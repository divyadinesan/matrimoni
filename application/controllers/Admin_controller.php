<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller 
{

public function login()
{
   $this->load->view('Admin/login');
   echo "divya";
}
public function signin()
{
	$email=$this->input->post('Email');
	$password=$this->input->post('Password');
	$result=array('Email'=>$email,'Password'=>$password);
	$this->load->model('Admin_model');
	$res=$this->Admin_model->login_model($result);
	if($res==1)
	{
		echo"<script>alert('login successful')</script>";
		$this->session->set_userdata('Email',$email);
		$this->change_pass();
	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->login();
	}

}

// public function home()
// {
// 	if($this->session->has_userdata('Email'))
// 	{
// 	$this->load->view('Admin/home');
//     }
//     else
//     {
//     	$this->login();
//     }
// }

public function verify_matrimoni()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Admin_model');
		$result['ver']=$this->Admin_model->verify_model();
		$this->load->view('Admin/verify_matrimoni',$result);

	}
	else
	{
		$this->login();
	}
}
public function user_details()
{
	if($this->session->has_userdata('Email'))
	{
	    $this->load->model('Admin_model');
		$result['use']=$this->Admin_model->Userdetails_model();
		$this->load->view('Admin/user_details',$result);
	}
	else
	{
		$this->login();
	}
}
public function approvemat($id)
{
	$appmat=array('matrimony_status'=>'Approve');
  $this->load->model('Admin_model');
  $result=$this->Admin_model->approvemat_model($id,$appmat);
  if($result==1)
	{
		echo"<script>alert('Approved')</script>";
		$this->verify_matrimoni();

	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->verify_matrimoni();
	}
}
public function rejectmat($id)
{
	$this->load->model('Admin_model');
	$result=$this->Admin_model->rejectmat_model($id);
     if($result==1)
	{
		echo"<script>alert('Rejected')</script>";
		$this->verify_matrimoni();

	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->verify_matrimoni();
	}
}
public function add_matrimoni()
{
	if($this->session->has_userdata('Email'))
	{
	   $this->load->view('Admin/add_matrimoni');
	}
	else
	{
		$this->login();
	}

}
public function adding_mat()
{
	$name=$this->input->post('name');
	$address=$this->input->post('address');
	$country=$this->input->post('country');
	$num=$this->input->post('no');
	$email=$this->input->post('email');
	$pass=$this->input->post('pass');
	$exep=$this->input->post('exp');

$image=$_FILES['mtrimny_image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Assets/Matrimoni/product/';
			$config['allowed_types']= 'jpg|png|jpeg';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if( $this->upload->do_upload('mtrimny_image'))
			{
	$result=array('Name'=>$name,'Address'=>$address,'Country'=>$country,'Number'=>$num,'Mat_email'=>$email,'Password'=>$pass,'experience'=>$exep,'image'=>$photo,'martimoni_type'=>'Admin','matrimony_status'=>'approved');
	 $this->load->model('Matrimoni_model');
                $exe=$this->Matrimoni_model->registration_model($result);
				
				if($exe==1)
				{
					echo"<script>alert('Success!!')</script>";
					$this->add_matrimoni();
				}
				else
				{
					echo"<script>alert('Failed!! Please Try Again..')</script>";
					$this->add_matrimoni();
				}

}
}
public function change_pass()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Admin_model');
		$result['change']=$this->Admin_model->changepass_model();
		$this->load->view('Admin/changepass',$result);
	}
	else
	{
		$this->login();
	}
}
public function passupdate()
{
	$password=$this->input->post('password');
	$update=array('Password'=>$password,);
	$this->load->model('Admin_model');
	$result=$this->Admin_model->passupdate_model($update);
	if($result==1)
	{
		echo"<script>alert('updated')</script>";
		$this->login();

	}
	else
	{
		echo"<script>alert('failed')</script>";
		$this->changepass();
	}

}
public function logout()
{
	$this->session->sess_destroy();
	return redirect('Indexcontroller/Matrimoni');
}

public function about()
{
	$this->load->view('Index/about');
}
public function contact()
{
	$this->load->view('Index/contact');
}

public function payment_details()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Admin_model');
		$result['use']=$this->Admin_model->paymentdetails_model();
        $this->load->view('Admin/payment_details',$result);
	}
	else
	{
		$this->login();
	}
	
}
public function manage_matrimoni()
{
	if($this->session->has_userdata('Email'))
	{
		 $this->load->model('Admin_model');
		 $result['ver']=$this->Admin_model->manage_model();
		 $result['mat']=$this->Admin_model->managemat_model();
         $this->load->view('Admin/manage_matrimoni',$result);
	}
	else
	{
		$this->login();
	}
}






}