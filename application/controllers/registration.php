<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    public function index(){
        $this->form_validation->set_rules('cname','Company Name','required|alpha');
        $this->form_validation->set_rules('fname','First Name','required|alpha');
        $this->form_validation->set_rules('lname','Last Name','required|alpha');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
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
        $userRecord = array('email'=>$accountData['email'], 'password'=>password_hash($accountData['password'],PASSWORD_DEFAULT), 'company_name'=>$accountData['cname']);
        $this->User->create($userRecord);
        $result = $this->User->getLastRecordID();
        $this->load->model('staff_model','Staff');
        $staffRecord = array('first_name'=>$accountData['fname'],'last_name'=>$accountData['lname'],'user_id'=>$result['user_id']);
        $this->Staff->create($staffRecord);
        $this->session->set_userdata('user_id', $result['user_id']);
        redirect(base_url('mts'));
    }
}