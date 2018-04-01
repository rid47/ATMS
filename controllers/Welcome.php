<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct() {
        parent::__construct();
           $this->load->model(array('CustomMethodModel'));
       
    }
	
	
	public function index()
	{
            $role=$this->session->userdata('role');
            $name=$this->session->userdata('name');
            if($name!='')
            {
                 if($role=="1"){
                 
                 $this->load->view('common template/SuperAdminTemplate');
                 $this->load->view('SuperAdminView');
             }
             elseif($role =="2"){
                
                 $this->load->view('common template/AdminTemplate');
                 $this->load->view('AdminView');
             }
             elseif($role=="3"){
              $data['class']=$this->CustomMethodModel->getAllOrder('class','class_name');
               //echo   '<pre>';print_r($data);die();
                 $this->load->view('common template/OperatorTemplate');
                 $this->load->view('OperatorView',$data);
                 
             }
		
            }
            else
            {
                $this->load->view('LoginView');
                
            }
	}
        
        public function logout()
        {
             $this->session->set_userdata('name','');
	    $this->session->set_userdata('role','');
            $this->session->set_userdata('id','');
            redirect(base_url()."Welcome");
        }
	

        
        
        
       public function user_data_submit() {


        $class = $this->input->post('selection');

        $res=$this->CustomMethodModel->select($class);

       // echo '<pre>';print_r($tariff);
        //echo json_encode($tariff);
        //echo $tariff;die();
      // echo '<pre>';print_r($res);
        echo json_encode($res);
        }
        
        
}
