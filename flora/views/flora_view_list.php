<table align=center cellspacing="15">
    <tr>
        <td>Flora ID</td>
        <td>Flora Name</td>
        <td>Soil Type</td>
        <td>Weather</td>
        <td>Location</td>
        <td>Date</td>
        <td>Time</td>
        <td>Submitter Name</td>
        <td>Notes</td>
        <td>User ID</td>
    </tr>
  <?php foreach($flora as $plant){ ?>
  <tr align=center>
    <td><?= $plant->getFID() ?></td>
    <td><?= $plant->getfName() ?></td>
    <td><?= $plant->getSoil() ?></td>
    <td><?= $plant->getWeather() ?></td>
    <td><?= $plant->getLocation() ?></td>
    <td><?= $plant->getDate() ?></td>
    <td><?= $plant->getTime() ?></td>
    <td><?= $plant->getyName() ?></td>
    <td><?= $plant->getNotes() ?></td>
    <td><?= $plant->getUID() ?></td>
    <!-- <td><a href='games.php?action=view_game&target=<?= $game->getGID() ?>' class='button'>View</a></td></td> -->
  </tr>
  <!-- <?php } ?> -->
</table>
