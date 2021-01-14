<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {
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
		$data['main']='forms/items';
		$data['title'] = "Items";
		$this->load->view('layouts/main',$data);
	}
	public function item_table(){
		$user_data=$this->session->userdata('user_type');
		if($user_data == 'staff'){
			redirect('forms/users/login');   
		}
		$data['items'] = $this->item_model->get_item();
		$data['title'] = "Items Report";
		$data['main'] = 'report/item_table';
		$this->load->view('layouts/main',$data);
	}
	public function record_items() {
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}	
		$this->form_validation->set_rules('itemName', 'Item Name', 'trim|required|htmlspecialchars|encode_php_tags');
		$this->form_validation->set_rules('price', 'Price', 'trim|required|htmlspecialchars|encode_php_tags');
		$this->form_validation->set_rules('itemDate', 'Item Date', 'trim|required|htmlspecialchars|encode_php_tags');
		$this->form_validation->set_rules('itemquantity', 'Item Quantity', 'trim|required|htmlspecialchars|encode_php_tags');
		if($this->form_validation->run() == FALSE) {		
		$data['main'] = 'forms/items';
		$this->load->view('layouts/main', $data);
		}else{
			if($this->item_model->create_item()) {
				$this->session->set_flashdata('Items recorded', 'item has been recorded');
				redirect('forms/items/item_table');

			} 	
		}
	}
	public function edit($items_id) {
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$this->form_validation->set_rules('itemName', 'Item Name', 'trim|htmlspecialchars|encode_php_tags');
		$this->form_validation->set_rules('price', 'Price', 'trim|htmlspecialchars|encode_php_tags');
		$this->form_validation->set_rules('itemDate', 'Item Date', 'trim|htmlspecialchars|encode_php_tags');
		$this->form_validation->set_rules('itemquantity', 'Item Quantity', 'trim|htmlspecialchars|encode_php_tags');
		if($this->form_validation->run() == FALSE) {
			$data['items'] = $this->item_model->get_projects_info($items_id);
			$data['title'] = "Items Update";
			$data['main'] = 'forms/update_items';
			$this->load->view('layouts/main', $data);
		} else {
			$data = array(
				'itemName' => $this->input->post('itemName',true),
				'price' => $this->input->post('price',true),
				'itemDate' => $this->input->post('itemDate',true),
				'itemquantity' => $this->input->post('itemquantity',true)
				
				);
			if($this->item_model->edit_items($items_id, $data)) {
				$this->session->set_flashdata('items_updated', 'Your Project has been updated');
				redirect('forms/items/item_table');
			}
		}
	}
	public function delete($iditems) {
		$user_data=$this->session->userdata('user_type');
		if($user_data != 'admin'){
			redirect('forms/users/login');   
		}
		$this->item_model->delete_items($iditems);
		$this->session->set_flashdata('items_deleted', 'Your Project has been deleted');
		redirect('forms/items/item_table');
	}
}