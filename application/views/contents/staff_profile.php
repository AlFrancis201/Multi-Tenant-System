<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Staff Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('mts/view_staff'); ?>"><i class="fa fa-user"></i> Staff Management</a></li>
        <li class="active">Staff Profile</li>
      </ol>
    </section>

    <div class="row staff_profile">
        <div class="col-md-12">
            <a href="<?php echo base_url('mts/del_staff/'.$staff_id); ?>"><button class="rightside btn btn-primary" >Delete Service</button></a>
            <button class="rightside btn btn-primary" id="edit-button">Edit Service</button>
            <form id="addStaffForm">
                <div id="errors"></div>
                <div class="row ">
                    <div class="col-md-5 name_service">
                    <h1>Name</h1>                       
                        <div class="col-md-7 staff_name">
                            <input class="form-control info" type="text" name="first_name" placeholder="First Name" value="<?=$first_name?>" disabled />
                        </div>
                        <div class="col-md-7 staff_name">
                            <input class="form-control info" type="text" name="last_name" placeholder="Last Name" value="<?=$last_name?>" disabled />
                        </div>
                        

                        <div class="col-md-12">
                        <h1>Services Provided</h1>     
                            <div class="service_prov">                                                  
                                <div class="checkbox">
                                    <label><input id="all_service" type="checkbox" disabled />All Services</label>
                                </div>
                            <?php
                                if($service != false){
                                    foreach($service as $s){
                                        echo '<div class="checkbox">';
                                        if(in_array($s['service_id'], $serviceProvided)){
                                            echo '<label><input type="checkbox" name="service[]" value="'.$s['service_id'].'" checked disabled />'.$s['service_name'].'</label>';
                                        }
                                        else
                                            echo '<label><input type="checkbox" name="service[]" value="'.$s['service_id'].'" disabled />'.$s['service_name'].'</label>';
                                        echo '</div>';
                                    }
                                }
                            ?>
                            </div>   
                        </div>                     



                    </div>
                    <div class="col-md-7">
                        <div class="row working_hours">

                            <h1>&nbsp; Working Hours</h1>                        
                            <div class="checkbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Monday</p>
                                    </div>
                                    <div class="col-md-1">
                                        <label>
                                            <input type="checkbox" name="day[]" value="monday" disabled />
                                        </label>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="select-style">
                                        <select  name="start_time[]" data-day="monday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00" selected>8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00">5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
                                            <option value="23.30">11:30 pm </option>
                                        </select>
                                        </div>                                        
                                        <span>to</span>
                                        <div class="select-style">                                        
                                        <select  name="end_time[]" data-day="monday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00">8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00" selected>5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
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
                                            <input type="checkbox" name="day[]" value="tuesday" disabled />
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select-style">                                        
                                        <select name="start_time[]" data-day="tuesday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00" selected>8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00">5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
                                            <option value="23.30">11:30 pm </option>
                                        </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">                                        
                                        <select  name="end_time[]" data-day="tuesday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00">8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00" selected>5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
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
                                            <input type="checkbox" name="day[]" value="wednesday" disabled />
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select-style">                                                               
                                        <select  name="start_time[]" data-day="wednesday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00" selected>8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00">5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
                                            <option value="23.30">11:30 pm </option>
                                        </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">                                        
                                        <select  name="end_time[]" data-day="wednesday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00">8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00" selected>5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
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
                                            <input type="checkbox" name="day[]" value="thursday" disabled />
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select-style">                                        
                                        <select  name="start_time[]" data-day="thursday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00" selected>8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00">5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
                                            <option value="23.30">11:30 pm </option>
                                        </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">                                        
                                        <select  name="end_time[]" data-day="thursday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00">8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00" selected>5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
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
                                            <input type="checkbox" name="day[]" value="friday" disabled />
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select-style">                                        
                                        <select  name="start_time[]" data-day="friday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00" selected>8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00">5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
                                            <option value="23.30">11:30 pm </option>
                                        </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">                                        
                                        <select  name="end_time[]" data-day="friday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00">8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00" selected>5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
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
                                            <input type="checkbox" name="day[]" value="saturday" disabled />
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select-style">                                        
                                        <select  name="start_time[]" data-day="saturday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00" selected>8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00">5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
                                            <option value="23.30">11:30 pm </option>
                                        </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">                                        
                                        <select  name="end_time[]" data-day="saturday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00">8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00" selected>5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
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
                                            <input type="checkbox" name="day[]" value="sunday" disabled />
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select-style">                                        
                                        <select  name="start_time[]" data-day="sunday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00" selected>8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00">5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
                                            <option value="23.30">11:30 pm </option>
                                        </select>
                                        </div>
                                        <span>to</span>
                                        <div class="select-style">                                        
                                        <select  name="end_time[]" data-day="sunday" disabled>
                                            <option value="0.00">12:00 am (midnight)</option>
                                            <option value="0.30">12:30 am </option>
                                            <option value="1.00">1:00 am </option>
                                            <option value="1.30">1:30 am </option>
                                            <option value="2.00">2:00 am </option>
                                            <option value="2.30">2:30 am </option>
                                            <option value="3.00">3:00 am </option>
                                            <option value="3.30">3:30 am </option>
                                            <option value="4.00">4:00 am </option>
                                            <option value="4.30">4:30 am </option>
                                            <option value="5.00">5:00 am </option>
                                            <option value="5.30">5:30 am </option>
                                            <option value="6.00">6:00 am </option>
                                            <option value="6.30">6:30 am </option>
                                            <option value="7.00">7:00 am </option>
                                            <option value="7.30">7:30 am </option>
                                            <option value="8.00">8:00 am </option>
                                            <option value="8.30">8:30 am </option>
                                            <option value="9.00">9:00 am </option>
                                            <option value="9.30">9:30 am </option>
                                            <option value="10.00">10:00 am </option>
                                            <option value="10.30">10:30 am </option>
                                            <option value="11.00">11:00 am </option>
                                            <option value="11.30">11:30 am </option>
                                            <option value="12.00">12:00 pm (noon)</option>
                                            <option value="12.30">12:30 pm </option>
                                            <option value="13.00">1:00 pm </option>
                                            <option value="13.30">1:30 pm </option>
                                            <option value="14.00">2:00 pm </option>
                                            <option value="14.30">2:30 pm </option>
                                            <option value="15.00">3:00 pm </option>
                                            <option value="15.30">3:30 pm </option>
                                            <option value="16.00">4:00 pm </option>
                                            <option value="16.30">4:30 pm </option>
                                            <option value="17.00" selected>5:00 pm </option>
                                            <option value="17.30">5:30 pm </option>
                                            <option value="18.00">6:00 pm </option>
                                            <option value="18.30">6:30 pm </option>
                                            <option value="19.00">7:00 pm </option>
                                            <option value="19.30">7:30 pm </option>
                                            <option value="20.00">8:00 pm </option>
                                            <option value="20.30">8:30 pm </option>
                                            <option value="21.00">9:00 pm </option>
                                            <option value="21.30">9:30 pm </option>
                                            <option value="22.00">10:00 pm </option>
                                            <option value="22.30">10:30 pm </option>
                                            <option value="23.00">11:00 pm </option>
                                            <option value="23.30">11:30 pm </option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </form>
        </div>
        </div>
                                    <a href="<?php echo base_url('mts/view_staff');?>" ><button class="btn btn-primary rightside backStaff">Back</button> </a>
    </div>
</div>

<script>
$(document).ready(function(){
    $.ajax({
        url: "<?php echo base_url('mts/ajax_get_staff_hours/'.$staff_id); ?>",
        dataType: "json",
        success: function(data){
            $.each(data,function(key,value){
                $('input[value="'+value["day"]+'"]').prop('checked',true);
                $('select[data-day="'+value["day"]+'"] > option:selected').prop('selected',false);
                $('select[name="start_time[]"][data-day="'+value["day"]+'"] > option[value="'+value["start_time"]+'"]').prop('selected',true);
                $('select[name="end_time[]"][data-day="'+value["day"]+'"] > option[value="'+value["end_time"]+'"]').prop('selected',true);
            });
        }
    });
});
</script>
<script>
$(document).ready(function(){ //check all services checkbox when all the others are also checked (after loading)
    if($('input[name="service[]"]:checked').length == $('input[name="service[]"]').length){
        $('#all_service').prop('checked',true);
    }
});
</script>
<script> // when click edit button, put submit and cancel button
$(document).ready(function(){
    $('#edit-button').click(function(){
        $('input').prop('disabled',false);
        $('input[name="day[]"]:checked').each(function(){
            var day = ($(this).val());
            $('select[data-day="'+day+'"]').prop('disabled',false);
        });
        
        $('form').append('<button id="submit-button" class="form-control btn btn-primary">Submit</button>');
        $('form').append('<button id="cancel-button" class="form-control btn btn-primary">Cancel</button>');
    });
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
<script>
$(document).on('click','#cancel-button',function(event){
    event.preventDefault();
    location.reload();
});
</script>
<script>
$(document).on('click','#submit-button',function(event){
    event.preventDefault();
    var formData = $('#addStaffForm').serialize();
    $.ajax({
        url: "<?php echo base_url('mts/update_staff/'.$staff_id); ?>",
        data: formData,
        type: "POST",
        async: false,
        
        success: function(data){
            if(data=='success'){
                location.reload();
            }
            else
                $('#errors').html(data);
                $('html, body').scrollTop(0);
        }
    });
});
</script>
</body>
</html>