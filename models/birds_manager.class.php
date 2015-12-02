<?php

class BirdsManager{

  public function getAllBirds(){

      $db = new Db();
      $birds = array();

      $results = $db -> select("SELECT * from birds");

    foreach($results as $result){
        $bird = new Bird();
        $bird->Ascend($result);
        $birds[] = $bird;
      }
      return $birds;

  }

  public function _add($bird){
    $db = new Db();

    $bname = $db -> quote($bird->getbName());
    $gender = $db -> quote($bird->getGender());
    $weather = $db -> quote($bird->getWeather());
    $location = $db -> quote($bird->getLocation());
    $date = $db -> quote($bird->getDate());
    $time = $db -> quote($bird->getTime());
    $yname = $db -> quote($bird->getyName());
    $notes = $db -> quote($bird->getNotes());
    $uid = $db->quote($bird->getUID());

    $results = $db -> query("insert into birds (bname, gender, weather, location, date, time, yname, notes, users_uid) values ($bname, $gender, $weather, $location, $date, $time, $yname, $notes, $uid);");

  }
}
