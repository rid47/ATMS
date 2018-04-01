<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VehicleClassManagementModel
 *
 * @author acl
 */
class VehicleClassManagementModel extends CI_Model {
    
     function __construct(){
        
         
    }
    
  
    function ClassCreate( $ClassName,$CustomName,$Description, $Vehicles,$tar,$mw,$rpu)
    {
        //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
        $data = array(
                'class_name' =>$ClassName,
                'class_custom_name' =>$CustomName,
                'class_description' =>$Description,
                'class_vehicle' =>$Vehicles,
                'max_weight'=>$mw,
                'rpu'=>$rpu,
                'tariff'=>$tar,
                'created_by' => $this->session->userdata('id'),
            
               
                
            );
        //echo '<pre>';print_r($data);die();
        
            $this->db->insert('class', $data);
            $success_msg = "Class is successfully created<br /> ";
            $this->session->set_flashdata('success_msg',$success_msg);
            redirect(base_url(). "Management/VehicleClassManagementController");
    }
    
}