<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');








class ShiftDetailsReportModel extends CI_Model {
    
     function __construct(){
        
         
    }
       
    
       
    
     public function select()  
      {  
         //data is retrive from this query  
         //$query = $this->db->get('tariff'); 
         
        $query_string = "SELECT user_information.employee_name,
                    plaza.plaza_name,
                    lane.lane_name,
                    roster_details.date,
                    shift.shift_name,
                    (SELECT employee_name FROM user_information WHERE user_id=roster_details.assigned_by) AS assigned_by_name  
            FROM roster_details 
            JOIN user_information  ON roster_details.employee_id=user_information.user_id
            JOIN plaza ON plaza.plaza_id= roster_details.plaza_id
            JOIN shift ON shift.shift_id=roster_details.shift_id
            JOIN lane ON lane.lane_id=roster_details.lane_id

";
        //echo $query_string; die;
        $query = $this->db->query($query_string);
        //echo '<pre>';print_r($query)
        
        return $query;  
      }  
      function fetchData($sd,$ed)
      {
          echo $ed."  ".$sd;
      }
}
