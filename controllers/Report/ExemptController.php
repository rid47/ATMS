<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExemptController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
      $this->load->Model('Report/ExemptModel');
        
}

  function index()
    {
            $role=$this->session->userdata('role');
            $name=$this->session->userdata('name');
        
        
            if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                
             }
             else {
                     $this->load->view('common template/OperatorTemplate');    
             }
             
           $data['h']=$this->ExemptModel->select(); 
           //echo '<pre>';print_r($data);
           //echo die();
           $this->load->view('report/ExemptView', $data); 
           
           $this->load->view('common template/footer');  
          
           

       
       
}}

    