<?php
require_once('../lib/db.interface.php');
require_once('../lib/db.class.php');
require_once('../models/birds.class.php');
require_once('../models/birds_manager.class.php');

$birdsManager = new BirdsManager();
$birds = $birdsManager->getAllBirds();

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
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>Birds Data</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

  <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#birds').DataTable();
    } );
  </script>
</head>
<body>
  <h2 align=center>Birds Data</h2>
  <div class="container">
      <div class="table-responsive">
        <table id="birds" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Species</th>
                        <th>Gender</th>
                        <th>Distance</th>
                        <th>Detected</th>
                        <th>Migrant</th>
                        <th>Nest</th>
                        <th>Eggs</th>
                        <th>Name</th>
                        <th>Notes</th>
                        <th>Email</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Species</th>
                      <th>Gender</th>
                      <th>Distance</th>
                      <th>Detected</th>
                      <th>Migrant</th>
                      <th>Nest</th>
                      <th>Eggs</th>
                      <th>Name</th>
                      <th>Notes</th>
                      <th>Email</th>
                      <th>View</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php foreach($birds as $bird){ ?>
                    <tr>
                      <td><?= $bird->getBID() ?></td>
                      <td><?= $bird->getSpecies() ?></td>
                      <td><?= $bird->getGender() ?></td>
                      <td><?= $bird->getDistance() ?></td>
                      <td><?= $bird->getDetected() ?></td>
                      <td><?= $bird->getMigrant() ?></td>
                      <td><?= $bird->getNest() ?></td>
                      <td><?= $bird->getEggs() ?></td>
                      <td><?= $bird->getyName() ?></td>
                      <td><?= $bird->getNotes() ?></td>
                      <td><?= getUserEmail($bird->getUID()) ?></td>
                      <td><a href='data_formDirect.php?form=view_bird&target=<?= $bird->getFID() ?>' class="btn btn-info">view</a></td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
          </div>
      </div>
<body>
