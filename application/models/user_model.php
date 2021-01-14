<?php
    class User_model extends CI_Model{
        public function login_user($username,$password){
            $this->db->where([
                'username'=>$username,
                'status'=>1
            ]);
            $result = $this->db->get('users');
            if(password_verify($password,$result->row(2)->password)){
                return $result->row();
            }else{
                return FALSE;
            }
        }
        public function get_users(){
            $this->db->where('status',1);
            $query =$this->db->get('users');
            return $query->result();
        }
        public function create_user(){
            $opctions = ['cost'=>12];
            $encripted_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$opctions);
            $data = array(
                'FirstName' => $this->input->post('FirstName',true),
                'lastName' => $this->input->post('lastName',true),
                'userName' => $this->input->post('userName',true),
                'email' => $this->input->post('email',true),
                'password' =>$encripted_pass,
                'type' => $this->input->post('type',true),
            );
            
           $insert_data= $this->db->insert('users',$data);
           return $insert_data;
        }
        public function delete_user($user_id)
        {
            $data = array(
                'status'=>0
            );
          $this->db->where(['idusers'=>$user_id]);
          $this->db->update('users',$data);
          return true;
        }
        public function undo_user($user_id)
        {
            $data = array(
                'status'=>1
            );
          $this->db->where(['idusers'=>$user_id]);
          $this->db->update('users',$data);
          return true;
        }
        public function get_deleted_users(){
            $this->db->where('status',0);
            $query =$this->db->get('users');
            return $query->result();
        }
        public function deleted_user($user_id)
        {
          $this->db->where(['idusers'=>$user_id]);
          $this->db->delete('users');
          return true;
        }
        public function update_users($user_id,$data){
            $this->db->where(['idusers'=>$user_id]);
            $this->db->update('users',$data);
            return true;
        }
        public function verifypassword($user_id,$password)
        {
                $this->db->where(['idusers'=>$user_id]);
                $result = $this->db->get('users');
                if(password_verify($password,$result->row(2)->password)){
                    return password_verify($password,$result->row(2)->password);
                }else{
                    return FALSE;
                }
        }
        public function update_password($user_id,$data)
        {
            $this->db->where(['idusers'=>$user_id]);
            $this->db->update('users',$data);
            return true;
        }

        public function get_user_info($user_id){
           $this->db->where(['idusers'=>$user_id]);
           $query= $this->db->get('users');
            return $query->row();
        }
        public function get_user_email($email){
            $this->db->where(['email'=>$email]);
            $query= $this->db->get('users');
             return $query->row();
         }
        //  public function get_mail()
        //  {
        //      $this->db->select('email')->from('users');
        //      $query = $this->db->get();
        //      return $query->result_array();
        //  }
        public function Email()
        {
            # code...
        }
    }

?>