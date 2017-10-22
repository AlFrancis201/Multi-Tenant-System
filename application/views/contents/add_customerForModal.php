<div class="form-group">
    <label class="control-label col-md-3" for="cname">Name:</label>
    <div class="col-md-9">
        <input type="cname" class="form-control" id="cname" placeholder="Name" name="cname" value="<?php echo (isset($cname)) ? $cname : '';?>" <?php echo (isset($cname)) ? 'disabled' : '';?>>
    </div>
</div>		
<div class="form-group">
    <label class="control-label col-md-3" for="email">Email:</label>
    <div class="col-md-9">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo (isset($email)) ? $email : '';?>" <?php echo (isset($email)) ? 'disabled' : '';?>>
    </div>
</div>		
<div class="form-group">
    <label class="control-label col-md-3" for="mobile">Mobile:</label>
    <div class="col-md-9">
        <input type="text" class="form-control" id="mobile" placeholder="Phone" name="mobile" value="<?php echo (isset($mobile)) ? $mobile : '';?>" <?php echo (isset($mobile)) ? 'disabled' : '';?>>
    </div>
</div>	