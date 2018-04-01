<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShiftDetailsController
 *
 * @author acl
 */
class ShiftDetailsReportController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
              $this->load->model(array('Report/ShiftDetailsReportModel'));
       
    }
    function index(){     
        
            $role=$this->session->userdata('role');
            $name=$this->session->userdata('name');
        
        
            if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                
             }
         
      $data['h']=$this->ShiftDetailsReportModel->select(); 
        $this->load->view('report/ShiftDetailsReportView',$data);
        $this->load->view('common template/footer');
    }
    function fetchData()
    {
                 $sd=new DateTime($this->input->post('sdate'));
                $ed=new DateTime($this->input->post('edate'));
               if($sd<$ed)
               {
                   
                  $this->ShiftDetailsReportModel->fetchData($this->input->post('sdate'),$this->input->post('edate'));
               }
               else
               {
                  
               }
               
    }
}