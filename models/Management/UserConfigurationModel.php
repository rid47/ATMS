<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserConfigurationModel
 *
 * @author acl
 */
class UserConfigurationModel extends CI_Model {
    //put your code here
    
    function __construct(){
        //parent::Model();
         
    }
    
    
    function editUser($user_id,$name,$email,$uname)
    {
         $data = array(
                'employee_name' =>$name,
                
                'email' => $email,
                'user_name'=>$uname,
               
            );
          $this->db->select('user_information');
          $this->db->where('user_id',$user_id );
           $this->db->update('user_information', $data);
    }
}
