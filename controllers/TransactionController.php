<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TransactionController
 *
 * @author acl
 */
class TransactionController extends CI_Controller{
    //put your code here
     function __construct() {
        parent::__construct();
          $data = array();
        $this->load->helper(array('form', 'url'));
    $this->load->model(array('TransactionModel'));
     
    }
    
    function index(){
          
       
//         //$config['upload_path'] = './uploads/'; 
//         echo $ln." ".$cls." ".$weight." ".$date." ".$bill.$config['upload_path'];die();
//       if($this->input->post('upload')) {
//
//        $config['upload_path'] = APPPATH . 'your upload folder name here/'; 
//        $config['file_name'] = filename_here;
//        $config['overwrite'] = TRUE;
//        $config["allowed_types"] = 'jpg|jpeg|png|gif';
//        $config["max_size"] = 1024;
//        $config["max_width"] = 400;
//        $config["max_height"] = 400;
//        //$this->load->library('upload', $config);
//
//    }
//	//echo $ln." ".$cls." ".$weight." ".$date." ".$bill;die();
        
    }
    
    function upload ()
    {
          $ln	=$this->input->post("ln");
	 $cls	=$this->input->post("class");
         $weight =$this->input->post("weight");
         $date=$this->input->post("date");
         $bill=$this->input->post("bill");
         //echo $ln." ".$cls." ".$weight." ".$date." ".$bill;die();
         
          $this->TransactionModel->insetTransaction($ln,$cls,$weight,$bill);
    }
      
}