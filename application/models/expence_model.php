<?php
    class Expence_model extends CI_Model{
      
    
        public function insert_expence($data){
           $expence_data= $this->db->insert('expence',$data);
           return $expence_data;

        }

        public function show_expences(){
            $rows= $this->db->get('expence');
            return $rows->result();
        }

        public function delete_expence($id){
           $this->db->where(['id'=> $id]);
           $this->db->delete('expence');
        }

        public function get_expence_info($expence_id)   
        {
          $this->db->where('id',$expence_id);
          $get_data = $this->db->get('expence');
          return $get_data->row();
        }

        public function edit_expence($expence_id,$data)
        {
          $this->db->where('id',$expence_id);
          $this->db->update('expence',$data);
          return true;
        }
        public function searchData(){
          $year=$_POST['year'];
          $mounth=$_POST['mounth'];
          $day=$_POST['day'];
          if($year!=null){
           $this->db->where('year',$year);
          }
          if($mounth!=null){
         $this->db->where('month',$mounth);

          }
          if($day!=null){
         $this->db->where('day',$day);

          }
         $re= $this->db->get('incomes');
         return $re->result();

       }

        public function searchOutcomes(){
          $year=$_POST['year'];
          $mounth=$_POST['mounth'];
          $day=$_POST['day'];
          if($year!=null){
           $this->db->where('year',$year);
          }
          if($mounth!=null){
         $this->db->where('month',$mounth);

          }
          if($day!=null){
         $this->db->where('day',$day);

          }
         $re= $this->db->get('outcomes');
         return $re->result();

       }
       
    }
?>
