<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userCreation
 *
 * @author acl
 */
class UserCreationController extends CI_Controller {
    //put your code here
    
    function __construct() {
        parent::__construct();
         $data = array();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session'));
        $this->load->model(array('Management/UserCreationModel'));
    
        
    
       
    }
    function index()
    {
        $role=$this->session->userdata('role');
        if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                
             }
             elseif($role=="3"){
               
                 $this->load->view('common template/OperatorTemplate');
                 
                 
             }
        $this->load->view("management/UserCreationView");
        $this->load->view('common template/footer');
    }
    function create()
    {
       
        
        $password=$this->input->post('password');
        $confirm_password=$this->input->post('re_password');
        if(strcmp($password, $confirm_password)==0)
        {
             //echo 'I m here 2'; die();
            
                $name=$this->input->post('name');
                $uname=$this->input->post('uname');
                $password= md5($this->input->post('password'));
                $role=$this->input->post('role');
                $email=$this->input->post('mail');
                
                
                $this->UserCreationModel->createUser($name,$uname,$password,$email,$role);

        }
        else
        {
             $fail_msg = "Passwords didn't match";
            $this->session->set_flashdata('fail_msg',$fail_msg);
            redirect(base_url()."Management/UserCreationController");
        }
    }
}
