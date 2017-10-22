
<nav class="nav navbar navbar-default navbar-fixed-top">
  <div class="container-fluid bg">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>       
      <a class="navbar-brand">
        <img src="<?php echo base_url('assets/img/Ico.svg')?>" id="logo" class="logo"/>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">    
    <ul class="nav navbar-nav pull-right">
      <li><a href="<?php echo base_url('login'); ?>">SIGN IN</a></li>
      <li><a href="<?php echo base_url('registration');?>">CREATE AN ACCOUNT</a></li>
    </ul>
    </div>
  </div>
</nav>

<div id="wrapper">
	<div class="full-page section1">
		<div class="container1">
            <div class="row">		
                <div class="col-md-1">
                </div>
                <div class="col-md-8 homepageHead">                
				 <h1>Make it in time using 
				 	<br /><strong>Tempus</strong></h1>
                    <a href="<?php echo base_url('registration'); ?>" class="btton btn btn-info" role="button">SIGN UP NOW!</a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
	</div>
    

        <div class="full-page">
            <div class=" container">
				<div class="row section2">
                    <div class="col-md-5">
                        <h2>Small things matter</h2>
                        <p>Clients can use our built-in calendar where you can see your real-time calendar availability</p>
                    </div>
                    <div class="col-md-7">
                        <img id="kalendaryo" src="<?php echo base_url('assets/img/ps1.png')?>" alt="calendar" width="100%" height="100%">
                    </div>
                </div>
            </div>
         </div>
		
    <div class="full-page">
        <div class="container">
		<div class="row section3">
			<div class="col-md-8">
				<img id="control" src="<?php echo base_url('assets/img/device2.jpg')?>" alt="control" width="100%" height="100%">
        	</div>    
        	<div class="col-md-4">
			 	<h2>Take it all with you</h2>
				<p>Switch between devices, and pick up wherever you left off.</p>
			</div>
		</div>
		</div>
	</div>
	
		
	<div class="full-page">
		<div class="container ">
				<div class="row perks">
					<div class="align-center col-md-4">
						<img id="bilog" src="<?php echo base_url('assets/img/icon1.png')?>">
						<h3>Suggest Options</h3>
						<p>Select things like dates, provider, customer and even time of your appointment.</p>
					</div>
					<div class="align-center col-md-4">
						<img id="bilog" src="<?php echo base_url('assets/img/icon2.png')?>">
						<h3>Manage your staff</h3>
						<p>You get to choose what kind of labor the appointed staff will do.</p>
					</div>
					<div class="align-center col-md-4">
						<img id="bilog" src="<?php echo base_url('assets/img/icon3.png')?>">
						<h3>Monitor staff services</h3>
						<p>You can input duration, description, price and service provider in that specific kind of service.</p>
					</div>
			</div>
		</div>
	</div>
				<div class="footer">
					Tempus Multi-Tenant System | <i class="fa fa-fw fa-facebook-official"></i><a href="#">tempuscompany</a> | <i class="fa fa-fw fa-envelope-square"></i><a href="#">tempuscompany@gmail.com</a>
				</div>	


</div>	

 
	 
  



<script>
    vph = $(window).height();

    $('.full-page').height(vph);

/*
    $(window).resize(function () {
    $('.full-page').css('height', $(window).height() * 0.8);
});
$(function(){ $(window).resize() });*/
</script>

</body>
</html>
