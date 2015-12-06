<?php

  $action = isset($_GET["form"])?$_GET["form"]:'';
  $target = isset($_GET["target"])?$_GET["target"]:'';

  switch ($action) {

    case 'Flora':
      include('../views/data_flora.php');
      break;
    case 'Birds':
      include('../views/data_birds.php');
      break;
    case 'view_flora':
      include('../views/data_flora_view.php');
      break;
    case 'view_bird':
      include('../views/data_bird_view.php');
      break;
    default:
      include('../views/data_formSelect.php');
      break;
   }
?>
