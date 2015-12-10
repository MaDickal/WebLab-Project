<?php
  require_once('../lib/db.interface.php');
  require_once('../lib/db.class.php');
  require_once('../models/flora.class.php');
  require_once('../models/flora_manager.class.php');
  require_once('../models/user.class.php');

  $floraManager = new FloraManager();
  $arr = array();
  $arr["fname"] = isset($_POST["fname"])?$_POST["fname"]:'';
  $arr["soil"] = isset($_POST["soil"])?$_POST["soil"]:'';
  if(isset($_POST["geoweather"]) && $_POST["geoweather"] != ''){
    $arr["weather"] = $_POST["geoweather"]." Current: ".$_POST['temp']." Min: ".$_POST['temp_min']." Max: ".$_POST['temp_max'];
  } else {
    $arr["weather"] = $_POST["weather"];
  }
  if(isset($_POST["geoloc"]) && $_POST["geoloc"] != ''){
    $arr["location"] = $_POST["geoloc"]." Lat: ".$_POST['lat']." Lon: ".$_POST['lon'];
  } else {
    $arr["location"] = $_POST["location"];
  }
  $arr["date"] = isset($_POST["date"])?$_POST["date"]:'';
  $arr["time"] = isset($_POST["time"])?$_POST["time"]:'';
  $arr["yname"] = isset($_POST["yname"])?$_POST["yname"]:'';
  $arr["notes"] = isset($_POST["notes"])?$_POST["notes"]:'';
  $arr["users_uid"] = isset($_SESSION["current_user"])?$_SESSION["current_user"]->getUID():'';
  $plant = new Flora();
  $plant->Pollinate($arr);
  $floraManager->_add($plant);

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
          <b>Flora Name:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['fname']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Soil Type:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['soil']; ?>
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
          <?= $arr['location']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Date:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['date']; ?>
        </div>
        <div class="col-xs-3">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
        </div>
        <div class="col-xs-3" align=right>
          <b>Time:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['time']; ?>
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
