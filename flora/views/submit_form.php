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
            $this->selectMenu = "<select name='soil'>" . $this->options . "</select>";
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
<html>
  <header>
    <title>Colorado Flora Retriever</title>
    <link rel="stylesheet" type="text/css" href="../../css/base.css">
  </header>
  <body align=center>
    <h1>Colorado Flora Retriever</h1>
    <form method="POST">
      <input type="hidden" name="action" value="save_flora">

      <label for="fname">Flora Name:</label>
      <input type="text" name="fname" required/><br>

      <label for="soil">Soil Type:</label>
      <?php echo $soilMenu->makeMenu(); ?><br>

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
