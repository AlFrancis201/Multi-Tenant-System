<div class="main">
    <div class="row addService">
        <div class="col-lg-12 col-md-12">
            <form id="addServiceForm" class="customform" method="post">
                <div class="col-md-12">
                <h2>Service Details</h2>
                <div class="col-md-9">
                    <label for="svc_name">Service Name:</label>
                    <input class="form-control" type="text" placeholder="Enter Service Name" name="svc_name" value="<?php echo $svc_name; ?>" disabled>
                    <label for="svc_desc">Service Description:</label>
                    <input class="form-control" type="text" placeholder="Service Description" id="desc" name="svc_desc" value="<?php echo $svc_desc; ?>" disabled>
                </div>
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-md-9">
                    <label for="duration">Duration:</label>
                    <input class="form-control" type="text" placeholder="Duration" name="duration" value="<?php echo $duration; ?>" disabled>
                    <label for="price">Price:</label>
                    <input class="form-control" type="text" placeholder="Price" name="price" value="<?php echo $price; ?>" disabled>
                    <!--<input class="form-control" type="submit" value="Submit">-->
                    <!--<button class="form-control view-button">Submit</button>-->
                </div>
            </form>
        </div>
    </div>
</div>