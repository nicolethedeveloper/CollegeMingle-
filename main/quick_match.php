<?php include '../view/header.php'; ?>
<?php include '../view/nav_loggedin.php'; ?>

<div class="container">

	<h1 class="text-center">Your Personalized Match</h1>
	<hr>
        <div class="row">
            <div class="col-md-6">
                <?php if ($match_id == 1) : ?>
                    <img src="../images/man1.jpeg" alt="man1" width="400" height="359" class="img-responsive">
                <?php elseif ($match_id == 2) : ?>
                    <img src="../images/man3.jpg" alt="man3" width="400" height="359" class="img-responsive">
                <?php elseif ($match_id == 3) : ?>
                    <img src="../images/man2.jpg" alt="man2" width="400" height="359" class="img-responsive"> 
                <?php elseif ($match_id == 4) : ?>
                    <img src="../images/man4.jpg" alt="man4" width="400" height="359" class="img-responsive">   
                <?php endif; ?>
            </div>
            
            <div class="col-md-6">
                <?php foreach ($match as $amatch) : ?>
                    <h2><?php echo htmlspecialchars($amatch['first_name'] . ' ' . $amatch['last_name']); ?></h2>
                    <br>
                    <form action="." method="POST">
                    
                    
                        <h4><?php echo "My Type: " . htmlspecialchars($amatch['user_type']); ?>
                        <?php echo "<br><br>Types I Like: " . htmlspecialchars($amatch['wanted_type']); ?>
                        <?php echo "<br><br>Age: " . htmlspecialchars($amatch['age']); ?>
                        <?php echo "<br><br>City: " . htmlspecialchars($amatch['city']); ?>
                        <?php echo "<br><br>State: " . htmlspecialchars($amatch['state']); ?>
                        <?php echo "<br><br>College: " . htmlspecialchars($amatch['college']); ?>
                        <?php echo "<br><br>Major: " . htmlspecialchars($amatch['major']); ?>
                        <?php echo "<br><br>Year: " . htmlspecialchars($amatch['year']); ?>                      
                        <?php echo "<br><br>About Me: " . htmlspecialchars($amatch['bio']); ?></h4>
                   
                        <input type="hidden" name="user_id"
                               value="<?php echo htmlspecialchars($amatch['user_id']); ?>">
                                    
                        <?php endforeach; ?>
                       
                    <br><br>
                    <label>Interested in getting to know this match?</label>
                    <input type="hidden" name="action" value="email_match" />
                    <input type="submit" value="Email Match" />
                </form>
            </div>
            
            
        </div>
            

<?php include '../view/footer.php'; ?>


