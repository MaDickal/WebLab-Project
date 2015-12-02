<h3>This user has been saved.</h3>

<?php

session_start();

if(!isset($_SESSION['current_user'])) {
  header('Location: login.php');
}
else {
  $current_user = $_SESSION['current_user'];
}

if($current_user->getAdmin() == 'Yes'){?>
<a href="user.php" class="btn btn-primary">View All Users</a>
<br>
<?php } ?>
<a href="login.php" class="btn btn-primary">Login</a>
