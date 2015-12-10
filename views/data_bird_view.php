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
      <div class="container">
        <h3>Viewing Information for Bird: </h3>
        <h2><small><?= $bird->getBID() ?></small></h2>
      </div>
      <br>
      <table align=center>
        <div class="row">
          <div class="col-xs-3">
          </div>
          <div class="col-xs-3" align=right>
            <b>Bird Species:</b>
          </div>
          <div class="col-xs-3" align=left>
            <?= $bird->getSpecies(); ?>
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
            <?= $bird->getGender(); ?>
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
            <?= $bird->getWeather(); ?>
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
            <?= $bird->getLocation(); ?>
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
            <?= $bird->getDistance(); ?>
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
            <?= $bird->getDetected(); ?>
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
            <?= $bird->getMigrant(); ?>
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
            <?= $bird->getNest(); ?>
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
            <?= $bird->getEggs(); ?>
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
            <?= $bird->getyName(); ?>
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
            <?= $bird->getNotes(); ?>
          </div>
          <div class="col-xs-3">
          </div>
        </div>
      </table>
      <br>
        <a href='../webroot/data_formDirect.php?action=edit_bird&target=<?= $bird->getBID() ?>' class="btn btn-warning">Edit This Submit</a>
        <a href='../webroot/data_formDirect.php?action=delete_bird&target=<?= $bird->getBID() ?>' class="btn btn-danger">Delete This Submit</a>
        <br>
        <a href='../webroot/data_formDirect.php?action=Birds' class="btn btn-primary">View All Flora</a>
