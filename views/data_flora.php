<?php
require_once('../lib/db.interface.php');
require_once('../lib/db.class.php');
require_once('../models/flora.class.php');
require_once('../models/flora_manager.class.php');

$floraManager = new FloraManager();
$plants = $floraManager->getAllFlora();

function getUserEmail($arg){

  if(!is_numeric($arg)) return FALSE;

    $db = new Db();

    $uid = $db -> quote($arg);
    $results = $db -> select("SELECT mail from users where uid = $uid limit 1");

    $mail = $results[0]['mail'];
    print $mail;
}

if (isset($_POST['csv'])){
  $file = fopen("/Users/Matt/Downloads/FloraData.csv", "w");

  $db = new Db();

  $columns = $db->select("SHOW COLUMNS FROM flora");
  foreach($columns as $name){
    $names[] = $name['Field'];
  }
  fputcsv($file, $names);

  $results = $db->select("SELECT * FROM flora");
  foreach ($results as $result){
    fputcsv($file, $result);
  }
  fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>Flora Data</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

  <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#flora').DataTable();
    } );
  </script>
</head>
<body>
  <div class="container">
  <form method="post" class="form-horizontal" align="center">
    <a href="data_formDirect.php" class="btn btn-danger pull-left">Back to Table Select</a>
    <h2>Flora Data
    <input type="submit" value="Download CSV" name="csv" class="btn btn-success pull-right"/>
  </h2>
  </form>
</div>
  <div class="container">
      <div class="table-responsive">
        <table id="flora" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Flora Name</th>
                        <th>Soil Type</th>
                        <th>Weather</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Notes</th>
                        <th>Email</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Flora Name</th>
                      <th>Soil Type</th>
                      <th>Weather</th>
                      <th>Location</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Name</th>
                      <th>Notes</th>
                      <th>Email</th>
                      <th>View</th>
                    </tr>
                </tfoot>
                <tbody>
                  <?php foreach($plants as $plant){ ?>
                    <tr>
                      <td><?= $plant->getFID() ?></td>
                      <td><?= $plant->getfName() ?></td>
                      <td><?= $plant->getSoil() ?></td>
                      <td><?= $plant->getWeather() ?></td>
                      <td><?= $plant->getLocation() ?></td>
                      <td><?= $plant->getDate() ?></td>
                      <td><?= $plant->getTime() ?></td>
                      <td><?= $plant->getyName() ?></td>
                      <td><?= $plant->getNotes() ?></td>
                      <td><?= getUserEmail($plant->getUID()) ?></td>
                      <td><a href='data_formDirect.php?form=view_flora&target=<?= $plant->getFID() ?>' class="btn btn-info">view</a></td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
          </div>
      </div>
    </body>
