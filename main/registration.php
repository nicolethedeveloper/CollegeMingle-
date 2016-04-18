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
       <!-- <li class="active"><a href="index.hmtl">Home<span class="sr-only">(current)</span></a> </li>
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
<!-- end of nav -->

<div class="container-fluid"> 
	<div class="row">
    
    <h1 class="text-center">CollegeMingle Registration</h1>
    <hr>
    <h3 class="text-center">Tell Us A Little About Yourself, Then Select Your Type On the Right</h3><br><br>
    	
        <!-- form -->
        <form action="." method="get">
        <div class="col-md-3 col-md-offset-1">
            <input type="hidden" name="action" value="add_user">  <!-- action attribute -->
			
            	<label>I am a <select name="userSex">
                                    <option>Man</option>
                                    <option>Woman</option>
                		</select>
                      looking for a <select name="mateSex">
                			<option>Woman</option>
                                        <option>Man</option>
                                    </select>
                </label><br><br>
                <label>First Name:</label><br>
				<input type="text" name="firstName"><br><br>
                <label>Last Name:</label><br>
				<input type="text" name="lastName"><br><br>
                <label>Age:</label><br>
                <input type="number" name="age"><br><br>
                <label>City:</label><br>
                <input type="text" name="city"><br><br>
                <label>State: </label>                
                <select name="state">
                	<option>North Carolina</option>
                    <option>South Carolina</option>
                    <option>Tennessee</option>
                    <option>Virginia</option>
                </select><br><br>
                <label>College: </label>                
                <select name="college">
                	<option>UNCC</option>
                    <option>USC</option>
                    <option>UT</option>                   
                    <option>VT</option>                    
                </select><br><br>
                <label>Major:</label><br>
                <input type="text" name="major"><br><br>
                <label>Year: </label>  
                <select name="year">
                	<option>Freshman</option>
                    <option>Sophomore</option>
                    <option>Junior</option>                   
                    <option>Senior</option>                    
                </select><br><br>
              </div>
              
              <div class="col-md-4">
              	<label>Email:</label><br>
              	<input type="email" name="email"><br><br>
                <label>Username:</label><br>
                <input type="text" name="username"><br><br>
                <label>Password:</label><br>
                <input type="password" name="password"><br><br>
                <label>Tell us how your best friend would describe you:</label><br>
                <textarea name="bio" rows="10" cols="40"></textarea><br><br><br>
                <input type="submit" name="submitReg_btn">
              </div>
              
          <div class="col-md-2">
           	<h3>Men</h3>
            <p>
                  <label>
                    <input type="radio" name="types" value="john" id="types_0" checked>
                    John</label><br>
                    <span>A nice guy who gets good grades and will treat you right but may be boring</span>
                  <br><br>
                  <label>
                    <input type="radio" name="types" value="alejandro" id="types_1">
                    Alejandro</label><br>
                    <span>An exotic man who will excite you with his style and personality</span>
                  <br><br>
                  <label>
                    <input type="radio" name="types" value="bob" id="types_2">
                    Bob</label><br>
                    <span>A man who doesn't pay much attention to his appearance or grades but will adore you</span>
                  <br><br>
                  <label>
                    <input type="radio" name="types" value="ty" id="types_3">
                    Ty</label><br>
                    <span>A bad boy that will drive you crazy in a good way and a bad way</span>
                  <br>
            </p>
            </div>
              
              <div class="col-md-2">
              	<h3>Women</h3>
                <p>
                  <label>
                    <input type="radio" name="types" value="ashley" id="types_4">
                    Ashley</label><br>
                    <span>A girl next door who is most likely to succeed but would rather be a housewife</span>
                  <br><br>
                  <label>
                    <input type="radio" name="types" value="becky" id="types_5">
                    Becky</label><br>
                    <span>A woman with ample parts to aquire and keep your attention</span>
                  <br><br>
                  <label>
                    <input type="radio" name="types" value="claire" id="types_6">
                    Claire</label><br>
                    <span>A woman with lots of personality and doesn't like to rely on her looks to find someone</span>
                  <br><br>
                  <label>
                    <input type="radio" name="types" value="shonte" id="types_7">
                    Shonte</label><br>
                    <span>A spicy girl with a ton of attitude but will offer you a lot of love</span>
                  <br>
            </p>
              </div>
		</form> 
	</div><!-- end row -->
</div><!-- end container -->





<hr>
<!-- footer -->
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
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, voluptates, soluta velit nostrum ut iste exercitationem vitae ipsum repellendus laudantium ab possimus nemo odio cumque illum nulla laborum blanditiis unde.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, voluptates, soluta velit nostrum ut iste exercitationem vitae ipsum repellendus laudantium ab possimus nemo odio cumque illum nulla laborum blanditiis unde.</p>
    </div>
  </div>
</div>
  <hr>

  <?php include '../view/footer.php'; ?>