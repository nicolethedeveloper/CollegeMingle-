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
                <?php foreach ($users as $user) : ?>
                    <h2><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?></h2>
                    <form action="." method="get">
                    
                    
                        <h4><?php echo "My Type: " . htmlspecialchars($user['user_type']); ?>
                        <?php echo "<br><br>Types I Like: " . htmlspecialchars($user['wanted_type']); ?>
                        <?php echo "<br><br>Age: " . htmlspecialchars($user['age']); ?>
                        <?php echo "<br><br>City: " . htmlspecialchars($user['city']); ?>
                        <?php echo "<br><br>State: " . htmlspecialchars($user['state']); ?>
                        <?php echo "<br><br>College: " . htmlspecialchars($user['college']); ?>
                        <?php echo "<br><br>Major: " . htmlspecialchars($user['major']); ?>
                        <?php echo "<br><br>Year: " . htmlspecialchars($user['year']); ?>                      
                        <?php echo "<br><br>About Me: " . htmlspecialchars($user['bio']); ?></h4>
                   <!-- <table>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>&nbsp;</th>
                            </tr>
                            
                            <tr>
                                <td>College: <?php echo htmlspecialchars($user1['college']); ?></td>
                                <td><?php echo htmlspecialchars($user1['last_name']); ?></td>
                                <td><?php echo htmlspecialchars($user1['city']); ?></td>
                                <td><?php echo htmlspecialchars($user1['state']); ?></td>
                                <td><?php echo htmlspecialchars($user1['college']); ?></td>
                                <td><form action="." method="post">
                                    <input type="hidden" name="action"
                                           value="delete_technician">
                                    <input type="hidden" name="id"
                                           value="<?php echo htmlspecialchars($user1['user_id']); ?>">
                                    <input type="submit" value="Delete">
                                </form></td>
                            </tr>
                            <?php endforeach; ?>
                        </table> -->
                    <br><br>
                    <label>Interested in getting to know this match?</label>
                    <input type="submit" name="action" value="Email Match" />
                </form>
            </div>
            
            
        </div>
            

<?php include '../view/footer.php'; ?>

