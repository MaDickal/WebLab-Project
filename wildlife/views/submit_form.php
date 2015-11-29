<?php
    $genderArray = ['Male', 'Female', 'Unknown'];

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
            $this->selectMenu = "<select name='gender'>" . $this->options . "</select>";
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
<html>
  <header>
    <title>Colorado Aerial Wildlife</title>
    <link rel="stylesheet" type="text/css" href="../../css/base.css">
  </header>
  <body align=center>
    <h1>Colorado Aerial Wildlife</h1>
    <form method="POST">
      <input type="hidden" name="action" value="save_bird">

      <label for="bname">Bird Name:</label>
      <input type="text" name="bname" required/><br>

      <label for="gender">Gender:</label>
      <?php echo $genderMenu->makeMenu(); ?><br>

      <label for="weather">Weather:</label>
      <input type="text" name="weather" /><br>

      <label for="location">Location:</label>
      <input type="text" name="location" /><br>

      <label for="date">Date:</label>
      <input type="text" name="date" /><br>

      <label for="time">Time:</label>
      <input type="text" name="time" /><br>

      <label for="yname">Your Name:</label>
      <input type="text" name="yname" /><br>

      <label for="notes">Additional Notes:</label>
      <input type="text" name="notes" /><br>

      <input type="submit" value="Submit" class="button"/><br>

    </form>


  </body>
</html>
