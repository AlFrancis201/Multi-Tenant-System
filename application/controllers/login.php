<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('email','Email','required', array('required' => 'Invalid Username or Password.'));
        if($this->form_validation->run()==TRUE)
            $this->form_validation->set_rules('password','Password','callback_verifyLogin');
        if($this->form_validation->run()==FALSE){
            $this->load->view('contents/login_view');
        }
        else {
            redirect(base_url('mts'));
        }
	}
    
    public function verifyLogin($password) {
        $email = $this->input->post('email');
        
        $condition = array('email'=>$email, 'password'=>$password);
        $this->load->model('user_model','User');
        $result_array = $this->User->read($condition);
        
        if($result_array){
            foreach($result_array as $row){
                $this->session->set_userdata('user_id', $row['user_id']);
            }
            return true;
        }
        else{
            $this->form_validation->set_message('verifyLogin','Invalid Username or Password.');
            return false;
        }
    }
    
    public function logout(){
        session_destroy();
        redirect(base_url());
    }
}
