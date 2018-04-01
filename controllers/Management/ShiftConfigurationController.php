<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShiftConfigurationController extends CI_Controller{
    //put your code here
        
    function __construct() {
        parent::__construct();
       
        $this->load->model(array('Management/ShiftConfigurationModel'));
        $this->load->model('CustomMethodModel');
        
    }
    function index()
    {
        $role=$this->session->userdata('role');
            //$name=$this->session->userdata('name');
        
        
            if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                
             }
            $data['h']=$this->ShiftConfigurationModel->select(); 
            $this->load->view('management/ShiftConfigurationView',$data);
            $this->load->view('common template/footer');
    }
    
    function create()
    {
         $shiftName=$this->input->post("name");
	 $startTime=$this->input->post("st");
         $endTime =$this->input->post("et");
         
         //echo $shiftName.' ',$startTime.' ', $endTime.' '; die();
         $this->ShiftConfigurationModel->shiftCreate($shiftName,$startTime,$endTime);
    }
    
    
    function deleteShift()
    {
        
       
        $user_id = $this->input->post('row_id');
       
        $table='shift';
        $col='shift_id';
        $res=$this->CustomMethodModel->deleteUesr($table,$col,$user_id);
        
        echo "success";
    }
}