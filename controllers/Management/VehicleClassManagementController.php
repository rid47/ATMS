<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VehicleClassManagementController
 *
 * @author acl
 */
class VehicleClassManagementController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
        //$this->load->library(array('session'));
        //$this->load->model(array('Management/LaneConfigurationModel'));
        $this->load->model(array('Management/VehicleClassManagementModel'));
        
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
            $this->load->view('management/VehicleClassManagementView');
            $this->load->view('common template/footer');
    }
    
    function create()
    {
         $ClassName=$this->input->post("ClassName");
         $CustomName=$this->input->post("CustomName");
         $Description=$this->input->post("Description");
         $Vehicles=$this->input->post("Vehicles");
          $tar=$this->input->post("tar");
         $mw=$this->input->post("mw");
         $rpu=$this->input->post("rpu");
         //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
         $this->VehicleClassManagementModel->ClassCreate( $ClassName,$CustomName,$Description, $Vehicles,$tar,$mw,$rpu);
    }
}