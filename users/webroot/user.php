<?php
require_once('../../lib/db.interface.php');
require_once('../../lib/db.class.php');
require_once('../models/user.class.php');
require_once('../models/manager.abstract.php');
require_once('../models/user_manager.class.php');

session_start();

if(!isset($_SESSION['current_user'])) {
  header('Location: login.php');
}
else {
  $current_user = $_SESSION['current_user'];
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="../../css/base.css">
  </head>
  <body>
    <h2>User Login</h2>
    <?php
      $action = isset($_GET["action"])?$_GET["action"]:'';
      $target = isset($_GET["target"])?$_GET["target"]:'';


      switch ($action) {
        case 'view_user':
          $userManager = new UserManager();
          $user = $userManager->getUser($target);
          include('../views/user_view.php');
          break;

        case 'delete_user':
          $userManager = new UserManager();
          $userManager->delete($target);
          header('Location: user.php');
          break;

        case 'add_user':
          $userManager = new UserManager();
          $user = new User();
          include('../views/user_add_edit.php');
          break;

        case 'edit_user':
          $userManager = new UserManager();
          $user = $userManager->getUser($target);
          include('../views/user_add_edit.php');
          break;

        case 'save_user':
          $userManager = new UserManager();
          $arr = array();
          $arr["uid"] = isset($_GET["uid"])?$_GET["uid"]:'';
          $arr["name"] = isset($_GET["name"])?$_GET["name"]:'';
          $arr["mail"] = isset($_GET["mail"])?$_GET["mail"]:'';
          $arr["pass"] = isset($_GET["pass"])?$_GET["pass"]:'';
          $user = new User();
          $user->hydrate($arr);
          $userManager->save($user);
          //header('Location: user.php');
          break;

        case 'logout':
          session_destroy();
          include('../views/logout.php');
          break;

        default:
          $userManager = new UserManager();
          $users = $userManager->getAllUsers();
          include('../views/user_view_list.php');
          break;
      }
    ?>

</body>
</html>
