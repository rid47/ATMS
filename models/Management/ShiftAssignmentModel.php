<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShiftAssignmentModel
 *
 * @author acl
 */
class ShiftAssignmentModel extends CI_Model {
    //put your code here
    
    function __construct(){
        //parent::Model();
         
    }
    function create($op,$lid,$pid,$date,$sid)
    {
         $data = array(
                'employee_id' => $op,
                'plaza_id' => $pid,
                'lane_id' => $lid,
                'shift_id' => $sid,
                'date' => $date,
                 'assigned_by'=>$this->session->userdata('id')
                 );
         
            $this->db->insert('roster_details', $data);
            $success_msg = "Successfully Assigned";
            $this->session->set_flashdata('success_msg',$success_msg);
            redirect(base_url()."Management/ShiftAssignmentController");
    }
}