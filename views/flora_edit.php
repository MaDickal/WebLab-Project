<?php
    $soilArray = ['Sand', 'Silt', 'Clay', 'Loam', 'Peat', 'Gravel', 'Rocky'];

    class selectMenu {
        private $items;
        private $options;
        private $selectMenu;

        function __construct($itemArray='') {
            $this->items = $itemArray;
        }

        private function buildOptions() {
          $this->options = "<option value=''>Select a Soil</option>";
            forEach($this->items as $item) {
                $this->options .= "<option value='"
                . $item . "'>"
                . $item . "</option>";
            }
        }

        private function buildSelect() {
            $this->selectMenu = "<select class='form-control' name='soil'>" . $this->options . "</select>";
        }

        public function setOptions($array) {
            $this->items = $array;
        }

        public function makeMenu() {
            $this->buildOptions();
            $this->buildSelect();
            return $this->selectMenu;
        }
    }

    $soilMenu = new selectMenu;
    $soilMenu->setOptions($soilArray);

?>
<div class="container">
  <h3>Viewing Information for Flora: </h3>
  <h2><small>ID: <?= $plant->getFID() ?></small></h2>
</div>
<br>
<form action="data_formDirect.php" method="get">
  <input type="hidden" name="id" value="<?= $plant->getFID() ?>">
  <input type="hidden" name="users_uid" value="<?= $plant->getUID() ?>">
  <input type="hidden" name="action" value="save_flora">

  <div class="form-group">
    <div class="row">
      <label for="fname" class="col-xs-4 control-label text-right">Flora Name:</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="fname" value="<?= $plant->getfName() ?>" required/><br>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <label for="soil" class="col-xs-4 control-label text-right">Soil Type:</label>
      <div class="col-xs-4">
        <?php echo $soilMenu->makeMenu(); ?><br>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <label for="weather" class="col-xs-4 control-label text-right">Weather:</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="weather" value="<?= $plant->getWeather() ?>"/><br>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <label for="location" class="col-xs-4 control-label text-right">Location:</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="location" value="<?= $plant->getLocation() ?>"/><br>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <label for="date" class="col-xs-4 control-label text-right">Date:</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="date" value="<?= $plant->getDate() ?>"/><br>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <label for="time" class="col-xs-4 control-label text-right">Time:</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="time" value="<?= $plant->getTime() ?>"/><br>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <label for="yname" class="col-xs-4 control-label text-right">Your Name:</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="yname" value="<?= $plant->getyName() ?>"/><br>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <label for="notes" class="col-xs-4 control-label text-right">Additional Notes:</label>
      <div class="col-xs-4">
        <input type="text" class="form-control" name="notes" value="<?= $plant->getNotes() ?>"/><br>
      </div>
    </div>
  </div>
  </select>
  <input type="submit" value="Save"  class="btn btn-primary">
</form>
