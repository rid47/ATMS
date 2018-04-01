<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TransactionModel
 *
 * @author acl
 */
class TransactionModel extends CI_Model {
    //put your code here
    
    function __construct(){
        //parent::Model();
         date_default_timezone_set('Asia/Dhaka');
    }
    
    function insetTransaction($ln,$cls,$weight,$bill)
    {
          $data = array(
                'license_no' => $ln,
                'time' => date("h:i:sa"),
                'date' => date("Y-m-d"),
                'class' => $cls,
                'weight' => $weight,
                  'bill' => $bill,
                'vehicle_image' => "   ",
                'collected_by' => $this->session->userdata('id')
                
            );
           $this->db->insert('transaction_information', $data);
            $success_msg = "Transaction stored<br />";
            $this->session->set_flashdata('success_msg',$success_msg);
            //echo '<pre>'; print_r($data);die();
            redirect(base_url()."Welcome");
    }
}