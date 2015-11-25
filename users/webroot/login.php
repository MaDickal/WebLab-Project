<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="../../css/base.css">
  </head>
  <body align=center>
    <?php

    require_once('../../lib/db.interface.php');
    require_once('../../lib/db.class.php');
    require_once('../models/user.class.php');
    require_once('../models/manager.abstract.php');
    require_once('../models/user_manager.class.php');

    $action = isset($_POST["action"])?$_POST["action"]:'';
    $mail = isset($_POST["mail"])?$_POST["mail"]:'';
    $pass = isset($_POST["pass"])?$_POST["pass"]:'';
    $error_msg = array();

    switch ($action) {
      case 'login':
        $userManager = new UserManager();
        $user = $userManager->authenticate($mail, $pass);

        if($user) {
          // include('../views/welcome.php');
          $thanks = 'Thank you for logging in!';
          include('../../formSelect.php');
          $_SESSION['current_user'] = $user;
        }
        else {
          $error_msg[] = 'Username or Password is incorrect';
          include('../views/login.php');
        }

        break;

      default:
        include('../views/login.php');
        break;
    }

    ?>
</body>
</html>
