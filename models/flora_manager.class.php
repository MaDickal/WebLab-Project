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

  public function _update($arg){
    $db = new Db();

    $id = $db -> quote($arg->getFID());
    $fname = $db -> quote($arg->getfName());
    $soil = $db -> quote($arg->getSoil());
    $weather = $db -> quote($arg->getWeather());
    $location = $db -> quote($arg->getLocation());
    $date = $db -> quote($arg->getDate());
    $time = $db -> quote($arg->getTime());
    $yname = $db -> quote($arg->getyName());
    $notes = $db -> quote($arg->getNotes());
    $uid = $db->quote($arg->getUID());

    $results = $db -> query("UPDATE flora SET `id` = $id, `fname` = $fname, `soil` = $soil, `weather` = $weather, `location` = $location, `date` = $date, `time` = $time, `yname` = $yname, `notes` = $notes, `users_uid` = $uid WHERE `id` = $id AND `users_uid` = $uid;");

  }

  public function getFlora($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $fid = $db -> quote($arg);
      $results = $db -> select("SELECT * from flora where id = $fid limit 1");

      foreach($results as $result){
          $plant = new Flora();
          $plant->Pollinate($result);
      }

      return $plant;

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
