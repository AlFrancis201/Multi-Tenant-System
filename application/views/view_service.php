<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Service Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Services</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid box-default sidebar2">
                <ul class="sidebar-menu sad" data-widget="tree">
                  <li class="header2">SERVICE LIST </li>
                              <?php
                                  if($service_record != false){
                                      foreach($service_record as $s){
                                          echo '<li><a class="nav-link" href="'.base_url('mts/view_service_profile/'.$s['service_id']).'">'.$s['service_name'].'</a></li>';
                                      }
                                  }
                              ?>
                </ul>
          </div> 
           <a href="<?php echo base_url('mts/add_service'); ?>"><button class="btn" id="serviceAdd">Add Service</button></a> 
        </div>
        <div class="col-md-9">
          <div class="box box-solid box-default">
            <ul class=" sidebar-menu sad">
              <li class="header2"> CONTENT </li>
            </ul>
            <div class="container">
                  CONTENT
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>
</body>
</html>
