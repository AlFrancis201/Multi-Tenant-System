<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mts extends CI_Controller {

	public function index()
	{	
		$header_data['title'] = "Homepage";
		$this->load->view('include/header',$header_data);
		$this->load->view('contents/Homepage');
		$this->load->view('include/footer');

	}
    
    public function login(){
        $this->load->view('contents/login_view');
    }
    
    public function register(){
        $this->load->view('contents/register_view');
    }
    
    public function dashboard(){
        $this->load->view('contents/dashboard');
    }
}
