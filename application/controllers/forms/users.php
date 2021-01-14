<?php
    class Users extends CI_Controller{
        public function admin()
        {
            $data['main']="admin_view";
            $data['title'] = " Home Page ";
            $this->load->view('layouts/main',$data);
        }
        public function login_view()
        {
            $data['title'] = "Login";
            $data['main']='forms/login_view';
            $this->load->view('forms/login_view',$data); 
        }
        public function login()
        {
            $this->form_validation->set_rules('username','UserName','trim|required|min_length[3]|htmlspecialchars');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[3]|htmlspecialchars');
            if($this->form_validation->run() == FALSE){
                $data = array(
                    'errors' => validation_errors()
                );
                $this->session->set_flashdata($data);
                redirect('forms/users/login_view');
            }else{
               $username= $this->input->post('username',true);
               $password= $this->input->post('password',true);
               $user_id =  $this->user_model->login_user($username,$password);
               if($user_id){
                   $user_data = array(
                       'user_id'=>$user_id->idusers,
                       'username'=>$username,
                       'photo'=>$user_id->photo,
                       'user_type'=>$user_id->type,
                       'logged_in'=>TRUE
                   );
                   $this->session->set_userdata($user_data);
                   $this->session->set_flashdata('login_success','Welcome to App');
                   redirect('home/index');
               }else{
                    $this->session->set_flashdata('login_filed','sorry you are not logged in the username or password is wrong');
                    redirect('forms/users/login_view');
               }
            }
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('forms/users/login_view');
        }
        public function index(){
            $user_data=$this->session->userdata('user_type');
			if($user_data != 'admin'){
				redirect('forms/users/login');   
			}
            $data['result'] = $this->user_model->get_users();
            $data['main']='report/user_view';
            $data['title'] = "All Users";
            $this->load->view('layouts/main',$data);	
        }
        public function register(){
            $this->form_validation->set_rules('FirstName','firstname','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('lastName','lastname','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('userName','usename','trim|required|min_length[3]|is_unique[users.userName]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('password','password','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('ConfirmPassword','confirmpassword','trim|required|min_length[3]|matches[password]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('email','email','trim|required|min_length[3]|is_unique[users.email]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('type','type','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            if($this->form_validation->run() == FALSE){
                $data['title'] = "Register";
                $data['main']='forms/register';
                $this->load->view('layouts/main',$data);
            }else{
                if($this->user_model->create_user()){
                    $data['main']='forms/login_view';
                    $this->load->view('layouts/main',$data);
                }else{
                    $data['main']='forms/register';
                    $this->load->view('layouts/main',$data); 
                }
            }
        }
        public function update($user_id){
            $this->form_validation->set_rules('FirstName','firstname','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('lastName','lastname','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('userName','usename','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('type','type','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('password','password','trim|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('ConfirmPassword','confirmpassword','trim|min_length[3]|matches[password]|htmlspecialchars|encode_php_tags');
            if($this->form_validation->run() == FALSE){
                $data['user_data'] = $this->user_model->get_user_info($user_id);
                $data['title'] = "Update users";
                $data['main']='forms/update_user';
                    $this->load->view('layouts/main',$data);
            }else{
				$old_photo=$this->input->post('old_photo');
                $binod=array(
                    'upload_path'=>'./profile_img',
                    'allowed_types'=>'jpg|png|jpeg',
                    'encrypt_name'=>true,
                    'max_size'=>8000
                );
				$this->upload->initialize($binod);
                if (!$this->upload->do_upload('propic')) {
                    // echo $this->upload->display_errors();
                    $fn=$old_photo;
                }else{
                    $fd=$this->upload->data();
                    $fn=$fd['file_name'];
                }
                $old_Pass= $this->input->post('oldpass',true);
                $password = $this->input->post('password',true);

                if($password == 'pass'){
                    $password = $old_Pass;

                }else{
                    $opctions = ['cost'=>12];
                    $encripted_pass = password_hash($this->input->post('password',true),PASSWORD_BCRYPT,$opctions);
                    $password=$encripted_pass;
                };
                $data = array(
                    'FirstName' => $this->input->post('FirstName',true),
                    'lastName' => $this->input->post('lastName',true),
                    'userName' => $this->input->post('userName',true),
                    'email' => $this->input->post('email',true),
                    'password' =>$password,
                    'type' => $this->input->post('type',true),
                    'photo'=>$fn
                );
                if($this->user_model->update_users($user_id,$data)){
                    $user_data = array(
                        'username'=>$data['userName'],
                        'photo'=>$data['photo'],
                        'user_type'=>$data['type'],
                        'logged_in'=>TRUE
                    );
                    $this->session->set_userdata($user_data);
                     redirect('home/index'); 
                } 
            }   
        }
        public function delete($userID)
        {
            $this->user_model->delete_user($userID);
            $this->session->set_flashdata('delete','has been deleted!');
            redirect('forms/users/index');
        }
        public function changepassword($user_id)
        {
            $this->form_validation->set_rules('oldpassword','oldpassword','trim|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('newpassword','newpasswordconfirmpassword','trim|min_length[3]|htmlspecialchars|encode_php_tags');
            if($this->form_validation->run() == FALSE){
                $data['user_data'] = $this->user_model->get_user_info($user_id);
                $data['title'] = "Change Password";
                $data['main']='forms/changepassword';
                $this->load->view('layouts/main',$data);
            }else{
                $old_Pass= $this->input->post('oldpassword',true);
                
                $oldpassword=$this->user_model->verifypassword($user_id,$old_Pass);
                if($old_Pass == $oldpassword){
                $opctions = ['cost'=>12];
                $encripted_pass = password_hash($this->input->post('newpassword',true),PASSWORD_BCRYPT,$opctions);
                $data = array(
                    'password' =>$encripted_pass
                );
                if($this->user_model->update_password($user_id,$data)){
                    redirect('forms/users/login'); 
                }
                }else{
                    echo "password is worng!!";
                } 
            }   
        }
        public function undo_users($userID)
        {
            $this->user_model->undo_user($userID);
            $this->session->set_flashdata('delete','has been restored!');
            redirect('forms/users/index');
        }
        public function deleted($userID)
        {
            $this->user_model->deleted_user($userID);
            $this->session->set_flashdata('delete','has been deleted!');
            redirect('forms/users/index');
        }
        public function display_doforget()
        {
            $data['main']='forms/forgotpassword';
            $data['title'] = "Reset password ";
            $this->load->view('layouts/main',$data);
        }
        public function resetlink()
        {
            // $config = [
                //         'useragent' => 'CodeIgniter',
                //         'protocol'  => 'smtp',
                //         'mailpath'  => '/usr/sbin/sendmail',
                        
                //         // 'smtp_host' => 'ssl://'.$mail->smtp_host,
                //         // 'smtp_user' => $mail->smtp_user,
                //         // 'smtp_pass' => $mail->smtp_password,   
                //         // 'smtp_port' => $mail->smtp_port,
                        
                //         'smtp_host' => 'smtp.mailtrap.io',
                //         'smtp_user' => '047b67b78ee8cd',
                //         'smtp_pass' => '4950e0e467f680',   
                //         'smtp_port' => '2525',
        
                //         'smtp_keepalive' => TRUE,
                //         'smtp_crypto' => 'SSL',
                //         'wordwrap'  => TRUE,
                //         'wrapchars' => 80,
                //         'mailtype'  => 'html',
                //         'charset'   => 'utf-8',
                //         'validate'  => TRUE,
                //         'crlf'      => "\r\n",
                //         'newline'   => "\r\n",
                //     ];
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '25';
            // $config['smtp_timeout'] = '3600';
            // $config['smtp_user'] = 'atefa.abedi5@gmail.com';
            $config['smtp_user'] = 'wajiehaniazi204@gmail.com';
            // $config['smtp_pass'] = '0791583624';
            $config['smtp_pass'] = 'famliy417';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['mailtype'] = "html";
            $config['validation'] = true;
            $this->email->initialize($config);
            $this->email->set_mailtype('html');
            $email=$this->input->post('email');
            $result=$this->db->query("SELECT * FROM `users` where `email` = '".$email."'")->result_array();
            if(count($result)>0){
                $this->email->from('wajiehaniazi204@gmail.com','Admin');
                $this->email->to($email);
                $this->email->subject('reset password');
                // $this->email->message(base_url()."forms/users/updatepass");
                $this->email->message("tttttttttttttttt");
                $this->email->send();
                echo "ssssssssssssss";
                die();
            }else{
                echo "login incorrect";
            }



            // if(count($result)>0){
            //     $tokan= rand(1000,9999);
            //     $this->db->query("UPDATE `users` SET `password`= '".$tokan."' WHERE `email`= '".$email."'");
            //     $message="plase click on password reset link <br> <a href='".base_url()."forms/users/reset?tokan=".$tokan."'>Reset Link</a>";
            //     $this->Email($email,'reset password link',$message);
            // }
            // else{
            //     $this->session->set_flashdata('massage',"Email not registered");
            //     redirect('forms/users/display_doforget');
            // }
        }
        public function reset()
        {
            // $tokan= $this->input->get('tokan');
            // $_SESSION['tokan']=$data['tokan'];
            // $data['main']='forms/resetpassword';
            // $data['title'] = "Reset password ";
            // $this->load->view('layouts/main',$data);
        }
        public function updatepass()
        {
            $this->form_validation->set_rules('password','password','trim|required|min_length[3]|htmlspecialchars|encode_php_tags');
            $this->form_validation->set_rules('ConfirmPassword','confirmpassword','trim|required|min_length[3]|matches[password]|htmlspecialchars|encode_php_tags');
             
            if($this->form_validation->run() == FALSE){
                $data['title'] = "Update password";
                $data['main']='forms/resetpassword';
                $this->load->view('layouts/main',$data);
            }else{
                $opctions = ['cost'=>12];
                $encripted_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$opctions);
                $email=$this->input->post('email');
                $data = array(
                    'password' =>$encripted_pass,
                );
               $this->db->query("UPDATE `users` SET `password`= '".$data['password']."' WHERE `email`= '".$email."'"); 
               redirect('forms/users/login');  
            } 
            // $_SESSION['tokan'];
            // if($data['password']==$data['ConfirmPassword']){
            //    $this->db->query("UPDATE `users` SET `password`= '".$data['password']."' WHERE `password`= '".$_SESSION['tokan']."'"); 
            // }  
        }
            
        // public function email()
        // {
        //     $config = [
        //         'useragent' => 'CodeIgniter',
        //         'protocol'  => 'smtp',
        //         // 'mailpath'  => '/usr/sbin/sendmail',
        //         // 'smtp_host' => 'ssl://'.$mail->smtp_host,
        //         // 'smtp_user' => $mail->smtp_user,
        //         // 'smtp_pass' => $mail->smtp_password,   
        //         // 'smtp_port' => $mail->smtp_port,
        //         'smtp_host' => 'smtp.mailtrap.io',
        //         'smtp_user' => 'atefa.abedi5@gmail.com',
        //         'smtp_pass' => '0791583624',   
        //         'smtp_port' => '2525',
        //         'smtp_keepalive' => TRUE,
        //         'smtp_crypto' => 'SSL',
        //         'wordwrap'  => TRUE,
        //         'wrapchars' => 80,
        //         'mailtype'  => 'html',
        //         'charset'   => 'utf-8',
        //         'validate'  => TRUE,
        //         'crlf'      => "\r\n",
        //         'newline'   => "\r\n",
        //     ];
        //     $this->email->initialize($config);
        //     $this->email->set_mailtype('html');
        //     $email=$this->input->post('email');
        //     $emails=$this->user_model->get_mail();
        //      $this->load->library('email');
        //      foreach($emails as $row){
        //          if($row['email']){
        //             $this->email->from('atefa.abedi5@gmail.com',"Hi Dear");
        //             $this->email->to($row['email']);
        //              $this->email->subject('hi daer');
        //             //  $this->email->to('aghida55@gmail.com');
        //             $this->email->message('TTTTTTTTTT');
        //             $this->email->send();
        //             $this->email->clear();
        //              if($this->email->send()){
                    
        //             echo "YYYYYYYYyyy";
        //              }else{
        //                  echo "NNNNNNNNNNN";
        //              };
                     
        //          }
        //      }

        // }
    } 
?> 