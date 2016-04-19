<?php include '../view/header.php';?>

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
          <li class="active"><a href="browse_matches.php">Browse Matches<span class="sr-only">(current)</span></a> </li>
        <li><a href="quick_match.php">Quick Match</a> </li>
        <!--<li><a href="#">Link</a> </li>
        <li><a href="#">Link</a> </li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php">Logout</a></li>
        <li><a href="profile.php">Profile</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">

    <h1 class="text-center">Administration Page</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center">Remove Users</h2>
            
            <!-- add table to show users with delete buttons. Funciton will delete user from database -->
        	
            <!-- display a table of products -->
                <table>
                    <tr>
                        <th>User</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php foreach ($allUsers as $auser) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($auser['username']); ?></td>
                        <td><?php echo htmlspecialchars($auser['first_name'] . " " . $auser['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($auser['email']); ?></td>
                        <td><form action="." method="post">
                            <input type="hidden" name="action"
                                   value="delete_user">
                            <input type="hidden" name="user_id"
                                   value="<?php echo htmlspecialchars($auser['user_id']); ?>">
                            <input type="submit" value="Delete">
                        </form></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
    

    
    
    
        </div> <!-- end of column -->
    
        <div class="col-md-6">
            <h2 class="text-center">Create User Type</h2>
            
            <!-- add data to show user's bio and type. Function will add type to user table-->
        	
    

    
    </div> <!-- end of column -->
</div><!-- end of row -->

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
      	<div class="col-xs-2"><img class="img-circle" src="../images/32X32.gif" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="../images/32X32.gif" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="../images/32X32.gif" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="../images/32X32.gif" alt=""></div>        
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
      <h2>Testimonials</h2>
      <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="../images/35X35.gif" alt="..."> </a> </div>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
      </div>
      <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="../images/35X35.gif" alt="..."> </a> </div>
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
  
  
<?php include '../view/footer.php';?>