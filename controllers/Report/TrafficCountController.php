<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrafficCountController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
      $this->load->Model('Report/TrafficCountModel');
        
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
           $this->load->view('report/TrafficCountView');
           $this->load->view('common template/footer');
          
           

       
       
}}

    