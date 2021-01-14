<?php
    class Department_model extends CI_Model{
        public function get_department(){
            $this->db->where('status',1);
            $query =$this->db->get('departement');
            return $query->result();
        }
        public function get_deleted_department(){
            $this->db->where('status',0);
            $query =$this->db->get('departement');
            return $query->result();
        }
        public function create_department(){
            $data = array(
                'dp_name' => $this->input->post('dp_name',true),
            );
           $insert_data= $this->db->insert('departement',$data);
           return $insert_data;

        }
        public function delete_department($dp_id)
        {
            $data = array('status'=>0);
            $this->db->where(['id'=>$dp_id]);
            $this->db->update('departement',$data);
            return true;
        }
        public function undo_department($dp_id)
        {
            $data = array('status'=>1);
            $this->db->where(['id'=>$dp_id]);
            $this->db->update('departement',$data);
            return true;
        }
        // public function deleted_department($dp_id)
        // {
        //     $this->db->where(['id'=>$dp_id]);
        //     $this->db->delete('departement');
        //     return true;
        // }
        public function update_department($dp_id,$data){
            $this->db->where(['id'=>$dp_id]);
            $this->db->update('departement',$data);
            return true;
        }
        public function get_department_info($dp_id){
           $this->db->where(['id'=>$dp_id]);
           $query= $this->db->get('departement');
            return $query->row();
        }
    }
?>