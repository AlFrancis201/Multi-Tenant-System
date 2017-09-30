<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mts extends CI_Controller {

	public function index()
	{	
		$this->load->view('contents/dashboard');
        echo $this->session->userdata('user_id');
	}
    
    public function login(){
        $this->load->view('contents/login_view');
    }
    
    public function register(){
        $this->load->view('contents/register_view');
    }
    
    public function dashboard(){
        
    }
	
	public function add_staff(){
        $this->load->view('contents/add_staff');
    }
	public function add_service(){
        $this->load->view('contents/add_service');
    }
}
