<?php
foreach($error_msg as $err) {
    print "<b>" . $err . "</b><br>";
}
?>
  <form name="login" action="login.php" method="post">
      <input type="hidden" name="action" value="login">
    <div class="row">
      <div class="col-xs-12">
        <label for="name">Email:</label>
        <input type="text" name="mail" placeholder="Email" value="<?= $username ?>" required>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <label for="password">Password:</label>
        <input type="password" name="pass" placeholder="Password" value="<?= $password ?>" pattern=".{1,50}" title="between 1 and 50 characters -_-" required>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <input type="submit" value="Login" class="button">
      </div>
    </div>
  </form>
