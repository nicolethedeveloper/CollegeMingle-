<?php include '../view/header.php'; ?>

<body>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="../index.php">CollegeMingle</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Home<span class="sr-only">(current)</span></a> </li>
        <li><a href="#">Link</a> </li>
        <li><a href="#">Link</a> </li>
        <li><a href="#">Link</a> </li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="registration.php">Register</a> </li>
          <li><a href="login.php">Login</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">

	<h1 class="text-center">CollegeMingle Login</h1>
	<hr>
  	<div class="row">
  
            <div class="col-md-3 col-md-offset-1">
                
                <form action="." method="post">
                    <input type="hidden" name="action" value="login" />
                    
                    <label>Username:</label>
                    <input type="text" name="uname_login" /><br><br>

                    <label>Password:</label>
                    <input type="password" name="pword_login" /><br><br>

                    <input type="submit" name="login_btn" value="Login" />
                </form>
   	   </div>
       
       <div class="col-md-7 col-md-offset-1">
       		<img src="../images/couple2.jpeg" class="img-responsive" alt="couple2">
       </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
</div>

<!-- footer -->
<hr>
<div class="container">
  <div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
      <h2>Contact Us</h2>
      <address>
      <strong>MyCompany, Inc.</strong><br>
      Sunny Autumn Plaza, Grand Coulee,<br>
      CA, 91308-4075, US<br>
      <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <h4>Social</h4>
      <div class="row">
      	<div class="col-xs-2"><img class="img-circle" src="images/32X32.gif" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="images/32X32.gif" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="images/32X32.gif" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="images/32X32.gif" alt=""></div>        
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
      <h2>Testimonials</h2>
      <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="images/35X35.gif" alt="..."> </a> </div>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
      </div>
      <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="images/35X35.gif" alt="..."> </a> </div>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12">
      <h2>About Us</h2>
      <p>College Mingle is America's #1 dating website for college students!  <br>Our staff at College Mingle is committed to matching college and university students across the United States.</p>
      <p>If you are single and looking for a match in your area, don't hesitate to register and choose from one of our four subcription packages.</p>
    </div>
  </div>
</div>
  <hr>
  
  <?php include '../view/footer.php'; ?>
