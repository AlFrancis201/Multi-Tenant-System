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
        <a href="<?php echo base_url('mts/add_staff'); ?>"><button>Add Staff</button></a>
        <h2>All Staff</h2>
        <?php
        foreach($staff_record as $s){
            echo '<ul>';
            echo '<li><a href="'.base_url('mts/view_staff_profile/'.$s['staff_id']).'">'.$s['first_name'].' '.$s['last_name'].'</a></li>';
            echo '</ul>';
        }
        ?>
    </section>
</div>
</body>
</html>