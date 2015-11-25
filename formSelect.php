<?php
require_once('lib/db.interface.php');
require_once('lib/db.class.php');

?>

<html>
<header>
  <title>Colorado Repository</title>
  <link rel="stylesheet" type="text/css" href="css/base.css">
</header>
<body align=center>
  <h1>Colorado Repository</h1>
  <form action="../../formDirect.php" method="POST">
    <input type="radio" name="form" value="Flora">Flora
    <input type="radio" name="form" value="Birds">Birds<br>

    <input type="submit" value="Submit" class="button"/>


    <h3><?= $thanks ?></h3>

    <a href='user.php?action=logout' class='button'>Log Out</a>

  </form>
