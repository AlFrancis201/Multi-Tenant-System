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
    <section class="sidebar sidebar2">
           <a href="<?php echo base_url('mts/add_service'); ?>"><button>Add Service</button></a>
          <!-- Sidebar user panel -->
          <ul class="sidebar-menu sad" data-widget="tree">
            <li class="header2">STAFF LIST</li>
                        <?php
                            if($service_record != false){
                                foreach($service_record as $s){
                                    echo '<li><a class="nav-link" href="'.base_url('mts/view_service_profile/'.$s['service_id']).'">'.$s['service_name'].'</a></li>';
                                }
                            }
                        ?>
          </ul>
    </section>  



</div>
</body>
</html>
