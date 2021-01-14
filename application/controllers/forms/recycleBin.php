<?php
    class RecycleBin extends CI_Controller{
        public function index(){
            $user_data=$this->session->userdata('user_type');
            if($user_data == 'staff'){
                redirect('forms/users/login');   
            }
            $data['result'] = $this->department_model->get_deleted_department();
            $data['staffs'] = $this->staff_model->get_Deleted_staff();
            $data['users'] = $this->user_model->get_deleted_users();
            $data['main']='report/RecycleBin';
            $data['title'] = "Recycle Bin";
            $this->load->view('layouts/main',$data);	
        }
        
        // public function Deleted_Staff(){
		// 	$data['main']='report/staffRecycleBin';
		// 	$data['title'] = "Deleted staff";
		// 	$this->load->view('layouts/main',$data);	
        // }
        // public function deleted_users(){
        //     $user_data=$this->session->userdata('user_type');
		// 	if($user_data != 'admin'){
		// 		redirect('forms/users/login');   
		// 	}
        //     $data['main']='report/user_RecycleBin';
        //     $data['title'] = "Users Recycle Bin";
        //     $this->load->view('layouts/main',$data);	
        // }
    }
?>