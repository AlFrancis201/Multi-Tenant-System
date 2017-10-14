<div class="main">
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