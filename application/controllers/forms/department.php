<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
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
            $data['main']='forms/department';
            $data['title'] = "Departement";
            $this->load->view('layouts/main',$data);
        }
        public function ShowAllDepartment(){
            $user_data=$this->session->userdata('user_type');
            if($user_data == 'staff'){
                redirect('forms/users/login');   
            }
            $data['result'] = $this->department_model->get_department();
            $data['main']='report/report_department';
            $data['title'] = "All Department";
            $this->load->view('layouts/main',$data);	
        }
        public function create()
        {
            $user_data=$this->session->userdata('user_type');
            if($user_data != 'admin'){
                redirect('forms/users/login');   
            }
            $this->form_validation->set_rules('dp_name','dp_name','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
                if($this->form_validation->run() == FALSE){
                    $data['title'] = "Department";
                    $data['main']='forms/department';
                    $this->load->view('layouts/main',$data);
                }else{
                    if($this->department_model->create_department()){
                        redirect('forms/department/ShowAllDepartment');
                    }else{
                        $data['main']='forms/department';
                        $this->load->view('layouts/main',$data); 
                    }
                }
        }
        public function update($dp_id){
            $user_data=$this->session->userdata('user_type');
            if($user_data != 'admin'){
                redirect('forms/users/login');   
            }
            $this->form_validation->set_rules('dp_name','dp_name','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            if($this->form_validation->run() == FALSE){
                $data['department_data'] = $this->department_model->get_department_info($dp_id);
                $data['title'] = "Update Department";
                $data['main']='forms/update_department';
                    $this->load->view('layouts/main',$data);
            }else{
                    $data = array(
                        'dp_name' => $this->input->post('dp_name',true),
                    );
                    if($this->department_model->update_department($dp_id,$data)){
						redirect('forms/department/ShowAllDepartment'); 
                   }else{
						echo "fail";
					} 
            }   
        }
        public function delete($dpID)
        {
            $user_data=$this->session->userdata('user_type');
            if($user_data != 'admin'){
                redirect('forms/users/login');   
            }
                $this->department_model->delete_department($dpID);
                $this->session->set_flashdata('delete','has been deleted!');
				redirect('forms/department/ShowAllDepartment');
        } 
        public function undo($dpID)
        {
            $user_data=$this->session->userdata('user_type');
            if($user_data != 'admin'){
                redirect('forms/users/login');   
            }
                $this->department_model->undo_department($dpID);
                $this->session->set_flashdata('delete','has been restored!');
				redirect('forms/department/ShowAllDepartment');
        }   
    }   
?>