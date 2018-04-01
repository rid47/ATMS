<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DailyPassController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       $this->load->Model('Report/DailyPassModel');
      
        
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
             
           $data['h']=$this->DailyPassModel->select();
           //echo '<pre>';print_r($data);
           //echo die();
           $this->load->view('report/DailyPassView',$data);
           $this->load->view('common template/footer'); 
          
           

       
       
}}

    