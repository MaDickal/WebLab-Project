<?php
foreach($error_msg as $err) {
    print "<b>" . $err . "</b><br>";
}
?>
<html>
  <body align=center>
    <h2>User Login</h2>
    <form name="login" action="login.php" method="post">
        <input type="hidden" name="action" value="login">

        <label for="mail">Email</label>
        <input type="text" name="mail" placeholder="Email" value="<?= $mail ?>" required><br>
        <label for="pass">Password</label>
        <input type="password" name="pass" placeholder="Password" value="<?= $pass ?>" pattern=".{5,50}" title="between 5 and 50 characters -_-" required><br>

        <input type="submit" value="Login" class="button">
    </form>
  </body>
</html>
