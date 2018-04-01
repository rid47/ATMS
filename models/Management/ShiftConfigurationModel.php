<?php


class ShiftConfigurationModel extends CI_Model{
    //put your code here
     function __construct(){
        
         
    }
    function shiftCreate($shiftName,$startTime,$endTime)
    {
        //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
        $data = array(
                'shift_name' => $shiftName,
                'shift_start_time' => $startTime,
                'shift_end_time' => $endTime,
                'shift_assignee' => $this->session->userdata('id'),
               
                
            );
        //echo '<pre>';print_r($data);die();
        
        $this->db->insert('shift', $data);
            $success_msg = "Shift is successfully created<br /> ";
            $this->session->set_flashdata('success_msg',$success_msg);
            redirect(base_url(). "Management/ShiftConfigurationController");
    }
    
       public function select()  
      {  
         //data is retrive from this query  
         //$query = $this->db->get('tariff'); 
         
        $query_string = "SELECT shift_id,shift_name,shift_start_time,shift_end_time FROM shift ORDER BY shift_id ASC";
        //echo $query_string; die;
        $query = $this->db->query($query_string);
        //echo '<pre>';print_r($query)
        
        return $query;  
      }  

    
}
