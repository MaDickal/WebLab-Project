<?php

class BirdsManager{

  // public function getAllPlants(){
  //
  //     $db = new Db();
  //     $plants = array();
  //
  //     $results = $db -> select("SELECT * from flora");
  //
  //   foreach($results as $result){
  //       $plant = new Flora();
  //       $plant->pollinate($result);
  //       $plants[] = $plant;
  //     }
  //
  //     return $plants;
  //
  // }

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
    $uid = $db->quote($plant->getUID());

    $results = $db -> query("insert into birds (bname, gender, weather, location, date, time, yname, notes, users_uid) values ($bname, $gender, $weather, $location, $date, $time, $yname, $notes, $uid);");

  }
}
