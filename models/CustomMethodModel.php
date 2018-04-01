<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomMethodModel
 *
 * @author acl
 */
class CustomMethodModel extends CI_Model {
    //put your code here
    
    function __construct(){
        
          
    }
    
    function check_md5password($name,$pass,$role)
    {
        $row = $this->num_of_data("user_information", "WHERE user_name='$name' AND password='$pass' AND role='$role'");
        //echo $row; die();
        return $row;
    }
    function num_of_data($table, $wh) {
        if (!empty($wh)) {
          

            $query = $this->db->query("SELECT * FROM " . $table . " " . $wh);
             foreach ($query->result() as $row) {
                
            $v = $row->user_id;
             $this->session->set_userdata('id',$v);
        
        }
        
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $query = $this->db->get();
        }
      
        return $query->num_rows();
    }
    
    function checkUser($email)
    {
        $row = $this->num_of_data("user_information", "WHERE email='$email'");
        if($row)
        {
         
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $password = substr(str_shuffle($chars),0,8);
         
            $this->sendMail($email,$password);
        }
        else
           echo "not valid user";
        
    }
    
    function generatePass($email)
    {

            $this->resetPassword->updatePassword($password,$username);
            $succes_mess="Please check your Email";
            $this->session->set_flashdata('success_mess',$succes_mess);
            redirect(base_url()."forgotPassword");
    }
    function sendMail($email,$password) {

        $this->load->library('email');
        $config['smtp_host'] = 'mail.datasoft-bd.com';
        $config['smtp_port'] = '25';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = '';
        $config['smtp_pass'] = '';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;
        $config['validation'] = FALSE;
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';

        $this->email->initialize($config);
        $this->email->from("nishadur.rahmann@datasoft-bd.com", "Support Center");
        $this->email->to($email);

        $this->email->subject("Password Recovery");
        $this->email->message("Dear User, <br />Your new password is : <strong>".$password."</strong><br />"
                . "Please <a href=".base_url().">login </a> using this password");
        $this->email->send();
    }
    function getOperator(){
        
        $query = $this->db->query("SELECT * FROM user_information WHERE role = 3");
        
        return $query->result();
    }
    function getAll($table){
        $query = $this->db->query("SELECT * FROM " . $table);
        return $query->result();
    }
     function getAllOrder($table,$col){
         //echo $table,$col;die();
        $query = $this->db->query("SELECT * FROM " . $table ." ORDER BY " .$col. " ASC");
        
        return $query->result();
    }
    
     public function select($class)  
      {  
         
         
        $query_string = "SELECT max_weight,tariff,rpu FROM class  WHERE class_name='$class'";
       
        $query = $this->db->query($query_string);
        $res=$query->result();
        
        return $res;
       
        
      }      
   function deleteUesr($table,$col,$user_id)
   {
        $this->db->where($col,$user_id);
        return $this->db->delete($table);
   }
}