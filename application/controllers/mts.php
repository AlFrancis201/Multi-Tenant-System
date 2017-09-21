<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mts extends CI_Controller {

	public function index()
	{	
		$header_data['title'] = "Homepage";
		$this->load->view('include/header',$header_data);
		$this->load->view('contents/Homepage.html');
		$this->load->view('include/footer');

	}

}
