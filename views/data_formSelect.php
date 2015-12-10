<?php
require_once('../lib/db.interface.php');
require_once('../lib/db.class.php');
require_once('../models/user.class.php');
require_once('../models/user_manager.abstract.php');
require_once('../models/user_manager.class.php');

$title = 'Colorado Repository';

session_start();

if(!isset($_SESSION['current_user'])) {
  header('Location: ../webroot/login.php');
}
else {
  $current_user = $_SESSION['current_user'];
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
  <h1>Colorado Repository</h1>

  <form action="../webroot/data_formDirect.php" method="get" class="form-horizontal">
    <div class="form-group">
      <div class="row">
        <label class="radio-inline"><input type="radio" name="action" value="Flora">Flora</label>
        <label class="radio-inline"><input type="radio" name="action" value="Birds">Birds</label>
      </div>
      <input type="submit" value="Submit" class="btn btn-success"/>
    </div>
  </form>

  <a href='../webroot/user.php?action=logout' class="btn btn-danger">Log Out</a>
