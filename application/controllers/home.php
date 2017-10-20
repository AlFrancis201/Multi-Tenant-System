<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $header_data['title'] = "Homepage";
		$this->load->view('include/header',$header_data);
		$this->load->view('contents/Homepage');
		
    }
}