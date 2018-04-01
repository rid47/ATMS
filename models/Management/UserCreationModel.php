<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userCreationModel
 *
 * @author acl
 */
class UserCreationModel extends CI_Model {
    //put your code here
    
    function __construct(){
        //parent::Model();
         
    }
    //createUser($name,$uname,$password,$email)
   public function createUser($name,$uname,$password,$email,$role){
      
       $query = $this->db->query("SELECT * FROM user_information where email='$email' OR user_name = '$uname'");
        $count = $query->num_rows();
        if($count>0){
            $fail_msg = "Username or email already exists";
            $this->session->set_flashdata('fail_msg',$fail_msg);
            redirect(base_url()."Management/UserCreationController");
        }
        else {
            $data = array(
                'employee_name' => $name,
                'role' => $role,
                'email' => $email,
                'user_name' => $uname,
                'password' => $password
                
            );
            
            
            
            $this->db->insert('user_information', $data);
            $success_msg = "User successfully created";
            $this->session->set_flashdata('success_msg',$success_msg);
            redirect(base_url()."Management/UserCreationController");
        }
    }
    
}
