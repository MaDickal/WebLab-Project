<?php
  require_once('../../lib/db.interface.php');
  require_once('../../lib/db.class.php');
  require_once('../models/birds.class.php');
  require_once('../models/birds_manager.class.php');

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
  $bird = new Birds();
  $bird->Ascend($arr);
  $birdsManager->_add($bird);

?>


<html>
<header>
  <title>Thank you!</title>
  <link rel="stylesheet" type="text/css" href="../../css/base.css">
</header>
<body align=center>
  <h2>Thank you for your submission!</h2>
    <h4>The data you submitted is as follows:<br></h4>
      <form>
      <label>Bird Name:</label>
      <h5><?= $arr['bname']; ?></h5>
      <br>
      <label>Gender:</label>
      <h5><?= $arr['gender']; ?></h5>
      <br>
      <label>Weather:</label>
      <h5><?= $arr['weather']; ?></h5>
      <br>
      <label>Location:</label>
      <h5><?= $arr['location']; ?></h5>
      <br>
      <label>Date:</label>
      <h5><?= $arr['date']; ?></h5>
      <br>
      <label>Time:</label>
      <h5><?= $arr['time']; ?></h5>
      <br>
      <label>Your Name:</label>
      <h5><?= $arr['yname']; ?></h5>
      <br>
      <label>Additional Notes:</label>
      <h5><?= $arr['notes']; ?></h5>
      <br>
    </form>

      <a href='../../formSelect.php' class='button'>Submit Another</a>
</body>
</html>
