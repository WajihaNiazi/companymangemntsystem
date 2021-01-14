<?php
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if(!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('no_access','you should login at the first.');
                redirect('forms/users/login');    
            }  
        } 
        public function index(){
            $data['main']='home_view';
            $data['title'] = "HomePage";
            $this->load->view('layouts/main',$data);
        }
    }
?>