<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexcontroller extends CI_Controller 
{

public function Matrimoni()
{
	$this->load->model('Index_model');
	$arrdata['matrimoni']=$this->Index_model->matrimoni();
	$this->load->view('Index/index',$arrdata);
}






}
