<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangePasswordModel
 *
 * @author acl
 */
class AccountSettingsModel  extends CI_Model {
    //put your code here
    
    function __construct(){
        
         
    }
    
   function updatePassword($op,$pass,$name)
   {
       
        $query = $this->db->query("SELECT * FROM user_information where user_name= '$name' and password = '$op'");
        
        $query = $query->num_rows();
        
        if($query==1){
            //$update_password = "UPDATE clients SET client_password='$final_password' WHERE client_user_name= '$session_id'";
            $wh=$this->db->set('password', $pass);
            $wh=$wh.$this->db->where('user_name', $name);
            $this->db->update('user_information');
            $success_mess="Your password changed successfully";
            $this->session->set_flashdata('success_mess',$success_mess);
            redirect(base_url()."AccountSettingsController");
        }
        else{
            $fail_mess="Current password doesn't match";
            $this->session->set_flashdata('fail_msg',$fail_mess);
            redirect(base_url()."AccountSettingsController");
        }
   }
}
