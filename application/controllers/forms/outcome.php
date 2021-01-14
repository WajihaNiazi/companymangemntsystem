<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outcome extends CI_Controller {
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
			$data['title'] = "Outcome";
			$data['main']='forms/outcome';
			$this->load->view('layouts/main',$data);
		}
		public function insert()
	    {
			$user_data=$this->session->userdata('user_type');
			if($user_data != 'admin'){
				redirect('forms/users/login');   
			}
			$outcomeDate= $this->input->post('date');
			$year=substr($outcomeDate,0,4);
			$month=substr($outcomeDate,5,2);
			$day=substr($outcomeDate,8,2);

		$this->outcome_model->insert_outcome([
			'description' => $this->input->post('description'),
			'outcomeAmount' => $this->input->post('amount'),
			'outcomeDate'=> $this->input->post('date'),
			'year'=>$year,
			'month'=>$month,
			'day'=>$day
		]);
		redirect('forms/outcome');
	    }

	   public function outcome_report(){
		$user_data=$this->session->userdata('user_type');
		if($user_data == 'staff'){
			redirect('forms/users/login');   
		}
		$data['result']=$this->outcome_model->show_outcomes();
		$data['incomes']=$this->income_model->show_incomes();
		$data['expences']=$this->expence_model->show_expences();
		$data['title'] = "Outcome";
		$data['main']="report/outcome";
		$this->load->view('layouts/main',$data);
	   }
		//delete outcomes....
		public function delete($id){
			$user_data=$this->session->userdata('user_type');
			if($user_data != 'admin'){
				redirect('forms/users/login');   
			}
			$this->outcome_model->delete_outcome($id);
			redirect('forms/outcome/outcome_report');
		}

			//update outcome....
		public function edit($id){
			$user_data=$this->session->userdata('user_type');
			if($user_data != 'admin'){
				redirect('forms/users/login');   
			}
			$this->form_validation->set_rules('description','description','trim|required');
			if($this->form_validation->run()==False){
				$data['outcome']=$this->outcome_model->get_outcome_info($id);
				$data['main']='forms/update_outcome';
				$data['title'] = "Outcome Update";
				$this->load->view('layouts/main',$data);
			}else{
				$new_data=array(
					'description'=>$this->input->post('description'),
					'outcomeAmount'=>$this->input->post('amount'),
					'outcomeDate'=>$this->input->post('date')
		
				);
				if($this->outcome_model->edit_outcome($id,$new_data)){
				redirect('forms/outcome/outcome_report');
				}
			}	
		}
	   public function search(){
			$data['title'] = "Outcome Report";
			$data['result']= $this->outcome_model->searchData();
			$data['incomes']= $this->outcome_model->searchIncomes();
		    $data['expences']= $this->income_model->searchExpence();

			$data['main']="report/outcome";
			$this->load->view('layouts/main',$data);
	   }  
}