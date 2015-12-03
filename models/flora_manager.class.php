<?php

class FloraManager{

  public function getAllFlora(){

      $db = new Db();
      $plants = array();

      $results = $db -> select("SELECT * from flora");

    foreach($results as $result){
        $plant = new Flora();
        $plant->Pollinate($result);
        $plants[] = $plant;
      }
      return $plants;

  }

  public function _add($plant){
    $db = new Db();

    $fname = $db -> quote($plant->getfName());
    $soil = $db -> quote($plant->getSoil());
    $weather = $db -> quote($plant->getWeather());
    $location = $db -> quote($plant->getLocation());
    $date = $db -> quote($plant->getDate());
    $time = $db -> quote($plant->getTime());
    $yname = $db -> quote($plant->getyName());
    $notes = $db -> quote($plant->getNotes());
    $uid = $db->quote($plant->getUID());

    $results = $db -> query("insert into flora (fname, soil, weather, location, date, time, yname, notes, users_uid) values ($fname, $soil, $weather, $location, $date, $time, $yname, $notes, $uid);");

  }
}