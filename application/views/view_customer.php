<div class="main">
    <a href="<?php echo base_url('mts/add_customer'); ?>"><button>Add Customer</button></a>
    <h2>All Customers</h2>
    <?php
    if($customer != false){
        foreach($customer as $c){
            echo '<ul>';
            echo '<li><a href="'.base_url('mts/view_service_profile/'.$c['cust_id']).'">'.$c['cust_name'].'</a></li>';
            echo '</ul>';
        }
    }
    ?>
</body>
</html>