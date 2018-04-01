<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WeeklyTrafficCensusController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
      $this->load->Model('Report/WeeklyTrafficCensusModel');
        
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
           $this->load->view('report/WeeklyTrafficCensusView');
           $this->load->view('common template/footer'); 
          
           

       
       
}}

    
