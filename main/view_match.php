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
          <li><a href="?action=browse_matches">Browse Matches<span class="sr-only">(current)</span></a> </li>
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

	<h1 class="text-center">View Match</h1>
	<hr>
        <div class="row">
            <div class="col-md-6">
                <img src="../images/man1.jpeg" alt="man1" width="400" height="359" class="img-responsive">
            </div>
            
            <div class="col-md-6">
                <h2>Adam Jones</h2>
                <form action="." method="get">
                    <table>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>&nbsp;</th>
                            </tr>
                            <?php foreach ($technicians as $technician) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($technician['firstName']); ?></td>
                                <td><?php echo htmlspecialchars($technician['lastName']); ?></td>
                                <td><?php echo htmlspecialchars($technician['email']); ?></td>
                                <td><?php echo htmlspecialchars($technician['phone']); ?></td>
                                <td><?php echo htmlspecialchars($technician['password']); ?></td>
                                <td><form action="." method="post">
                                    <input type="hidden" name="action"
                                           value="delete_technician">
                                    <input type="hidden" name="id"
                                           value="<?php echo htmlspecialchars($technician['techID']); ?>">
                                    <input type="submit" value="Delete">
                                </form></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    <input type="submit" value="Email Match" />
                </form>
            </div>
            
            
        </div>
            

<?php include '../view/footer.php'; ?>

