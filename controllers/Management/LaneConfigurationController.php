<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LaneConfigurationController
 *
 * @author acl
 */
class LaneConfigurationController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
        //$this->load->library(array('session'));
        $this->load->model(array('Management/LaneConfigurationModel'));
        
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
            $this->load->view('management/LaneConfigurationView');
            $this->load->view('common template/footer');
    }
    
    function create()
    {
         $laneName=$this->input->post("name");
         //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
         $this->LaneConfigurationModel->laneCreate($laneName);
    }
}