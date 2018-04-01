<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LaneConfigurationModel
 *
 * @author acl
 */
class LaneConfigurationModel extends CI_Model{
    //put your code here
     function __construct(){
        
         
    }
    function laneCreate($laneName)
    {
        //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
        $data = array(
                'lane_name' => $laneName,
                'lane_assignee' => $this->session->userdata('id'),
               
                
            );
        //echo '<pre>';print_r($data);die();
        
            $this->db->insert('lane', $data);
            $success_msg = "lane is successfully created<br /> ";
            $this->session->set_flashdata('success_msg',$success_msg);
            redirect(base_url(). "Management/LaneConfigurationController");
    }
    
}

