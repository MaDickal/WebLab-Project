<?php
  require_once('../../lib/db.interface.php');
  require_once('../../lib/db.class.php');
  require_once('../../flora/models/flora.class.php');
  require_once('../../flora/models/flora_manager.class.php');
?>

<html>
  <head>
    <title>Colorado Repository</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>
  <body align=center>
    <h2>Colorado Repository</h2>
    <?php
      $floraManager = new FloraManager();
      $flora = $floraManager->getAllFlora();
      include('../../flora/views/flora_view_list.php');
      ?>
