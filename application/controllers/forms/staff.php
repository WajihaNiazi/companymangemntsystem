<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
		public function __construct(){
			parent::__construct();
			if(!$this->session->userdata('logged_in')) {
				$this->session->set_flashdata('no_access','you should login at the first.');
				redirect('forms/users/login_view');    
			}  
		}
		public function index(){
			$user_data=$this->session->userdata('user_type');
				if($user_data != 'admin'){
					redirect('forms/users/login');   
				}
			$data['result'] = $this->staff_model->get_department();
			$data['main']='forms/staff';
			$data['title'] = "Staff";
			$this->load->view('layouts/main',$data);
		}
		public function ShowAllStaff(){
			$user_data=$this->session->userdata('user_type');
				if($user_data == 'staff'){
					redirect('forms/users/login');   
				}
			$data['result'] = $this->staff_model->get_staff();
			$data['main']='report/report_staff';
			$data['title'] = "All Report";
			$this->load->view('layouts/main',$data);	
		}
		public function create()
		{
			$user_data=$this->session->userdata('user_type');
				if($user_data != 'admin'){
					redirect('forms/users/login');   
				}
			$this->form_validation->set_rules('FirstName','firstname','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('LastName','lastname','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('FatherName','FatherName','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('salary','salary','|required|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('position','position','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('ssn','ssn','required|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('department','department','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('city','city','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('district','district','required|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('address','address','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('date_of_brith','date_of_brith','required|htmlspecialchars|encode_php_tags');
			
				if($this->form_validation->run() == FALSE){
					$data['title'] = "Staff Registertion";
					$data['main']='forms/staff';
					$data['result'] = $this->staff_model->get_department();
					$this->load->view('layouts/main',$data);
				}else{
					$binod=array(
						'upload_path'=>FCPATH.'./staff_photo',
						'allowed_types'=>'jpg|png|jpeg',
						'encrypt_name'=>true,
						'max_size'=>8000
					);
					$this->upload->initialize($binod);
					$this->upload->do_upload('photo');
					$fd=$this->upload->data();
					$fn=$fd['file_name'];
					$binod=array(
						'upload_path'=>FCPATH.'./staff_nationalcards',
						'allowed_types'=>'jpg|png|jpeg',
						'encrypt_name'=>true,
						'max_size'=>8000
					);
					$this->upload->initialize($binod);
					$this->upload->do_upload('tazcareh');
					$tazcarehdate=$this->upload->data();
					$tazcareh=$tazcarehdate['file_name'];
						$data = array(
							'FirstName' => $this->input->post('FirstName',true),
							'LastName' => $this->input->post('LastName',true),
							'FatherName' => $this->input->post('FatherName',true),
							'salary' => $this->input->post('salary',true),
							'position' => $this->input->post('position',true),
							'ssn' => $this->input->post('ssn',true),
							'tazcareh'=>$tazcareh,
							'dp_id'=>$this->input->post('department',true),
							'phone'=>$this->input->post('phone',true),
							'city'=>$this->input->post('city',true),
							'district'=>$this->input->post('district',true),
							'address'=>$this->input->post('address',true),
							'date_of_brith'=>$this->input->post('date_of_brith',true),
							'photo'=>$fn

						);
						if($this->staff_model->create_staff($data)){
							redirect('forms/staff/ShowAllStaff');
						}else{
							$data['main']='forms/staff/create';
							$this->load->view('layouts/main',$data); 
						}
				}
		}
        public function update($staff_id){
			$user_data=$this->session->userdata('user_type');
			if($user_data != 'admin'){
				redirect('forms/users/login');   
			}
			$this->form_validation->set_rules('FirstName','firstname','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('LastName','lastname','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('FatherName','FatherName','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('salary','salary','htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('position','position','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('ssn','ssn','required|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('department','department','trim|required|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('city','city','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('district','district','required|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('address','address','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
			$this->form_validation->set_rules('date_of_brith','date_of_brith','required|htmlspecialchars|encode_php_tags');;
            if($this->form_validation->run() == FALSE){
				$data['dp_id']=$this->staff_model->get_staff_dp_id($staff_id);
				$data['dp_name']=$this->staff_model->get_staff_dp_name($data['dp_id']);
				$data['staff_data'] = $this->staff_model->get_staff_info($staff_id);
				$data['result'] = $this->staff_model->get_department();
                $data['title'] = "Update staff";
                $data['main']='forms/update_staff';
                $this->load->view('layouts/main',$data);
            }else{		
				$old_photo=$this->input->post('old_photo');
				$binod=array(
                    'upload_path'=>FCPATH.'./staff_photo',
                    'allowed_types'=>'jpg|png|jpeg',
                    'encrypt_name'=>true,
                    'max_size'=>8000
				);
				$this->upload->initialize($binod);
				if(!$this->upload->do_upload('photo')){
					$upload_photo=$old_photo;
				}else{
					$fd=$this->upload->data();
					$upload_photo=$fd['file_name'];
				}

				$old_tazcareh=$this->input->post('old_tazcareh');
				$binod=array(
                    'upload_path'=>FCPATH.'./staff_nationalcards',
                    'allowed_types'=>'jpg|png|jpeg',
                    'encrypt_name'=>true,
                    'max_size'=>8000
				);
				$this->upload->initialize($binod);
                if(!$this->upload->do_upload('tazcareh')){
					$tazcareh=$old_tazcareh;
				}else{
					$tazcarehdate=$this->upload->data();
					$tazcareh=$tazcarehdate['file_name'];
				}
            	$data = array(
					'FirstName' => $this->input->post('FirstName',true),
					'LastName' => $this->input->post('LastName',true),
					'FatherName' => $this->input->post('FatherName',true),
					'salary' => $this->input->post('salary',true),
					'position' => $this->input->post('position',true),
					'ssn' => $this->input->post('ssn',true),
					'tazcareh'=>$tazcareh,
					'dp_id'=>$this->input->post('department',true),
					'phone'=>$this->input->post('phone',true),
					'city'=>$this->input->post('city',true),
					'district'=>$this->input->post('district',true),
					'address'=>$this->input->post('address',true),
					'date_of_brith'=>$this->input->post('date_of_brith',true),
					'photo'=>$upload_photo
				);
                if($this->staff_model->update_staff($staff_id,$data)){
					redirect('forms/staff/ShowAllStaff'); 
                }else{
					echo "fail";
				} 
            }   
        }
        public function delete($staffID)
        {
			$user_data=$this->session->userdata('user_type');
			if($user_data != 'admin'){
				redirect('forms/users/login');   
			}
            $this->staff_model->delete_staff($staffID);
            $this->session->set_flashdata('delete','has been deleted!');
			redirect('forms/staff/ShowAllStaff');
		}
		public function undo_staffs($staffID)
        {
			$user_data=$this->session->userdata('user_type');
			if($user_data != 'admin'){
				redirect('forms/users/login');   
			}
            $this->staff_model->undo_staff($staffID);
            $this->session->set_flashdata('delete','has been restored!');
			redirect('forms/staff/ShowAllStaff');
		}
		public function deleted_staffs($staffID)
        {
			$user_data=$this->session->userdata('user_type');
			if($user_data != 'admin'){
				redirect('forms/users/login');   
			}
            $this->staff_model->deleted_staff($staffID);
            $this->session->set_flashdata('delete','has been restored!');
			redirect('forms/staff/ShowAllStaff');
		}
		public function view_staff($staff_id)
		{
			$user_data=$this->session->userdata('user_type');
			if($user_data == 'staff'){
				redirect('forms/users/login');   
			}
			$data['staff_data'] = $this->staff_model->get_staff_info($staff_id);
			$data['dp_id']=$this->staff_model->get_staff_dp_id($staff_id);
			$data['dp_name']=$this->staff_model->get_staff_dp_name($data['dp_id']);
			$data['main']='report/staff_detail';
			$data['title'] = "Staff Detail";
			$this->load->view('layouts/main',$data);
		}
}