<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mts extends CI_Controller {
    private $user_id = "";
    
    public function __construct(){
        parent::__construct();
        if(isset($_SESSION['user_id']))
            $this->user_id=$this->session->userdata('user_id');
        else
            redirect(base_url());
        
        $this->load->model('service_model','Service');
    }

	public function index()
	{	
		//$this->load->view('include/dashhead');		
		//$this->load->view('include/navbar');
        //$data['title'] = "Dashboard";
        //$data['addService'] = $this->load->view('contents/add_service','',true);
        //$data['addService'] = trim(preg_replace('/\s\s+/', ' ', $data['addService']));
        //$data['addService'] = trim(preg_replace('/\s+/', ' ', $data['addService']));
        $data['service_record'] = $this->Service->read();
        $this->load->view('contents/dashboard_final',$data);
	}
    
    /*public function addService(){
        $this->form_validation->set_rules('svc_name','Service Name','required');
        $this->form_validation->set_rules('svc_desc','Service Name','required');
        $this->form_validation->set_rules('duration','Service Name','required');
        $this->form_validation->set_rules('price','Service Name','required');
        if($this->form_validation->run() == FALSE){
            $data['title'] = "Dashboard";
            $data['addService'] = $this->load->view('contents/add_service','',true);
            //$data['addService'] = trim(preg_replace('/\s\s+/', ' ', $data['addService']));
            $data['addService'] = trim(preg_replace('/\s+/', ' ', $data['addService']));
            $this->load->view('contents/dashboard_final',$data);
        }
        else{
            $data['title'] = "Dashboard";
            $data['addService'] = $this->load->view('contents/add_service','',true);
            //$data['addService'] = trim(preg_replace('/\s\s+/', ' ', $data['addService']));
            $data['addService'] = trim(preg_replace('/\s+/', ' ', $data['addService']));
            $this->load->view('contents/dashboard_final',$data);
        }
    }*/
    
    public function add_service(){
        $this->form_validation->set_rules('svc_name','Service Name','required');
        $this->form_validation->set_rules('svc_desc','Service Name','required');
        $this->form_validation->set_rules('duration','Service Name','required');
        $this->form_validation->set_rules('price','Service Name','required');
        if($this->form_validation->run() == FALSE){
            $data['title'] = "Dashboard";
            echo $this->load->view('contents/add_service','',true);
        }
        else{
            //echo print_r($_POST);
            $serviceRecord=array('service_name'=>$_POST['svc_name'],'service_desc'=>$_POST['svc_desc'],'duration'=>$_POST['duration'],'price'=>$_POST['price'],'user_id'=>$this->user_id);
            $this->Service->create($serviceRecord);
            echo 'success';
            //echo $this->load->view('contents/test','',TRUE);
            //echo $this->load->view('contents/add_service','',true);
        }
    }
    
    public function view_service_profile($service_id){
        $condition = array('service_id'=>$service_id);
        $serviceRecord = $this->Service->read($condition);
        
        foreach($serviceRecord as $s){
            $data['svc_name'] = $s['service_name'];
            $data['svc_desc'] = $s['service_desc'];
            $data['duration'] = $s['duration'];
            $data['price'] = $s['price'];
        }
        echo $this->load->view('contents/service_profile',$data,TRUE);
    }
    
    public function login(){
		$this->load->view('include/login');			
        $this->load->view('contents/login_view');
    }
    
    public function register(){
        $this->load->view('contents/register_view');
    }
	
	public function add_staff(){
		//$this->load->view('include/Navbar');
		//$this->load->view('include/staff');
        $data['title'] = "Dashboard";
		$this->load->view('include/header_nav',$data);
        $this->load->view('contents/add_service');
    }
    
    public function viewStaff(){
        //$this->load->view('include/dashhead');		
        //$this->load->view('include/navbar');
        $header_data['title'] = "View Staff";
        $this->load->view('include/header_nav',$header_data);
        $this->load->view('contents/staff_view');
    }
    
    public function viewAppointment(){
        $this->load->view('contents/appointment');
    }
}
