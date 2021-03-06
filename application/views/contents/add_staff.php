<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Staff
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('mts/view_staff'); ?>"><i class="fa fa-user"></i> Staff Management</a></li>
        <li class="active">Add Staff</li>
      </ol>
    </section>

    <div class="row staff_profile">
        <div class="col-md-12">
            <form action="<?php echo base_url('mts/add_staff'); ?>" method="post">
                <?php echo validation_errors(); ?>    
                <div class="row addStaffform">
                    <div class="col-md-5">            
                        <h1>Name</h1>
                        <div class="col-md-7 staff_name">
                            <input class="form-control" type="text" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>">
                        </div>
                        <div class="col-md-7 staff_name">
                            <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>">
                        </div>
                        <div class="col-md-12">
                            <h1>Services Provided</h1>   
                            <div class="service_prov">                 
                                <div class="checkbox">
                                    <label><input id="all_service" type="checkbox" />All Services</label>
                                </div>
                                <?php
                                    if($service != false){
                                        foreach($service as $s){
                                            echo '<div class="checkbox">';
                                            echo '<label><input type="checkbox" name="service[]" value="'.$s['service_id'].'" '.set_checkbox('service',$s['service_id']).' />'.$s['service_name'].'</label>';
                                            echo '</div>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-7">
				        <div class="row working_hours">
                            <h1>Working Hours</h1>   

                            <div class="checkbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Monday</p>
                                    </div>
                                    <div class="col-md-1">
                                        <label>
                                            <input type="checkbox" name="day[]" value="monday">
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select-style">
                                            <select name="start_time[]" data-day="monday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0" selected>8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0">5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">   
                                            <select name="end_time[]" data-day="monday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0">8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0" selected>5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">                                    
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Tuesday</p>
                                    </div>
                                    <div class="col-md-1">
                                        <label>
                                            <input type="checkbox" name="day[]" value="tuesday">
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select-style">
                                            <select name="start_time[]" data-day="tuesday" disabled>
                                                    <option value="0.0">12:00 am (midnight)</option>
                                                    <option value="0.30">12:30 am </option>
                                                    <option value="1.0">1:00 am </option>
                                                    <option value="1.30">1:30 am </option>
                                                    <option value="2.0">2:00 am </option>
                                                    <option value="2.30">2:30 am </option>
                                                    <option value="3.0">3:00 am </option>
                                                    <option value="3.30">3:30 am </option>
                                                    <option value="4.0">4:00 am </option>
                                                    <option value="4.30">4:30 am </option>
                                                    <option value="5.0">5:00 am </option>
                                                    <option value="5.30">5:30 am </option>
                                                    <option value="6.0">6:00 am </option>
                                                    <option value="6.30">6:30 am </option>
                                                    <option value="7.0">7:00 am </option>
                                                    <option value="7.30">7:30 am </option>
                                                    <option value="8.0" selected>8:00 am </option>
                                                    <option value="8.30">8:30 am </option>
                                                    <option value="9.0">9:00 am </option>
                                                    <option value="9.30">9:30 am </option>
                                                    <option value="10.0">10:00 am </option>
                                                    <option value="10.30">10:30 am </option>
                                                    <option value="11.0">11:00 am </option>
                                                    <option value="11.30">11:30 am </option>
                                                    <option value="12.0">12:00 pm (noon)</option>
                                                    <option value="12.30">12:30 pm </option>
                                                    <option value="13.0">1:00 pm </option>
                                                    <option value="13.30">1:30 pm </option>
                                                    <option value="14.0">2:00 pm </option>
                                                    <option value="14.30">2:30 pm </option>
                                                    <option value="15.0">3:00 pm </option>
                                                    <option value="15.30">3:30 pm </option>
                                                    <option value="16.0">4:00 pm </option>
                                                    <option value="16.30">4:30 pm </option>
                                                    <option value="17.0">5:00 pm </option>
                                                    <option value="17.30">5:30 pm </option>
                                                    <option value="18.0">6:00 pm </option>
                                                    <option value="18.30">6:30 pm </option>
                                                    <option value="19.0">7:00 pm </option>
                                                    <option value="19.30">7:30 pm </option>
                                                    <option value="20.0">8:00 pm </option>
                                                    <option value="20.30">8:30 pm </option>
                                                    <option value="21.0">9:00 pm </option>
                                                    <option value="21.30">9:30 pm </option>
                                                    <option value="22.0">10:00 pm </option>
                                                    <option value="22.30">10:30 pm </option>
                                                    <option value="23.0">11:00 pm </option>
                                                    <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">
                                            <select name="end_time[]" data-day="tuesday" disabled>
                                                    <option value="0.0">12:00 am (midnight)</option>
                                                    <option value="0.30">12:30 am </option>
                                                    <option value="1.0">1:00 am </option>
                                                    <option value="1.30">1:30 am </option>
                                                    <option value="2.0">2:00 am </option>
                                                    <option value="2.30">2:30 am </option>
                                                    <option value="3.0">3:00 am </option>
                                                    <option value="3.30">3:30 am </option>
                                                    <option value="4.0">4:00 am </option>
                                                    <option value="4.30">4:30 am </option>
                                                    <option value="5.0">5:00 am </option>
                                                    <option value="5.30">5:30 am </option>
                                                    <option value="6.0">6:00 am </option>
                                                    <option value="6.30">6:30 am </option>
                                                    <option value="7.0">7:00 am </option>
                                                    <option value="7.30">7:30 am </option>
                                                    <option value="8.0">8:00 am </option>
                                                    <option value="8.30">8:30 am </option>
                                                    <option value="9.0">9:00 am </option>
                                                    <option value="9.30">9:30 am </option>
                                                    <option value="10.0">10:00 am </option>
                                                    <option value="10.30">10:30 am </option>
                                                    <option value="11.0">11:00 am </option>
                                                    <option value="11.30">11:30 am </option>
                                                    <option value="12.0">12:00 pm (noon)</option>
                                                    <option value="12.30">12:30 pm </option>
                                                    <option value="13.0">1:00 pm </option>
                                                    <option value="13.30">1:30 pm </option>
                                                    <option value="14.0">2:00 pm </option>
                                                    <option value="14.30">2:30 pm </option>
                                                    <option value="15.0">3:00 pm </option>
                                                    <option value="15.30">3:30 pm </option>
                                                    <option value="16.0">4:00 pm </option>
                                                    <option value="16.30">4:30 pm </option>
                                                    <option value="17.0" selected>5:00 pm </option>
                                                    <option value="17.30">5:30 pm </option>
                                                    <option value="18.0">6:00 pm </option>
                                                    <option value="18.30">6:30 pm </option>
                                                    <option value="19.0">7:00 pm </option>
                                                    <option value="19.30">7:30 pm </option>
                                                    <option value="20.0">8:00 pm </option>
                                                    <option value="20.30">8:30 pm </option>
                                                    <option value="21.0">9:00 pm </option>
                                                    <option value="21.30">9:30 pm </option>
                                                    <option value="22.0">10:00 pm </option>
                                                    <option value="22.30">10:30 pm </option>
                                                    <option value="23.0">11:00 pm </option>
                                                    <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Wednesday</p>
                                    </div>
                                    <div class="col-md-1">
                                        <label>
                                            <input type="checkbox" name="day[]" value="wednesday">
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                    					<div class="select-style">
                                            <select name="start_time[]" data-day="wednesday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0" selected>8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0">5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">
                                            <select name="end_time[]" data-day="wednesday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0">8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0" selected>5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="row">     
                                    <div class="col-md-3">
                                        <p>Thursday</p>
                                    </div> 
                                    <div class="col-md-1">                          
                                        <label>
                                            <input type="checkbox" name="day[]" value="thursday">
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                    					<div class="select-style">
                                            <select name="start_time[]" data-day="thursday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0" selected>8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0">5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">   
                                            <select name="end_time[]" data-day="thursday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0">8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0" selected>5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Friday</p>
                                    </div>
                                    <div class="col-md-1">
                                        <label>
                                            <input type="checkbox" name="day[]" value="friday">
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                    					<div class="select-style">
                                            <select name="start_time[]" data-day="friday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0" selected>8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0">5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">
                                            <select name="end_time[]" data-day="friday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0">8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0" selected>5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Saturday</p>
                                    </div>
                                    <div class="col-md-1">
                                        <label>
                                            <input type="checkbox" name="day[]" value="saturday">
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                    					<div class="select-style">
                                            <select name="start_time[]" data-day="saturday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0" selected>8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0">5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">
                                            <select name="end_time[]" data-day="saturday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0">8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0" selected>5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Sunday</p>
                                    </div>
                                    <div class="col-md-1">
                                        <label>
                                            <input type="checkbox" name="day[]" value="sunday">
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                    					<div class="select-style">
                                            <select name="start_time[]" data-day="sunday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0" selected>8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0">5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">
                                            <select name="end_time[]" data-day="sunday" disabled>
                                                <option value="0.0">12:00 am (midnight)</option>
                                                <option value="0.30">12:30 am </option>
                                                <option value="1.0">1:00 am </option>
                                                <option value="1.30">1:30 am </option>
                                                <option value="2.0">2:00 am </option>
                                                <option value="2.30">2:30 am </option>
                                                <option value="3.0">3:00 am </option>
                                                <option value="3.30">3:30 am </option>
                                                <option value="4.0">4:00 am </option>
                                                <option value="4.30">4:30 am </option>
                                                <option value="5.0">5:00 am </option>
                                                <option value="5.30">5:30 am </option>
                                                <option value="6.0">6:00 am </option>
                                                <option value="6.30">6:30 am </option>
                                                <option value="7.0">7:00 am </option>
                                                <option value="7.30">7:30 am </option>
                                                <option value="8.0">8:00 am </option>
                                                <option value="8.30">8:30 am </option>
                                                <option value="9.0">9:00 am </option>
                                                <option value="9.30">9:30 am </option>
                                                <option value="10.0">10:00 am </option>
                                                <option value="10.30">10:30 am </option>
                                                <option value="11.0">11:00 am </option>
                                                <option value="11.30">11:30 am </option>
                                                <option value="12.0">12:00 pm (noon)</option>
                                                <option value="12.30">12:30 pm </option>
                                                <option value="13.0">1:00 pm </option>
                                                <option value="13.30">1:30 pm </option>
                                                <option value="14.0">2:00 pm </option>
                                                <option value="14.30">2:30 pm </option>
                                                <option value="15.0">3:00 pm </option>
                                                <option value="15.30">3:30 pm </option>
                                                <option value="16.0">4:00 pm </option>
                                                <option value="16.30">4:30 pm </option>
                                                <option value="17.0" selected>5:00 pm </option>
                                                <option value="17.30">5:30 pm </option>
                                                <option value="18.0">6:00 pm </option>
                                                <option value="18.30">6:30 pm </option>
                                                <option value="19.0">7:00 pm </option>
                                                <option value="19.30">7:30 pm </option>
                                                <option value="20.0">8:00 pm </option>
                                                <option value="20.30">8:30 pm </option>
                                                <option value="21.0">9:00 pm </option>
                                                <option value="21.30">9:30 pm </option>
                                                <option value="22.0">10:00 pm </option>
                                                <option value="22.30">10:30 pm </option>
                                                <option value="23.0">11:00 pm </option>
                                                <option value="23.30">11:30 pm </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                

                        </div>
                    </div>
                                    <button class="addStaffbtn btn btn-primary" type="submit">Add </button>
                </div>
             </form>
                         <a href="<?php echo base_url('mts/view_staff');?>"><button class="addStaffbtn1 btn btn-primary">Back</button></a>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){ //check all services checkbox when all the others are also checked (after loading)
    if($('input[name="service[]"]:checked').length == $('input[name="service[]"]').length){
        $('#all_service').prop('checked',true);
    }
});
</script>
<script> // disable/enable time dropdowns for clicked day checkbox
    $(document).ready(function(){
        $('input[name="day[]"]').click(function(event){
            var day = $(event.target).val();
            if($(this).prop('checked')==true){
                $('select[data-day="'+day+'"]').prop('disabled',false);
            }
            else{
                $('select[data-day="'+day+'"]').prop('disabled',true);
            }
        });
    });
</script>
<script> // check all other checkbox when all service checkbox is clicked
$(document).ready(function(){
    $('#all_service').click(function(){
        if($(this).prop('checked') == true){
            $('input[name="service[]"]').prop('checked',true);
        }
        else{
            $('input[name="service[]"]').prop('checked',false);
        }
    });
});
</script>
<script> // make all service checkbox checked when all the others are also checked/clicked
$(document).ready(function(){
    $('input[name="service[]"]').click(function(){
        if($('input[name="service[]"]:checked').length == $('input[name="service[]"]').length){
            $('#all_service').prop('checked',true);
        }
        else
            $('#all_service').prop('checked',false);
    });
});
</script>

</body>

</html>