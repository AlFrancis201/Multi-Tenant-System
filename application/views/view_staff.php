<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Staff Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Staff</li>
      </ol>
    </section>

    <section class="content">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box tableStaff">
            <div class="box-header with-border">
              <h3 class="box-title">Staff List</h3>
              <a class="pull-right" href="<?php echo base_url('mts/add_staff'); ?>"><button class="btn btn-primary">Add Staff</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Staff Name</th>
                  <th style="width: 60px"></th>
                </tr>
                    <?php
                    foreach($staff_record as $s){
                        echo '<tr>';
                        echo '<td>'.$s['first_name'].' '.$s['last_name'].'</td>';
                        echo '<td><a href="'.base_url('mts/view_staff_profile/'.$s['staff_id']).'">View</a></td>';

                        echo '</tr>';
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