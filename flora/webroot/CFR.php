<?php
  require_once('../../lib/db.interface.php');
  require_once('../../lib/db.class.php');
  require_once('../models/flora.class.php');
  require_once('../models/flora_manager.class.php');


  $action = isset($_POST["action"])?$_POST["action"]:'';


  switch ($action) {

    case 'save_flora':
      include('../views/submit.php');
      break;
     default:
       include('../views/submit_form.php');
       break;
   }
 ?>
