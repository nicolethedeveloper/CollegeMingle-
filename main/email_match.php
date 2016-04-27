<?php include '../view/header.php'; ?>
<?php include '../view/nav_loggedin.php'; ?>

<?php foreach ($userEmail as $email) : ?>

<h1 class="text-center">Contact Match</h1>
<hr>

<h3 class="text-center">Don't be shy! Connect with them!</h3>
<h3 class="text-center"><?php echo $email['email']; ?></h3>
<?php endforeach; ?>

<?php include '../view/footer.php'; ?>

