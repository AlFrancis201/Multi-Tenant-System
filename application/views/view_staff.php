<div class="main">
    <a href="<?php echo base_url('mts/add_staff'); ?>"><button>Add Staff</button></a>
    <h2>All Staff</h2>
    <?php
    foreach($staff_record as $s){
        echo '<ul>';
        echo '<li><a href="'.base_url('mts/view_staff_profile/'.$s['staff_id']).'">'.$s['first_name'].' '.$s['last_name'].'</a></li>';
        echo '</ul>';
    }
    ?>
</div>
</body>
</html>