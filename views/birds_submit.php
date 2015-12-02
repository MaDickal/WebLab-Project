<?php
  require_once('../lib/db.interface.php');
  require_once('../lib/db.class.php');
  require_once('../models/birds.class.php');
  require_once('../models/birds_manager.class.php');
  require_once('../models/user.class.php');

  $birdsManager = new BirdsManager();
  $arr = array();
  $arr["bname"] = isset($_POST["bname"])?$_POST["bname"]:'';
  $arr["gender"] = isset($_POST["gender"])?$_POST["gender"]:'';
  $arr["weather"] = isset($_POST["weather"])?$_POST["weather"]:'';
  $arr["location"] = isset($_POST["location"])?$_POST["location"]:'';
  $arr["date"] = isset($_POST["date"])?$_POST["date"]:'';
  $arr["time"] = isset($_POST["time"])?$_POST["time"]:'';
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
          <b>Bird Name:</b>
        </div>
        <div class="col-xs-3" align=left>
          <?= $arr['bname']; ?>
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
