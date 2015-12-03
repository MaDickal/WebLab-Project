<h2>You are now logged in</h2>

<a href='../views/formSelect.php' class="btn btn-success">Submit Data</a>
<br>
<?php if($user->getAdmin() == 'Yes'){?>
<br>
<a href="user.php" class="btn btn-primary">View All Users</a>
<a href="data.php" class="btn btn-primary">View All Data</a>
<br>
<?php } ?>
<br>
<a href='user.php?action=logout' class="btn btn-danger">Log Out</a>
