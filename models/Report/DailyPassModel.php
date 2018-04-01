<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DailyPassModel extends CI_Model {
    
     function __construct(){
        
         
}


 public function select()  
      {  
         
         
        $query_string = "SELECT license_no,time,date,class,weight,bill FROM transaction_information ORDER BY id ASC";
        //echo $query_string; die();
        $query = $this->db->query($query_string);
        //return $query->result();
        //echo '<pre>';print_r($query);
        //echo die();
        return $query;  
      }  


     }