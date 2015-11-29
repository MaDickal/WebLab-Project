<?php
  require_once('../../lib/db.interface.php');
  require_once('../../lib/db.class.php');
  require_once('../models/birds.class.php');
  require_once('../models/birds_manager.class.php');


  $action = isset($_POST["action"])?$_POST["action"]:'';


  switch ($action) {

    case 'save_bird':
      include('../views/submit.php');
      break;
     default:
       include('../views/submit_form.php');
       break;
   }
 ?>
