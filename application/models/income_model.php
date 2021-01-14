<?php
    class Income_model extends CI_Model{
      
    
        public function insert_income($data){
           $insert_data= $this->db->insert('incomes',$data);
           return $insert_data;

        }

        public function show_incomes(){
            $rows= $this->db->get('incomes');
            return $rows->result();
        }

        public function delete_income($id){
           $this->db->where(['id'=> $id]);
           $this->db->delete('incomes');
        }

        public function get_income_info($income_id)   
        {
          $this->db->where('id',$income_id);
          $get_data = $this->db->get('incomes');
          return $get_data->row();
        }

        public function edit_income($income_id,$data)
        {
          $this->db->where('id',$income_id);
          $this->db->update('incomes',$data);
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


       public function searchExpence(){
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
       $re= $this->db->get('expence');
       return $re->result();

     }
       
    }
?>
