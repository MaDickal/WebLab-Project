<?php
  $action = isset($_POST["form"])?$_POST["form"]:'';

  switch ($action) {

    case 'Flora':
      header('Location: flora/webroot/CFR.php');
      break;
    case 'Birds':
      header('Location: wildlife/webroot/CAW.php');
      break;
    default:
      header('Location: formSelect.php');
      break;
   }
?>
