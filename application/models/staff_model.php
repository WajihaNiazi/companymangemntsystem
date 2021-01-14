<?php
    class Staff_model extends CI_Model{
        public function get_staff(){
            $this->db->select('*');
            $this->db->from('departement');
            $this->db->join('staff','departement.id = staff.dp_id');
            $this->db->where('staff.status',1);
            $query = $this->db->get();
            return $query->result();
        }
        public function get_Deleted_staff(){
            $this->db->select('*');
            $this->db->from('departement');
            $this->db->join('staff','departement.id = staff.dp_id');
            $this->db->where('staff.status',0);
            $query = $this->db->get();
            return $query->result();
        }
        public function get_department(){
            $this->db->where('status',1);
            $query =$this->db->get('departement');
            return $query->result();
        }
        public function create_staff($data){
           $insert_data= $this->db->insert('staff',$data);
           return $insert_data;
        }
        public function delete_staff($staff_id)
        {
            $this->db->where(['id'=>$staff_id]);
            $data=array('status'=>0);
            $this->db->update('staff',$data);
            return true;
        }
        public function undo_staff($staff_id)
        {
            $this->db->where(['id'=>$staff_id]);
            $data=array('status'=>1);
            $this->db->update('staff',$data);
            return true;
        }
        public function deleted_staff($staff_id)
        {
          $this->db->where(['id'=>$staff_id]);
          $this->db->delete('staff');
          return true;
        }
        public function update_staff($staff_id,$data){
            $this->db->where(['id'=>$staff_id]);
            $this->db->update('staff',$data);
            return true;
        }
        public function get_staff_info($staff_id){
           $this->db->where(['id'=>$staff_id]);
           $query= $this->db->get('staff');
            return $query->row();
        }
        public function get_staff_dp_id($staff_id)
        {
            $this->db->where([
                'id'=>$staff_id
            ]);
            $query = $this->db->get('staff');
            return $query->row()->dp_id;
        }
        public function get_staff_dp_name($dp_id)
        {
            $this->db->where([
                'id'=>$dp_id,
                'status'=>1
            ]);
            $query= $this->db->get('departement');
            return $query->row();

        }
    }
?>