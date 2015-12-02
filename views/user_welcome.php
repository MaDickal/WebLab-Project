<h2>You are now logged in</h2>

<?php if($user->getAdmin() == 'Yes'){?>
<a href="user.php" class="button2">View All Users</a>
<br>
<?php } ?>
<a href='user.php?action=logout' class='button2'>Log Out</a>
