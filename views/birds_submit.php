<?php
  require_once('../lib/db.interface.php');
  require_once('../lib/db.class.php');
  require_once('../models/birds.class.php');
  require_once('../models/birds_manager.class.php');
  require_once('../models/user.class.php');

  $birdsManager = new BirdsManager();
  $arr = array();
  $arr["species"] = isset($_POST["species"])?$_POST["species"]:'';
  $arr["gender"] = isset($_POST["gender"])?$_POST["gender"]:'';
  if(isset($_POST["geoweather"]) && $_POST["geoweather"] != ''){
    $arr["weather"] = $_POST["geoweather"]." Current: ".$_POST['temp']." Min: ".$_POST['temp_min']." Max: ".$_POST['temp_max'];
  } else {
    $arr["weather"] = $_POST["weather"];
  }
  if(isset($_POST["geoloc"]) && $_POST["geoloc"] != ''){
    $arr["geoloc"] = $_POST["geoloc"]." Lat: ".$_POST['lat']." Lon: ".$_POST['lon'];
  } else {
    $arr["geoloc"] = $_POST["location"];
  }
  $arr["distance"] = isset($_POST["distance"])?$_POST["distance"]:'';
  $arr["detected"] = isset($_POST["detected"])?$_POST["detected"]:'';
  $arr["migrant"] = isset($_POST["migrant"])?$_POST["migrant"]:'';
  $arr["nest"] = isset($_POST["nest"])?$_POST["nest"]:'';
  $arr["eggs"] = isset($_POST["eggs"])?$_POST["eggs"]:'';
  $arr["yname"] = isset($_POST["yname"])?$_POST["yname"]:'';
  $arr["notes"] = isset($_POST["notes"])?$_POST["notes"]:'';
  $arr["users_uid"] = isset($_SESSION["current_user"])?$_SESSION["current_user"]->getUID():'';
  $bird = new Bird();
  $bird->Ascend($arr);
  $birdsManager->_add($bird);

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
  <h2>Thank you for your submission!</h2>
    <h4>The data you submitted is as follows:<br></h4>
    <br>
    <table align=center>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Bird Species:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['species']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Gender:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['gender']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Weather:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['weather']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Location:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['geoloc']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Distance:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['distance']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>How was it detected:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['detected']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Migrant:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['migrant']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Did you observe a nest:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['nest']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>How many eggs were in the nest:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['eggs']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Your Name:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['yname']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Additional Notes:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['notes']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
    </table>
    <br>
<a href='../views/formSelect.php' class="btn btn-success">Submit Another</a>
<a href='../webroot/user.php?action=logout' class="btn btn-danger">Log Out</a>
</body>
</div>
</html>
