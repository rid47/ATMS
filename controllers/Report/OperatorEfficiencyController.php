<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperatorEfficiencyController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
      $this->load->Model('Report/OperatorEfficiencyModel');
        
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
           $this->load->view('report/OperatorEfficiencyView');
           $this->load->view('common template/footer'); 
          
           

       
       
}}

    