<?php
require_once('../lib/db.interface.php');
require_once('../lib/db.class.php');
require_once('../models/flora.class.php');
require_once('../models/flora_manager.class.php');
require_once('../models/birds.class.php');
require_once('../models/birds_manager.class.php');

session_start();

if(!isset($_SESSION['current_user'])) {
  header('Location: login.php');
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <div class="container">
    <body align=center>
      <?php
        $action = isset($_GET["action"])?$_GET["action"]:'';
        $target = isset($_GET["target"])?$_GET["target"]:'';

        switch ($action) {

          case 'Flora':
            include('../views/data_flora.php');
            break;
          case 'Birds':
            include('../views/data_birds.php');
            break;
          case 'view_flora':
            include('../views/data_flora_view.php');
            break;
          case 'view_bird':
            include('../views/data_bird_view.php');
            break;
          case 'edit_flora':
            $floraManager = new FloraManager();
            $plant = $floraManager->getFlora($target);
            include('../views/flora_edit.php');
            break;
          case 'edit_bird':
            $birdsManager = new BirdsManager();
            $bird = $birdsManager->getBird($target);
            include('../views/bird_edit.php');
            break;
          case 'save_flora':
            $floraManager = new FloraManager();
            $arr = array();
            $arr["id"] = isset($_GET["id"])?$_GET["id"]:'';
            $arr["fname"] = isset($_GET["fname"])?$_GET["fname"]:'';
            $arr["soil"] = isset($_GET["soil"])?$_GET["soil"]:'';
            if(isset($_GET["geoweather"]) && $_GET["geoweather"] != ''){
              $arr["weather"] = $_GET["geoweather"]." Current: ".$_GET['temp']." Min: ".$_GET['temp_min']." Max: ".$_GET['temp_max'];
            } else {
              $arr["weather"] = $_GET["weather"];
            }
            if(isset($_GET["geoloc"]) && $_GET["geoloc"] != ''){
              $arr["location"] = $_GET["geoloc"]." Lat: ".$_GET['lat']." Lon: ".$_GET['lon'];
            } else {
              $arr["location"] = $_GET["location"];
            }
            $arr["date"] = isset($_GET["date"])?$_GET["date"]:'';
            $arr["time"] = isset($_GET["time"])?$_GET["time"]:'';
            $arr["yname"] = isset($_GET["yname"])?$_GET["yname"]:'';
            $arr["notes"] = isset($_GET["notes"])?$_GET["notes"]:'';
            $arr["users_uid"] = isset($_GET["users_uid"])?$_GET["users_uid"]:'';
            $plant = new Flora();
            $plant->Pollinate($arr);
            $floraManager->_update($plant);
            include('../views/flora_saved.php');
            break;
          case 'save_bird':
            $birdsManager = new BirdsManager();
            $arr = array();
            $arr["id"] = isset($_GET["id"])?$_GET["id"]:'';
            $arr["species"] = isset($_GET["species"])?$_GET["species"]:'';
            $arr["gender"] = isset($_GET["gender"])?$_GET["gender"]:'';
            if(isset($_GET["geoweather"]) && $_GET["geoweather"] != ''){
              $arr["weather"] = $_GET["geoweather"]." Current: ".$_GET['temp']." Min: ".$_GET['temp_min']." Max: ".$_GET['temp_max'];
            } else {
              $arr["weather"] = $_GET["weather"];
            }
            if(isset($_GET["geoloc"]) && $_GET["geoloc"] != ''){
              $arr["location"] = $_GET["geoloc"]." Lat: ".$_GET['lat']." Lon: ".$_GET['lon'];
            } else {
              $arr["location"] = $_GET["location"];
            }
            $arr["distance"] = isset($_GET["distance"])?$_GET["distance"]:'';
            $arr["detected"] = isset($_GET["detected"])?$_GET["detected"]:'';
            $arr["migrant"] = isset($_GET["migrant"])?$_GET["migrant"]:'';
            $arr["nest"] = isset($_GET["nest"])?$_GET["nest"]:'';
            $arr["eggs"] = isset($_GET["eggs"])?$_GET["eggs"]:'';
            $arr["yname"] = isset($_GET["yname"])?$_GET["yname"]:'';
            $arr["notes"] = isset($_GET["notes"])?$_GET["notes"]:'';
            $arr["users_uid"] = isset($_GET["users_uid"])?$_GET["users_uid"]:'';
            $bird = new Bird();
            $bird->Ascend($arr);
            $birdsManager->_update($bird);
            include('../views/bird_saved.php');
            break;
          default:
            include('../views/data_formSelect.php');
            break;
         }
          ?>
