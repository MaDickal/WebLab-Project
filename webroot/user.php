<?php
require_once('../lib/db.interface.php');
require_once('../lib/db.class.php');
require_once('../models/user.class.php');
require_once('../models/user_manager.abstract.php');
require_once('../models/user_manager.class.php');

$title = 'Colorado Repository';

session_start();

if(!isset($_SESSION['current_user'])) {
  header('Location: login.php');
}
else {
  $current_user = $_SESSION['current_user'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <div class="container">
    <body align=center>
      <div class="page-header">
        <h2><?= $title ?></h2>
      </div>
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
            include('../views/user_delete.php');
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
            $arr["mail"] = isset($_GET["mail"])?$_GET["mail"]:'';
            $arr["pass"] = isset($_GET["pass"])?$_GET["pass"]:'';
            $arr["admin"] = isset($_GET["admin"])?$_GET["admin"]:'';
            $user = new User();
            $user->hydrate($arr);
            $userManager->save($user);
            include('../views/user_saved.php');
            break;

          case 'logout':
            session_destroy();
            include('../views/user_logout.php');
            break;

          default:
            $userManager = new UserManager();
            $users = $userManager->getAllUsers();
            include('../views/user_view_list.php');
            break;
        }
      ?>

    </body>
  </div>
</html>
