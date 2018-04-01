<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserConfigurationController
 *
 * @author acl
 */
class UserConfigurationController extends CI_Controller {
    //put your code here
    
    function __construct() {
        parent::__construct();
         $data = array();
        $this->load->model(array('Management/UserConfigurationModel'));
        $this->load->model(array('CustomMethodModel'));
    
       
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
         $data['user_information']=$this->CustomMethodModel->getAllOrder('user_information','employee_name');
        //echo '<pre>';print_r($data);die();
        $this->load->view('management/UserConfigurationView',$data);
        $this->load->view('common template/footer');
    }
    
    function deleteUser()
    {
        
        $user_id = $this->input->post('row_id');
       
        $table='user_information';
        $col='user_id';
        $res=$this->CustomMethodModel->deleteUesr($table,$col,$user_id);
      echo "success";
    }
     function editUser()
    {
        
//        $user_id = json_decode($this->input->post('row_id'));
//       $name = json_decode($this->input->post('name'));
//       $email = $this->input->post('email');
//       $uname = $this->input->post('uname');
         //$data=json_decode($this->input->post('data'),true);
  //     echo '<pre>';print_r($data);die();
         
       $user_id = $this->input->post('row_id');
       $name = $this->input->post('name');
       $email = $this->input->post('email');
       $uname = $this->input->post('uname');
        $res=$this->UserConfigurationModel->editUser($user_id,$name,$email,$uname);
      
        echo "success";
    }
}