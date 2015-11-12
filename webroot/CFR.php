<?php
  require_once('../lib/db.interface.php');
  require_once('../lib/db.class.php');
  require_once('../models/flora.class.php');
  require_once('../models/flora_manager.class.php');


  $action = isset($_POST["action"])?$_POST["action"]:'';
  // $target = isset($_POST["target"])?$_POST["target"]:'';


  switch ($action) {

    case 'save_flora':
      include('../views/submit.php');
      break;

    // case 'Admin':
    //   include('../views/flora_table.php');
    //   break;
    //
     default:
      //  $floraManager = new FloraManager();
      //  $plants = $floraManager->getAllPlants();
       include('../views/submit_form.php');
       break;
   }
 ?>
