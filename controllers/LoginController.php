<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author acl
 */
class LoginController extends CI_Controller{
    //put your code here
     function __construct() {
        parent::__construct();
          $data = array();
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('CustomMethodModel'));
    
    }
    function index(){
        
          $role=$this->session->userdata('role');
            $name=$this->session->userdata('name');
            
         //echo '<pre>'; print_r($_SESSION);   
            
            
          if($role!='')
         { 
            $this->session->set_userdata('name',$name);
	    $this->session->set_userdata('role',$role);
            
             if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                 $this->load->view('SuperAdminView');
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                 $this->load->view('AdminView');
             }
             elseif($role=="3"){
              $data['class']=$this->CustomMethodModel->getAllOrder('class','class_name');
              // echo   '<pre>';print_r($data);die();
                 $this->load->view('common template/OperatorTemplate');
                 $this->load->view('OperatorView',$data);
                 
             }
         }
         else
         {
              redirect(base_url()."Welcome");
         }
      
    }
    
    function check()
    {
       
        $name	=$this->input->post("uname");
	 $pass	=md5($this->input->post("pass"));
         $role =$this->input->post("role");
         
         $result=$this->CustomMethodModel->check_md5password($name,$pass,$role);
        
         if($result)
         { 
            $this->session->set_userdata('name',$name);
	    $this->session->set_userdata('role',$role);
            date_default_timezone_set("Asia/Dhaka");
            $this->session->set_userdata('time',date("h:i:sa"));
             if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                 $this->load->view('SuperAdminView');
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                 $this->load->view('AdminView');
             }
             elseif($role=="3"){
                $data['class']=$this->CustomMethodModel->getAllOrder('class','class_name');
                 $this->load->view('common template/OperatorTemplate');
                 $this->load->view('OperatorView',$data);
                 
             }
         }
         else
         {
             $fail_mess="Invalid Credential ! Please try again";
	     $this->session->set_flashdata('fail',$fail_mess);
             
	      redirect(base_url()."Welcome");
              
        
         }
    }
    
    function resetPass()
    {
        $email	=$this->input->post("email");
        $this->CustomMethodModel->checkUser($email);
    }
    
}
