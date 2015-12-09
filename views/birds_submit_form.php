<?php
    $genderArray = ['Unknown', 'Male', 'Female'];

    $title = 'Colorado Aerial Wildlife';

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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <div class="container-fluid">
    <title><?= $title ?></title>
  <body align=center>
    <h1><?= $title ?></h1>
    <form method="POST" class="form-horizontal">
      <input type="hidden" name="action" value="save_bird">
      <div class="form-group">
        <div class="row">
          <label for="species" class="col-xs-4 control-label text-right">Bird Species:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="species" placeholder="Bird Species" required/><br>
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
      <?php include_once('../views/weather.php');?>
      <input type="hidden" id="geoloc" name="geoloc" value="" />
      <input type="hidden" id="lat" name="lat" value="" />
      <input type="hidden" id="lon" name="lon" value="" />
      <input type="hidden" id="geoweather" name="geoweather" value="" />
      <input type="hidden" id="temp" name="temp" value="" />
      <input type="hidden" id="temp_min" name="temp_min" value="" />
      <input type="hidden" id="temp_max" name="temp_max" value="" />
      <div class="form-group">
        <div class="row">
          <label for="weather" class="col-xs-4 control-label text-right">Weather:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="weather" placeholder="Weather"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="location" class="col-xs-4 control-label text-right">Location:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="location" placeholder="Location"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="distance" class="col-xs-4 control-label text-right">Distance:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="distance" placeholder="Distance"/><br>
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
            <input type="text" class="form-control" name="eggs" placeholder="How many eggs were in the nest (Optional)"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="yname" class="col-xs-4 control-label text-right">Your Name:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="yname" placeholder="Your Name (Optional)"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="notes" class="col-xs-4 control-label text-right">Additional Notes:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="notes" placeholder="Additional Notes (Optional)"/><br>
          </div>
        </div>
      </div>
      <input type="submit" value="Submit" class="btn btn-success"/><br>
    </form>
  </body>
</div>
</html>
