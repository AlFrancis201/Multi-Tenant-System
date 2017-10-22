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
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box tableService">
            <div class="box-header with-border">
              <h3 class="box-title">Service List</h3>
           <a class="pull-right" href="<?php echo base_url('mts/add_service'); ?>"><button class="btn btn-primary" id="serviceAdd">Add Service</button></a> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Service Name</th>
                  <th style="width: 60px"></th>
                </tr>


                              <?php
                                  if($service_record != false){
                                      foreach($service_record as $s){
                                        echo '<tr>';
                                        echo '<td>'.$s['service_name'].'</a></td>';
                                        echo '<td><a href="'.base_url('mts/view_service_profile/'.$s['service_id']).'"> View</a></td>';
                                        echo '</tr>';
                                      }
                                  }
                              ?>

              </table>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div> 
    </section>




</div>
</body>
</html>
