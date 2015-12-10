<?php
require_once('../lib/db.interface.php');
require_once('../lib/db.class.php');
require_once('../models/flora.class.php');
require_once('../models/flora_manager.class.php');

$floraManager = new FloraManager();
$plant = $floraManager->getFlora($target);

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
        <h3>Viewing Information for Flora: </h3>
        <h2><small><?= $plant->getFID() ?></small></h2>
      </div>
      <br>
      <table align=center>
        <div class="row">
            <div class="col-xs-3">
            </div>
            <div class="col-xs-3" align=right>
              <b>Flora Name:</b>
            </div>
            <div class="col-xs-3" align=left>
              <?= $plant->getfName() ?>
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
            <?= $plant->getSoil() ?>
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
            <?= $plant->getWeather() ?>
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
            <?= $plant->getLocation() ?>
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
            <?= $plant->getDate() ?>
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
            <?= $plant->getTime() ?>
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
            <?= $plant->getyName() ?>
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
            <?= $plant->getNotes() ?>
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
            <?= getUserEmail($plant->getUID()) ?>
          </div>
          <div class="col-xs-3">
          </div>
        </div>
      </table>
      <br>
        <a href='../webroot/data_formDirect.php?action=edit_flora&target=<?= $plant->getFID() ?>' class="btn btn-warning">Edit This Submit</a>
        <a href='../webroot/data_formDirect.php?action=edit_flora&target=<?= $plant->getFID() ?>' class="btn btn-danger">Delete This Submit</a>
        <br>
        <a href='../webroot/data_formDirect.php?action=Flora' class="btn btn-primary">View All Flora</a>
