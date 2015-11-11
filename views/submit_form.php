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
  </header>
  <body align=center>
    <h1>Colorado Flora Retriever</h1>
    <form method="POST">
      <input type="hidden" name="action" value="save_flora">

    Flora Name: <input type="text" name="fname" required/><br>
    <br>
    Soil Type: <?php echo $soilMenu->makeMenu(); ?><br>
    <br>
    Weather: <input type="text" name="weather" /><br>
    <br>
    Location: <input type="text" name="location" /><br>
    <br>
    Date: <input type="text" name="date" /><br>
    <br>
    Time: <input type="text" name="time" /><br>
    <br>
    Your Name: <input type="text" name="yname" /><br>
    <br>
    Additional Notes: <input type="text" name="notes" /><br>
    <br>
    <input type="submit" value="Submit" /><br>

    </form>


  </body>
</html>
