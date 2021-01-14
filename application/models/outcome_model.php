<?php
    class Outcome_model extends CI_Model{
      
    
        public function insert_outcome($data){
           $insert_data= $this->db->insert('outcomes',$data);
           return $insert_data;

        }

        public function show_outcomes(){
            $rows= $this->db->get('outcomes');
            return $rows->result();
        }

          public function delete_outcome($id){
           $this->db->where(['idoutcomes'=> $id]);
           $this->db->delete('outcomes');
        }

        public function get_outcome_info($outcome_id)   
        {
          $this->db->where('idoutcomes',$outcome_id);
          $get_data = $this->db->get('outcomes');
          return $get_data->row();
        }

        public function edit_outcome($outcome_id,$data)
        {
          $this->db->where('idoutcomes',$outcome_id);
          $this->db->update('outcomes',$data);
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
          $re= $this->db->get('outcomes');
          return $re->result();

        }

        public function searchIncomes(){
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
       
    }
?>
