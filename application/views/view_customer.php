<div class="main">
    <a href="<?php echo base_url('mts/add_customer'); ?>"><button>Add Customer</button></a>
    <h2>All Customers</h2>
    <?php
    if($service_record != false){
        foreach($service_record as $s){
            echo '<ul>';
            echo '<li><a href="'.base_url('mts/view_service_profile/'.$s['service_id']).'">'.$s['service_name'].'</a></li>';
            echo '</ul>';
        }
    }
    ?>
<div class="col-md-8 col-xs-8 col-sm-8 contents">
<table class="table table-stripped table-responsive table-hover ">
	
	<thead>
	<th>NAME</th>
	<th><a href="<?php echo base_url('mts/customer_profile'); ?>"><button>VIEW</button></a></th>
	

	</thead>

</table>
</div>
	
</div>

</body>
</html>