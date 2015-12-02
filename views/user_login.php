<?php
foreach($error_msg as $err) {
    print "<b>" . $err . "</b><br>";
}
?>
  <form name="login" action="login.php" method="post" class="form-horizontal">
    <input type="hidden" name="action" value="login">
    <div class="form-group">
      <div class="row">
        <label for="mail" class="col-xs-4 control-label text-right">Email:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="mail" placeholder="Email" value="<?= $username ?>" required>
          </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <label for="pass" class="col-xs-4 control-label text-right">Password:</label>
          <div class="col-xs-4">
            <input type="password" class="form-control" name="pass" placeholder="Password" value="<?= $password ?>" pattern=".{1,50}" title="between 1 and 50 characters -_-" required>
          </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-xs-12">
          <input type="submit" value="Login" class="btn btn-primary">
        </div>
      </div>
    </div>
  </form>
