<div class="main">
    <form action="<?php echo base_url('mts'); ?>" method="post">
        <input type="checkbox" name="vehicle[]" value="Bike"> I have a bike<br>
        <input type="checkbox" name="vehicle[]" value="Car"> I have a car<br>
        <input type="checkbox" name="vehicle[]" value="Boat" checked> I have a boat<br>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>