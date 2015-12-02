<?php
  require_once('../lib/db.interface.php');
  require_once('../lib/db.class.php');
  require_once('../models/birds.class.php');
  require_once('../models/birds_manager.class.php');
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

    case 'save_bird':
      include('../views/birds_submit.php');
      break;
    default:
      include('../views/birds_submit_form.php');
      break;
   }
 ?>
