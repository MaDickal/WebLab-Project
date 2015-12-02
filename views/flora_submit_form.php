<?php
    $soilArray = ['Sand', 'Silt', 'Clay', 'Loam', 'Peat', 'Gravel', 'Rocky'];

    class selectMenu {
        private $items;  // array of items.
        private $options; // hold all html options
        private $selectMenu; // final select menu

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
    <title>Colorado Flora Retriever</title>
  <body align=center>
    <h1>Colorado Flora Retriever</h1>
    <form method="POST" class="form-horizontal">
      <input type="hidden" name="action" value="save_flora">
      <div class="form-group">
        <div class="row">
          <label for="fname" class="col-xs-4 control-label text-right">Flora Name:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="fname" placeholder="Flora Name" required/><br>
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
          <label for="date" class="col-xs-4 control-label text-right">Date:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="date" placeholder="Date"/><br>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="time" class="col-xs-4 control-label text-right">Time:</label>
          <div class="col-xs-4">
            <input type="text" class="form-control" name="time" placeholder="Time"/><br>
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
</html>
