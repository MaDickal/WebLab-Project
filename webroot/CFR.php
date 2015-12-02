<?php
  require_once('../lib/db.interface.php');
  require_once('../lib/db.class.php');
  require_once('../models/flora.class.php');
  require_once('../models/flora_manager.class.php');
  require_once('../models/user.class.php');

  session_start();

  if(!isset($_SESSION['current_user'])) {
    header('Location: ../webroot/login.php');
  }
  else {
    $current_user = $_SESSION['current_user'];
  }

  $action = isset($_POST["action"])?$_POST["action"]:'';


  switch ($action) {

    case 'save_flora':
      include('../views/flora_submit.php');
      break;
    default:
      include('../views/flora_submit_form.php');
      break;
   }
 ?>
