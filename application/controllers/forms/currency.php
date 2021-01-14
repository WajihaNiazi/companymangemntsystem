<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('no_access','you should login at the first.');
			redirect('forms/users/login');    
		}  
	}
	public function index(){
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$data['main']='forms/currency';
		$data['title'] = "currency";
		$this->load->view('layouts/main',$data);
	}
	public function changeCurrency()
	{ 
    $amount=$_POST['currencyAmount'];
	  $currency=$_POST['currency'];
	  if($amount!=null){
		$data['result']=$amount*$currency;

	  }
	  else{
		  $data['result']=0;
	  }
	 $data['main']='forms/income';
	 $data['title'] = "Income";
	 $this->load->view('layouts/main',$data);

	}
}