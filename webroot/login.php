<?php
session_start();

$title = 'Colorado Repository'

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <div class="container-fluid">
    <body align=center>
      <div class="page-header">
        <h2><?= $title ?></h2>
      </div>
      <?php
        require_once('../lib/db.interface.php');
        require_once('../lib/db.class.php');
        require_once('../models/user.class.php');
        require_once('../models/user_manager.abstract.php');
        require_once('../models/user_manager.class.php');


        $action = isset($_POST["action"])?$_POST["action"]:'';
        $username = isset($_POST["mail"])?$_POST["mail"]:'';
        $password = isset($_POST["pass"])?$_POST["pass"]:'';
        $error_msg = array();


        switch ($action) {
          case 'login':
            $userManager = new UserManager();
            $user = $userManager->authenticate($username, $password);

            // if(strlen($username)<3) {
            //   $error_msg[] = "Username too short";
            //   include('../views/login.php');
            //   break;
            // }

            if($user) {
              include('../views/user_welcome.php');
              $_SESSION['current_user'] = $user;
            }
            else {
              $error_msg[] = 'Username or Password is incorrect';
              include('../views/user_login.php');
            }
            break;

          default:
            include('../views/user_login.php');
            break;
        }
      ?>

  </body>
</div>
</html>
