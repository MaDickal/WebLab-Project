<?php
require_once('../lib/db.interface.php');
require_once('../lib/db.class.php');
require_once('../models/birds.class.php');
require_once('../models/birds_manager.class.php');

$birdsManager = new BirdsManager();
$bird = $birdsManager->getBird($target);

$target = isset($_GET["target"])?$_GET["target"]:'';

function getUserEmail($arg){

  if(!is_numeric($arg)) return FALSE;

    $db = new Db();

    $uid = $db -> quote($arg);
    $results = $db -> select("SELECT mail from users where uid = $uid limit 1");

    $mail = $results[0]['mail'];
    print $mail;
}
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
  <h3>Viewing Information for Bird: </h3>
  <h2><small>ID: <?= $bird->getBID() ?></small></h2>
<br>
<table align=center>
  <div class="row">
      <div class="col-xs-3">
      </div>
      <div class="col-xs-3" align=right>
        <b>Species:</b>
      </div>
      <div class="col-xs-3" align=left>
        <?= $bird->getSpecies() ?>
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
      <?= $bird->getGender() ?>
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
      <?= $bird->getDistance() ?>
    </div>
    <div class="col-xs-3">
    </div>
  </div>
  <div class="row">
    <div class="col-xs-3">
    </div>
    <div class="col-xs-3" align=right>
      <b>Detection:</b>
    </div>
    <div class="col-xs-3" align=left>
      <?= $bird->getDetected() ?>
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
        <?= $bird->getMigrant() ?>
      </div>
      <div class="col-xs-3">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3">
      </div>
      <div class="col-xs-3" align=right>
        <b>Nest:</b>
      </div>
      <div class="col-xs-3" align=left>
        <?= $bird->getNest() ?>
      </div>
      <div class="col-xs-3">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3">
      </div>
      <div class="col-xs-3" align=right>
        <b>Eggs:</b>
      </div>
      <div class="col-xs-3" align=left>
        <?= $bird->getEggs() ?>
      </div>
      <div class="col-xs-3">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3">
      </div>
      <div class="col-xs-3" align=right>
        <b>Name:</b>
      </div>
      <div class="col-xs-3" align=left>
        <?= $bird->getyName() ?>
      </div>
      <div class="col-xs-3">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3">
      </div>
      <div class="col-xs-3" align=right>
        <b>Notes:</b>
      </div>
      <div class="col-xs-3" align=left>
        <?= $bird->getNotes() ?>
      </div>
      <div class="col-xs-3">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3">
      </div>
      <div class="col-xs-3" align=right>
        <b>Email:</b>
      </div>
      <div class="col-xs-3" align=left>
        <?= getUserEmail($bird->getUID()) ?>
      </div>
      <div class="col-xs-3">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-3">
      </div>
      <div class="col-xs-6" align=center><br>
        <a href="../webroot/data_formDirect.php?form=Birds" class="btn btn-info">View All Birds</a>
      </div>
      <div class="col-xs-3">
      </div>
    </div>
</table>
</body>
</div>
