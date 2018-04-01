<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClassWiseTariffModel extends CI_Model {
    
     function __construct(){
        
         
    }
    
  
    public function UpdateTariff($ClassName,$Tariff)
    {
        //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
        $data = array(
                'class_name' =>$ClassName,
                
                'created_by' => $this->session->userdata('id'),
                'tariff'=>$Tariff,
               
                
            );
           //echo '<pre>';print_r($data['tariff_class']);die();
            
        
                    $this->db->select('class');
                    $this->db->where('class_name', $data['class_name']);
                    $this->db->update('class', $data);
		    $success_msg = "Tariff is successfully Updated<br /> ";
		    $this->session->set_flashdata('success_msg',$success_msg);
                   
	
            
		   
                   //echo "hello"; die();
                   redirect(base_url()."Management/ClassWiseTarrifController/");

                   
        
    }
    
    public function select()  
      {  
         //data is retrive from this query  
         //$query = $this->db->get('tariff'); 
         
        $query_string = "SELECT class_name,class_description,max_weight,rpu,tariff FROM class ORDER BY class_name ASC";
        //echo $query_string; die;
        $query = $this->db->query($query_string);
        //return $query->result();
        //echo '<pre>';print_r($query);
        //echo die();
        return $query;  
      }  
    
    
    
}
