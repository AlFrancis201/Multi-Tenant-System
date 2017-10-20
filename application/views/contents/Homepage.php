<nav class="nav navbar navbar-default navbar-fixed-top">
  <div class="container-fluid bg">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>       
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('assets/img/Ico.svg')?>" id="logo" class="logo"/>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">    
    <ul class="nav navbar-nav pull-right">
      <li><a href="<?php echo base_url('login'); ?>">SIGN IN</a></li>
      <li><a href="<?php echo base_url('registration'); ?>">CREATE AN ACCOUNT</a></li>
    </ul>
    </div>
  </div>
</nav>


<div id="wrapper"> 
    <div class="section">
        <div class="container container1">
            <div class="row">
                <div class="col-left cold-md-5">
                    <h1>Tempus</h1>
                    <p>Description </p>
                </div>             
                <div class="col-md-5">
                    <a href="#" class="btn btn-info" role="button">Sign Up NOW</a>
                </div> 
            </div>   
        </div>
    </div> 
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2>Catchy Phrase</h2>
                        <p>Description</p>
                    </div>
                    <div class="col-md-9">
                        <img id="kalendaryo" src="<?php echo base_url('assets/img/Kalendaryo.png')?>" alt="calendar" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>       
    <div class="section">
        <div class="top-section">
            <h1> SAD </h1>
        </div>    
        <div class="bottom-section">
            <div class="bottom-content">
                <p><strong>Tempus </strong>Multi-Tenant System</p>    
            </div>
        </div>
    </div>   


</div>


    <script>
        $(document).ready(function() {
            $('#wrapper').fullpage({
         /*       autoScrolling: false*/
            });
        });
    </script>>


</body>
</html>
