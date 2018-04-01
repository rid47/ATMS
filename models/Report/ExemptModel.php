<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ExemptModel extends CI_Model {
    
     function __construct(){
         parent::__construct();
     
         
   }

   public function select()  
      {  
         //data is retrive from this query  
         //$query = $this->db->get('tariff'); 
         
        $query_string = "SELECT class, license_no, time FROM transaction_information ORDER BY id ASC";
        //echo $query_string; die;
        $query = $this->db->query($query_string);
        //return $query->result();
        //echo '<pre>';print_r($query);
        //echo die();
        return $query;  
      }  

     }
