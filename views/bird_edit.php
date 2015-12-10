<?php
    $genderArray = ['Unknown', 'Male', 'Female'];

    class selectMenu {
        private $items;  // array of items.
        private $options; // hold all html options
        private $selectMenu; // final select menu

        function __construct($itemArray='') {
            $this->items = $itemArray;
        }

        private function buildOptions() {
          $this->options = "<option value=''>Select a Gender</option>";
            forEach($this->items as $item) {
                $this->options .= "<option value='"
                . $item . "'>"
                . $item . "</option>";
            }
        }

        private function buildSelect() {
            $this->selectMenu = "<select class='form-control' name='gender'>" . $this->options . "</select>";
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

    $genderMenu = new selectMenu;
    $genderMenu->setOptions($genderArray);
?>
<div class="container">
  <h3>Viewing Information for Bird: </h3>
  <h2><small>ID: <?= $bird->getBID() ?></small></h2>
</div>
<br>
<form action="data_formDirect.php" method="get">
  <input type="hidden" name="id" value="<?= $bird->getBID() ?>">
  <input type="hidden" name="users_uid" value="<?= $bird->getUID() ?>">
  <input type="hidden" name="action" value="save_bird">
      <div class="form-group">
        <div class="row">
          <label for="species" class="col-xs-4 control-label text-right">Bird Species:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="species" value="<?= $bird->getSpecies() ?>" required/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="gender" class="col-xs-4 control-label text-right">Gender:</label>
          <div class="col-xs-4">
            <?php echo $genderMenu->makeMenu(); ?><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="weather" class="col-xs-4 control-label text-right">Weather:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="weather" value="<?= $bird->getWeather() ?>"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="location" class="col-xs-4 control-label text-right">Location:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="location" value="<?= $bird->getLocation() ?>"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="distance" class="col-xs-4 control-label text-right">Distance:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="distance" value="<?= $bird->getDistance() ?>"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="detected" class="col-xs-4 control-label text-right">How was it detected:</label>
          <div class="col-xs-4">
            <select class="form-control" name="detected">
                <option value='Flyover'>Flyover</option>
                <option value='Singing'>Singing</option>
                <option value='Other'>Other</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="migrant" class="col-xs-4 control-label text-right">Migrant:</label>
          <div class="col-xs-4">
            <select class="form-control" name="migrant">
                <option value='No'>No</option>
                <option value='Yes'>Yes</option>
            </select>
        </div>
      </div><br>
      <div class="form-group">
        <div class="row">
          <label for="nest" class="col-xs-4 control-label text-right">Did you observe a nest:</label>
          <div class="col-xs-4">
            <select class="form-control" name="nest">
                <option value='No'>No</option>
                <option value='Yes'>Yes</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="eggs" class="col-xs-4 control-label text-right">How many eggs were in the nest:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="eggs" value="<?= $bird->getEggs() ?>"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="yname" class="col-xs-4 control-label text-right">Your Name:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="yname" value="<?= $bird->getyName() ?>"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="notes" class="col-xs-4 control-label text-right">Additional Notes:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="notes" value="<?= $bird->getNotes() ?>"/><br>
          </div>
        </div>
      </div>
      <input type="submit" value="Save"  class="btn btn-primary">
    </form>
  </body>
</div>
</html>
