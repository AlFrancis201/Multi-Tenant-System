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
        $this->load->model('staff_model','Staff');
        $this->load->model('staff_hours_model','Staff_Hours');
        $this->load->model('staff_service_model','Staff_Service');
        $this->load->model('customer_model','Customer');
        $this->load->model('appointment_model','Appointment');
    }

	public function index()
	{	
		//$this->load->view('include/dashhead');		
		//$this->load->view('include/navbar');
        //$data['title'] = "Dashboard";
        //$data['addService'] = $this->load->view('contents/add_service','',true);
        //$data['addService'] = trim(preg_replace('/\s\s+/', ' ', $data['addService']));
        //$data['addService'] = trim(preg_replace('/\s+/', ' ', $data['addService']));
        //$data['service_record'] = $this->Service->read();
        //$this->load->view('contents/dashboard_final',$data);
        $this->load->view('include/header_nav');
        echo date('G.i',strtotime('08:00:00'));
	}
    
    public function view_calendar(){
        $condition = array('user_id'=>$this->user_id);
        $data['provider'] = $this->Staff->read($condition);
        $data['customer'] = $this->Customer->read($condition);
        $header_data['active'] = 'calendar';
        $this->load->view('include/header_nav',$header_data);
        $this->load->view('calendar_view',$data);
    }
    
    public function ajax_get_staff_details($staff_id){
        $condition = array('staff_id'=>$staff_id);
        $serviceIds = $this->Staff_Service->readServiceIdOnly($condition);
        $services = array();
        foreach($serviceIds as $s){
            $d['service_id'] = $s;
            $serviceRecord = $this->Service->read(array('service_id'=>$s));
            foreach($serviceRecord as $ss){
                $d['service_name'] = $ss['service_name'];
            }
            $services[] = $d;
        }
        
        $daysDisabled = array();
        $staffHours = $this->Staff_Hours->read($condition);
        $activeDaysInt = array();
        $dayHours = array();
        if($staffHours != false){
            foreach($staffHours as $s){
                $activeDaysInt[] = idate('w',strtotime($s['day']));
                $dd['start_time'] = $s['start_time'];
                $dd['end_time'] = $s['end_time'];
                $dayHours[idate('w',strtotime($s['day']))] = $dd;
            }
        }
        
        for($i=0;$i<=6;$i++){
            if(!in_array($i, $activeDaysInt))
                $daysDisabled[] = $i;
        }
        
        echo json_encode(array('services'=>$services, 'daysDisabled'=>$daysDisabled, 'dayHours'=>$dayHours));
    }
    
    public function ajax_get_customer_form($cust_id=null){
        if(isset($cust_id)){
            $condition = array('cust_id'=>$cust_id);
            $customers = $this->Customer->read($condition);
            foreach($customers as $c){
                $data['cname'] = $c['cust_name'];
                $data['email'] = $c['email'];
                $data['mobile'] = $c['mobile_no'];
            }
            echo $this->load->view('contents/add_customerForModal',$data,true);
        }
        else{
            echo $this->load->view('contents/add_customerForModal','',true);
        }
    }
    
    public function add_appointment(){
        $this->form_validation->set_rules('provider', 'Service Provider', 'required');
        $this->form_validation->set_rules('service', 'Service Provided', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        if(isset($_POST['customer']))
            $this->form_validation->set_rules('customer', 'Customer', 'required');
        else{
            $this->form_validation->set_rules('cname','Customer Name','required');
            $this->form_validation->set_rules('mobile','Mobile Number','required');
            $this->form_validation->set_rules('email','Email','required');
        }
        
        if($this->form_validation->run() == FALSE){
            echo validation_errors();
        }
        else{
            if(isset($_POST['customer'])){
                $appntRecord = array('date'=>$_POST['date'], 'time'=>$_POST['time'], 'cust_id'=>$_POST['customer'], 'staff_id'=>$_POST['provider'], 'service_id'=>$_POST['service'], 'user_id'=>$this->user_id);
                $this->Appointment->create($appntRecord);
                echo 'success';
            }
            else{
                $custRecord = array('user_id'=>$this->user_id, 'cust_name'=>$_POST['cname'], 'mobile_no'=>$_POST['mobile'], 'email'=>$_POST['email']);
                $this->Customer->create($custRecord);
                $cust_id = $this->Customer->getLastRecordID();
                $appntRecord = array('date'=>$_POST['date'], 'time'=>$_POST['time'], 'cust_id'=>$cust_id, 'staff_id'=>$_POST['provider'], 'service_id'=>$_POST['service'], 'user_id'=>$this->user_id);
                $this->Appointment->create($appntRecord);
                echo 'success';
            }
        }
        
        
        
        
        
        /*$custRecord = array('user_id'=>$this->user_id, 'cust_name'=>$_POST['cname'], 'mobile_no'=>$_POST['mobile'], 'email'=>$_POST['email'], 
                          'office_no'=>$_POST['office'], 'home_no'=>$_POST['home'], 'address'=>$_POST['address'], 'city'=>$_POST['city'],
                          'state'=>$_POST['state'], 'zip'=>$_POST['zip']);
        $this->Customer->create($custRecord);
        $cust_id = $this->Customer->getLastRecordID();
        $appntRecord = array('date'=>$_POST['date'], 'time'=>$_POST['time'], 'cust_id'=>$cust_id, 'staff_id'=>$_POST['provider'], 'service_id'=>$_POST['service'], 'user_id'=>$this->user_id);
        $this->Appointment->create($appntRecord);
        redirect(base_url('mts/view_calendar'));*/
    }
    
    public function get_appointment(){
        $appntRecord=$this->Appointment->read(array('user_id'=>$this->user_id));
        $array = array();
        foreach($appntRecord as $a){
            $array[] = array('title'=>'appointment'.$a['appointment_id'], 'start'=>$a['date'].'T'.$a['time']);
        }
        echo json_encode($array);
    }
    
    public function view_service(){
        $condition = array('user_id'=>$this->user_id);
        $data['service_record'] = $this->Service->read($condition);
        $header_data['active'] = 'service';
        $this->load->view('include/header_nav',$header_data);
        $this->load->view('view_service',$data);
    }
    
    public function add_service(){
        $condition = array('user_id'=>$this->user_id);
        $data['staffRecord'] = $this->Staff->read($condition);
        $this->form_validation->set_rules('svc_name','Service Name','required');
        $this->form_validation->set_rules('svc_desc','Service Description','required');
        $this->form_validation->set_rules('duration','Service Duration','required|numeric');
        $this->form_validation->set_rules('price','Service Price','required|numeric');
        $this->form_validation->set_rules('staff[]','Service Provider','required');
        if($this->form_validation->run() == FALSE){
            $header_data['active'] = 'service';
            $this->load->view('include/header_nav',$header_data);
            $this->load->view('contents/add_service',$data);
        }
        else{
            //print_r($_POST);
            $serviceRecord=array('service_name'=>$_POST['svc_name'],'service_desc'=>$_POST['svc_desc'],'duration'=>$_POST['duration'],'price'=>$_POST['price'],'user_id'=>$this->user_id);
            $this->Service->create($serviceRecord);
            $service_id = $this->Service->getLastRecordID();
            foreach($_POST['staff'] as $s){
                $staffServiceRecord = array('staff_id'=>$s,'service_id'=>$service_id);
                $this->Staff_Service->create($staffServiceRecord);
            }
            redirect(base_url('mts/view_service'));
            // echo 'success';
            //echo $this->load->view('contents/test','',TRUE);
            //echo $this->load->view('contents/add_service','',true);
        }
    }
    
    public function view_service_profile($service_id, $errors=null){
        $data['service_id'] = $service_id;
        $condition = array('service_id'=>$service_id);
        $serviceRecord = $this->Service->read($condition);
        
        foreach($serviceRecord as $s){
            $data['svc_name'] = $s['service_name'];
            $data['svc_desc'] = $s['service_desc'];
            $data['duration'] = $s['duration'];
            $data['price'] = $s['price'];
        }
        $data['service_provider'] = $this->Staff_Service->readStaffIdOnly($condition);
        $condition = array('user_id'=>$this->user_id);
        $data['staffRecord'] = $this->Staff->read($condition);
        
        $header_data['active'] = 'service';
        $this->load->view('include/header_nav',$header_data);
        $this->load->view('service_profile',$data);
    }
    
    public function update_service($service_id){
        $this->form_validation->set_rules('svc_name','Service Name','required');
        $this->form_validation->set_rules('svc_desc','Service Description','required');
        $this->form_validation->set_rules('duration','Service Duration','required|numeric');
        $this->form_validation->set_rules('price','Service Price','required|numeric');
        $this->form_validation->set_rules('staff[]','Service Provider','required');
        if($this->form_validation->run() == false){
            echo validation_errors();
        }
        else{
            //$updatedService = array('service_name'=>$_POST['svc_name'],'service_desc'=>$_POST['svc_desc'],'duration'=>$_POST['duration'],'price'=>$_POST['price'],'user_id'=>$this->user_id);
            //$this->Service->update($updatedService, $service_id);
            $updatedService = array('service_name'=>$_POST['svc_name'],'service_desc'=>$_POST['svc_desc'],'duration'=>$_POST['duration'],'price'=>$_POST['price'],'user_id'=>$this->user_id);
            $this->Service->update($updatedService, $service_id);
            /*foreach($_POST['staff'] as $s){
                    $staffServiceRecord = array('staff_id'=>$s,'service_id'=>$service_id);
                    $this->Staff_Service->create($staffServiceRecord);
            }*/
            
            $curr = $this->Staff_Service->readStaffIdOnly(array('service_id'=>$service_id));
            $diff = array_diff($curr,$_POST['staff']);
            if(empty($diff))
                $diff = array_diff($_POST['staff'],$curr);
            
            $success = true;
            $errorMsg = "";
            foreach($diff as $d){
                if(in_array($d, $_POST['staff'])){
                    $staffServiceRecord = array('staff_id'=>$d,'service_id'=>$service_id);
                    $this->Staff_Service->create($staffServiceRecord);
                }
                else{
                    $appointments = $this->Appointment->read(array('staff_id'=>$d, 'service_id'=>$service_id, 'is_done'=>'0'));
                    if($appointments != FALSE){
                        $success = false;
                        $staffRecord = $this->Staff->read(array('staff_id'=>$d));
                        foreach($staffRecord as $s){
                            $errorMsg .= "Cannot uncheck Staff: ".$s['first_name'].' '.$s['last_name'].". Staff: ".$s['first_name'].' '.$s['last_name']." has pending appointments for this service.<br />";
                        }
                    }
                    else
                        $this->Staff_Service->del(array('staff_id'=>$d, 'service_id'=>$service_id));
                }
            }
            if($success)
                echo 'success';
            else
                echo $errorMsg;
        }
    }
    
    public function del_service($service_id){
        $condition = array('service_id'=>$service_id);
        $this->Service->del($condition);
        redirect(base_url('mts/view_service'));
    }
    
    public function view_staff(){
        $condition = array('user_id'=>$this->user_id);
        $data['staff_record'] = $this->Staff->read($condition);
        $header_data['active'] = 'staff';
        $this->load->view('include/header_nav',$header_data);
        $this->load->view('view_staff',$data);
    }
    
    public function add_staff(){
		//$this->load->view('include/Navbar');
		//$this->load->view('include/staff');
        //$data['title'] = "Dashboard";
        //echo $this->load->view('contents/add_staff','',true);
        $rules = array(
                    array('field'=>'first_name', 'label'=>'First Name', 'rules'=>'required'),
                    array('field'=>'last_name', 'label'=>'Last Name', 'rules'=>'required'),
                    array('field'=>'day[]', 'label'=>'Day', 'rules'=>'required')
                );
        $this->form_validation->set_rules($rules);
        $condition = array('user_id'=>$this->user_id);
        $data['service']=$this->Service->read($condition);
        if($this->form_validation->run()==false){
            $header_data['active'] = 'staff';
            $this->load->view('include/header_nav',$header_data);
            $this->load->view('contents/add_staff',$data);
        }
        else{
            $staffRecord = array('first_name'=>$_POST['first_name'], 'last_name'=>$_POST['last_name'], 'user_id'=>$this->user_id);
            $this->Staff->create($staffRecord);
            $staff_id = $this->Staff->getLastRecordID();
            foreach($_POST['day'] as $i => $d){
                $staffHoursRecord = array('staff_id'=>$staff_id, 'day'=>$d, 'start_time'=>date('H:i',strtotime($_POST['start_time'][$i])), 'end_time'=>date('H:i',strtotime($_POST['end_time'][$i])));
                $this->Staff_Hours->create($staffHoursRecord);
            }
            foreach($_POST['service'] as $s){
                $staffServiceRecord = array('staff_id'=>$staff_id, 'service_id'=>$s);
                $this->Staff_Service->create($staffServiceRecord);
            }
            redirect(base_url('mts/view_staff'));
        }
    }
    
    public function view_staff_profile($staff_id){
        $data['staff_id'] = $staff_id;
        $condition = array('staff_id'=>$staff_id);
        $staffRecord = $this->Staff->read($condition);
        foreach($staffRecord as $s){
            $data['first_name'] = $s['first_name'];
            $data['last_name'] = $s['last_name'];
        }
        $data['service'] = $this->Service->read(array('user_id'=>$this->user_id));
        $data['serviceProvided'] = $this->Staff_Service->readServiceIdOnly($condition);
        if(!$data['serviceProvided'])
            $data['serviceProvided'] = array();
        
        //print_r($serviceProvided);
        $header_data['active'] = 'staff';
        $this->load->view('include/header_nav',$header_data);
        $this->load->view('contents/staff_profile',$data);
    }
    
    public function ajax_get_staff_hours($staff_id){
        $staffHours = $this->Staff_Hours->read(array('staff_id'=>$staff_id));
        $data = array();
        
        foreach($staffHours as $s){
            $d['day'] = $s['day'];
            $d['start_time'] = date('G.i',strtotime($s['start_time']));
            $d['end_time'] = date('G.i',strtotime($s['end_time']));
            $data[] = $d;
        }
        echo json_encode($data); //Array ( [0] => Array ( [day] => monday [start_time] => 8.00 [end_time] => 17.00 ) )
    }
    
    public function update_staff($staff_id){
        $rules = array(
                    array('field'=>'first_name', 'label'=>'First Name', 'rules'=>'required'),
                    array('field'=>'last_name', 'label'=>'Last Name', 'rules'=>'required'),
                    array('field'=>'day[]', 'label'=>'Day', 'rules'=>'required')
                );
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == false){
            echo validation_errors();
        }
        else{
            $newStaffRecord = array('first_name'=>$_POST['first_name'], 'last_name'=>$_POST['last_name'], 'user_id'=>$this->user_id);
            $this->Staff->update($newStaffRecord, $staff_id);
            
            $this->Staff_Hours->del(array('staff_id'=>$staff_id));
            foreach($_POST['day'] as $i => $day){
                $staffHoursRecord = array('staff_id'=>$staff_id, 'day'=>$day, 'start_time'=>date('H:i',strtotime($_POST['start_time'][$i])), 'end_time'=>date('H:i',strtotime($_POST['end_time'][$i])));
                $this->Staff_Hours->create($staffHoursRecord);
            }
            
            /*foreach($_POST['service'] as $s){
                $staffServiceRecord = array('staff_id'=>$staff_id, 'service_id'=>$s);
                $this->Staff_Service->create($staffServiceRecord);
            }
            echo 'success';*/
            $currServiceIds = $this->Staff_Service->readServiceIdOnly(array('staff_id'=>$staff_id));
            if($currServiceIds == false)
                $currServiceIds = array();
            $service = array();
            if(isset($_POST['service']))
                $service = $_POST['service'];
            $diff = array_diff($currServiceIds,$service);
            if(empty($diff))
                $diff = array_diff($service,$currServiceIds);
            
            $success = true;
            $errorMsg = "";
            foreach($diff as $d){
                if(in_array($d, $service)){
                    $staffServiceRecord = array('service_id'=>$d,'staff_id'=>$staff_id);
                    $this->Staff_Service->create($staffServiceRecord);
                }
                else{
                    $appointments = $this->Appointment->read(array('service_id'=>$d, 'staff_id'=>$staff_id, 'is_done'=>'0'));
                    if($appointments != FALSE){
                        $success = false;
                        $serviceRecord = $this->Service->read(array('service_id'=>$d));
                        foreach($serviceRecord as $s){
                            $errorMsg .= "Cannot uncheck Service: ".$s['service_name'].". This staff has pending appointments for Service: ".$s['service_name']."<br />";
                        }
                    }
                    else
                        $this->Staff_Service->del(array('service_id'=>$d, 'staff_id'=>$staff_id));
                }
            }
            if($success)
                echo 'success';
            else
                echo $errorMsg;
        }
    }
    
    public function del_staff($staff_id){
        $condition = array('staff_id'=>$staff_id);
        $this->Staff->del($condition);
        redirect(base_url('mts/view_staff'));
    }
    
    public function view_customer(){
        $condition = array('user_id'=>$this->user_id);
        $header['active'] = 'customer';
        $data['customer'] = $this->Customer->read($condition);
        $header_data['active'] = 'customer';
        $this->load->view('include/header_nav',$header_data);
        $this->load->view('view_customer',$data);
    }
    
    public function add_customer(){
        $this->form_validation->set_rules('cname','Customer Name','required');
        $this->form_validation->set_rules('mobile','Mobile Number','required');
        $this->form_validation->set_rules('email','Email','required');
        if($this->form_validation->run() == false){
            $header_data['active'] = 'customer';
            $this->load->view('include/header_nav',$header_data);
            $this->load->view('contents/add_customer');
        }
        else{
            $custRecord = array('user_id'=>$this->user_id, 'cust_name'=>$_POST['cname'], 'mobile_no'=>$_POST['mobile'], 'email'=>$_POST['email'], 
                          'office_no'=>$_POST['office'], 'home_no'=>$_POST['home'], 'address'=>$_POST['address'], 'city'=>$_POST['city'],
                          'state'=>$_POST['state'], 'zip'=>$_POST['zip']);
            $this->Customer->create($custRecord);
            redirect(base_url('mts/view_customer'));
        }
    }
    
    public function view_customer_profile($cust_id){
        $data['cust_id'] = $cust_id;
        $customerRecord = $this->Customer->read(array('cust_id'=>$cust_id));
        foreach($customerRecord as $c){
            $data['cname'] = $c['cust_name'];
            $data['mobile'] = $c['mobile_no'];
            $data['email'] = $c['email'];
            if($c['office_no'] == 0)
                $data['office'] = "";
            else
                $data['office'] = $c['office_no'];
            if($c['home_no'] == 0)
                $data['home'] = "";
            else
                $data['home'] = $c['home_no'];
            $data['address'] = $c['address'];
            $data['city'] = $c['city'];
            $data['state'] = $c['state'];
            $data['zip'] = $c['zip'];
        }
        
        $header_data['active'] = 'customer';
        $this->load->view('include/header_nav',$header_data);
        $this->load->view('contents/customer_profile',$data);
    }
    
    public function update_customer($cust_id){
        $this->form_validation->set_rules('cname','Customer Name','required');
        $this->form_validation->set_rules('mobile','Mobile Number','required');
        $this->form_validation->set_rules('email','Email','required');
        if($this->form_validation->run() == false){
            echo validation_errors();
        }
        else{
            $newCustomerRecord = array('user_id'=>$this->user_id, 'cust_name'=>$_POST['cname'], 'mobile_no'=>$_POST['mobile'], 
                                'email'=>$_POST['email'], 'office_no'=>$_POST['office'], 'home_no'=>$_POST['home'], 'address'=>$_POST['address'],
                                'city'=>$_POST['city'], 'state'=>$_POST['state'], 'zip'=>$_POST['zip']);
            $this->Customer->update($newCustomerRecord, $cust_id);
            echo 'success';
        }
    }
    
    public function del_customer($cust_id){
        $condition = array('cust_id'=>$cust_id);
        $this->Customer->del($condition);
        redirect(base_url('mts/view_customer'));
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
    
    public function test(){
        print_r($_POST);
    }
}
