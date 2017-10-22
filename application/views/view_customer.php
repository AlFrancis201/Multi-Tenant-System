<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Customer Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('mts'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer Management</li>
      </ol>
    </section>
        <section class="content">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box tableService">
            <div class="box-header with-border">
              <h3 class="box-title">Customer List</h3>
        <a class="pull-right" href="<?php echo base_url('mts/add_customer'); ?>"><button class="btn btn-primary">Add Customer</button></a> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Service Name</th>
                  <th style="width: 60px"></th>
                </tr>
                    <?php
                    if($customer != false){
                        foreach($customer as $c){
                            echo '<tr>';
                            echo '<td>'.$c['cust_name'].'</td>';
                            echo '<td><a href="'.base_url('mts/view_customer_profile/'.$c['cust_id']).'">View</a></td>';
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