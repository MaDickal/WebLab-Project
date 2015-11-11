<?php
  require_once('../lib/db.interface.php');
  require_once('../lib/db.class.php');
  require_once('../models/flora.class.php');
  require_once('../models/manager.abstract.php');
  require_once('../models/flora_manager.class.php');

  $floraManager = new FloraManager();
  $arr = array();
  $arr["fname"] = isset($_POST["fname"])?$_POST["fname"]:'';
  $arr["soil"] = isset($_POST["soil"])?$_POST["soil"]:'';
  $arr["weather"] = isset($_POST["weather"])?$_POST["weather"]:'';
  $arr["location"] = isset($_POST["location"])?$_POST["location"]:'';
  $arr["date"] = isset($_POST["date"])?$_POST["date"]:'';
  $arr["time"] = isset($_POST["time"])?$_POST["time"]:'';
  $arr["yname"] = isset($_POST["yname"])?$_POST["yname"]:'';
  $arr["notes"] = isset($_POST["notes"])?$_POST["notes"]:'';
  $plant = new Flora();
  $plant->Pollinate($arr);
  $floraManager->save($plant);

?>


<html>
<header>
  <title>Thank you!</title>
</header>
<body>
  <h2>Thank you for your submission!</h2>
    <h4>The data you submitted is as follows:<br></h4>
      <h5>
      <label>Flora Name: <?= $_POST['fname']; ?></label><br>
      <label>Soil Type: <?= $_POST['soil']; ?></label><br>
      <label>Weather: <?= $_POST['weather']; ?></label><br>
      <label>Location: <?= $_POST['location']; ?></label><br>
      <label>Date: <?= $_POST['date']; ?></label><br>
      <label>Time: <?= $_POST['time']; ?></label><br>
      <label>Your Name: <?= $_POST['yname']; ?></label><br>
      <label>Additional Notes: <?= $_POST['notes']; ?></label><br>
    </h5>

      <a href='../webroot/CFR.php' class='button'>Submit Another</a>
</body>
</html>
