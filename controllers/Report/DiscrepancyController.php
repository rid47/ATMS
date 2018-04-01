<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiscrepancyController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
      $this->load->Model('Report/DiscrepancyModel');
        
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
           $this->load->view('report/DiscrepancyView');
           $this->load->view('common template/footer');
          
           

       
       
}}

    