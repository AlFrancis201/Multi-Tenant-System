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
        <a href="<?php echo base_url('mts/add_customer'); ?>"><button>Add Customer</button></a>
        <h2>All Customers</h2>
        <?php
        if($customer != false){
            foreach($customer as $c){
                echo '<ul>';
                echo '<li><a href="'.base_url('mts/view_customer_profile/'.$c['cust_id']).'">'.$c['cust_name'].'</a></li>';

                echo '</ul>';
            }
        }
        ?>
    <section>
</div>
</body>
</html>