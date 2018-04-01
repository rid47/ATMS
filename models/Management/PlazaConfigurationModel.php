<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlazaConfigurationModel
 *
 * @author acl
 */
class PlazaConfigurationModel extends CI_Model {
    
     function __construct(){
        
         
    }
    
    
    function plazaCreate($plazaName)
    {
        //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
        $data = array(
                'plaza_name' => $plazaName,
                'plaza_assignee' => $this->session->userdata('id'),
               
                
            );
        //echo '<pre>';print_r($data);die();
        
            $this->db->insert('plaza', $data);
            $success_msg = "lane is successfully created<br /> ";
            $this->session->set_flashdata('success_msg',$success_msg);
            redirect(base_url(). "Management/PlazaConfigurationController");
    }
    
}
