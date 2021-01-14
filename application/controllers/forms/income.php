<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Income extends CI_Controller {
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
		$data['title'] = "Income";
		$data['main']='forms/income';
		$this->load->view('layouts/main',$data);
	}
	public function insert()
	{
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$incomeDate= $this->input->post('date');
		$year=substr($incomeDate,0,4);
		$month=substr($incomeDate,5,2);
		$day=substr($incomeDate,8,2);
		$this->income_model->insert_income([
			'fullName' => $this->input->post('fullName'),
			'description' => $this->input->post('description'),
			'amount' => $this->input->post('amount'),
			'year'=>$year,
			'month'=>$month,
			'day'=>$day
		]);
		redirect('forms/income');
	}

	public function income_report(){
		$user_data=$this->session->userdata('user_type');
		if($user_data == 'staff'){
			redirect('forms/users/login');   
		}
		$data['result']=$this->income_model->show_incomes();
		$data['outcomes']=$this->outcome_model->show_outcomes();
		$data['expences']=$this->expence_model->show_expences();
		$data['title'] = "Income Report";
		$data['main']="report/income";
		$this->load->view('layouts/main',$data);
	}


	//delete incomes....
	public function delete(){
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$id=$_GET['id'];
		$this->income_model->delete_income($id);
		redirect('forms/income/income_report');
	}

	//update incomes....
	public function edit($id){
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$this->form_validation->set_rules('fullName','fullName','trim|required');
		if($this->form_validation->run()==False){
			$data['income']=$this->income_model->get_income_info($id);
			$data['title'] = "Incoem_update";
			$data['main']='forms/update_income';
			$this->load->view('layouts/main',$data);
		}else{
			$new_data=array(
				'fullName'=>$this->input->post('fullName'),
				'description'=>$this->input->post('description'),
				'amount'=>$this->input->post('amount'),
				'incomeDate'=>$this->input->post('date')
	
			);
			if($this->income_model->edit_income($id,$new_data)){
			redirect('forms/income/income_report');
			}
		}	
	}
	public function search(){

		$data['result']= $this->income_model->searchData();
		$data['outcomes']= $this->income_model->searchOutcomes();
		$data['expences']= $this->income_model->searchExpence();
		$data['main']="report/income";
		$data['title'] = "Income Report";
		$this->load->view('layouts/main',$data);
   }

	
}
    