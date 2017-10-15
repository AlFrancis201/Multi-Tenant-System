<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    public function index(){
        $this->form_validation->set_rules('fname','First Name','required');
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('contents/register_view');
        }
        else {
            $accountData = $_POST;
            $this->addAccount($accountData);
        }
    }
    
    public function addAccount($accountData){
        $this->load->model('user_model', 'User');
        $userRecord = array('email'=>$accountData['email'], 'password'=>$accountData['password']);
        $this->User->create($userRecord);
        $result = $this->User->getLastRecordID();
        $this->load->model('staff_model','Staff');
        $staffRecord = array('first_name'=>$accountData['fname'],'last_name'=>$accountData['lname'],'user_id'=>$result['user_id']);
        $this->Staff->create($staffRecord);
        redirect(base_url('home'));
    }
}