<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassWiseTarrifController
 *
 * @author acl
 */
class ClassWiseTarrifController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
      
        $this->load->model(array('Management/ClassWiseTariffModel'));
         //$this->load->model(array('CustomMethodModel'));
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
            
             
             //$data['tariff']=$this->ClassWiseTariffModel->getTariff();
             
             //echo $data[tariff];die();
             $data['h']=$this->ClassWiseTariffModel->select(); 
              //$data['class']=$this->CustomMethodModel->getAllOrder('class','class_name');
             $this->load->view('management/ClassWiseTariffView',$data);
             $this->load->view('common template/footer');
           
    }
    
   function updateTariff()
    {
         $ClassName=$this->input->post("class");
         
         $Tariff=$this->input->post("Tariff");
         //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
         // 
         $this->ClassWiseTariffModel->UpdateTariff($ClassName,$Tariff);
    }
    
    
    
 
}