<?php
  $action = isset($_POST["form"])?$_POST["form"]:'';

  switch ($action) {

    case 'Flora':
      header('Location: CFR.php');
      break;
    case 'Birds':
      header('Location: CAW.php');
      break;
    default:
      header('Location: formSelect.php');
      break;
   }
?>
