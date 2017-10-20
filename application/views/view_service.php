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


    <a href="<?php echo base_url('mts/add_service'); ?>"><button>Add Service</button></a>
    <h2>All Services</h2>
    <?php
    if($service_record != false){
        foreach($service_record as $s){
            echo '<ul>';
            echo '<li><a href="'.base_url('mts/view_service_profile/'.$s['service_id']).'">'.$s['service_name'].'</a></li>';
            echo '</ul>';
        }
    }
    ?>
</div>
</body>
</html>