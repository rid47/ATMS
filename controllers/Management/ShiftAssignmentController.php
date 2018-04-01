<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShiftAssignmentController
 *
 * @author acl
 */
class ShiftAssignmentController extends CI_Controller {
    //put your code here
        
    function __construct() {
        parent::__construct();
       
        $this->load->model(array('Management/ShiftAssignmentModel'));
        $this->load->model(array('CustomMethodModel'));
        $data = array();
        
    }
    
    function index()
    {
        
        
    $data['operator']= $this->CustomMethodModel->getOperator();	
    $data['lane']=$this->CustomMethodModel->getAll('lane');
    $data['plaza']=$this->CustomMethodModel->getAll('plaza');
    $data['shift']=$this->CustomMethodModel->getAll('shift');
//         foreach ( $data as $row) {
//                
//          echo $row->user_name;
//          echo $row->user_id;
//           
//        
//        } die();
       // echo   '<pre>';print_r($data);die();
         $role=$this->session->userdata('role');
           
        
        
            if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                
             }
            $this->load->view('management/ShiftAssignmentView',$data);
            $this->load->view('common template/footer');
    }
    
    function create()
    {
                $op=$this->input->post('oid');
                $lid=$this->input->post('lid');
                $pid= $this->input->post('pid');
                $date=$this->input->post('date');
                $sid=$this->input->post('sid');
                $this->ShiftAssignmentModel->create($op,$lid,$pid,$date,$sid);
    }
}