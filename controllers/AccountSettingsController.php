<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountSettingsController
 *
 * @author acl
 */
class AccountSettingsController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
        $this->load->model(array('AccountSettingsModel'));
        
    }
    public function index()
    {       $role=$this->session->userdata('role');
            $name=$this->session->userdata('name');
        
        
            if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                
             }
             elseif($role=="3"){
               
                 $this->load->view('common template/OperatorTemplate');
                 
                 
             }
     
        $this->load->view('AccountSettingsView');
        $this->load->view('common template/footer');
    }
    public function changePass()
    {
         $op	=md5($this->input->post("op"));
	 $np	=$this->input->post("np");
         $cp =$this->input->post("cp");
         
         if(strcmp($np,$cp)==0)
         {
             $pass= md5($np);
             
             $this->AccountSettingsModel->updatePassword($op,$pass,$this->session->userdata('name'));
         }
          else {
            
                $fail_mess="Both new passwords must match. Please retype them.";
		$this->session->set_flashdata('fail_msg',$fail_mess);
                redirect(base_url()."AccountSettingsController");
        }
         
    }
}
