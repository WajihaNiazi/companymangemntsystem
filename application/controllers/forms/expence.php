<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expence extends CI_Controller {
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
		$data['title'] = "Expense";
		$data['main']='forms/expence';
		$this->load->view('layouts/main',$data);
    }
    
	public function insert()
	{
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$expenceDate= $this->input->post('date');
		$year=substr($expenceDate,0,4);
		$month=substr($expenceDate,5,2);
		$day=substr($expenceDate,8,2);
		$this->expence_model->insert_expence([
			'fullName' => $this->input->post('fullName'),
			'description' => $this->input->post('description'),
			'amount' => $this->input->post('amount'),
			'year'=>$year,
			'month'=>$month,
			'day'=>$day
		]);
		redirect('forms/expence');
	}

	public function expence_report(){
		$user_data=$this->session->userdata('user_type');
		if($user_data == 'staff'){
			redirect('forms/users/login');   
		}
		$data['result']=$this->expence_model->show_expences();
		$data['outcomes']=$this->outcome_model->show_outcomes();
		$data['incomes']=$this->income_model->show_incomes();

		$data['title'] = "Expense Report";
		$data['main']="report/expence";
		$this->load->view('layouts/main',$data);
	}


	//delete incomes....
	public function delete(){
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$id=$_GET['id'];
		$this->expence_model->delete_expence($id);
		redirect('forms/expence/expence_report');
	}

	//update incomes....
	public function edit($id){
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$this->form_validation->set_rules('fullName','fullName','trim|required');
		if($this->form_validation->run()==False){
			$data['expence']=$this->expence_model->get_expence_info($id);
			$data['title'] = "Expense_update";
			$data['main']='forms/update_expence';
			$this->load->view('layouts/main',$data);
		}else{
			$new_data=array(
				'fullName'=>$this->input->post('fullName'),
				'description'=>$this->input->post('description'),
				'amount'=>$this->input->post('amount'),
				'expenceDate'=>$this->input->post('date')
	
			);
			if($this->expence_model->edit_expence($id,$new_data)){
			redirect('forms/expence/expence_report');
			}
		}	
	}

	public function search(){
		$data['incomes']= $this->income_model->searchData();
		$data['outcomes']= $this->income_model->searchOutcomes();
		$data['result']= $this->income_model->searchExpence();
		
		$data['main']="report/expence";
		$data['title'] = "expenses Report";
		$this->load->view('layouts/main',$data);
   }

	
}
    