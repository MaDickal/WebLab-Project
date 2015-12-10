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

  public function _update($arg){
    $db = new Db();

    $id = $db -> quote($arg->getBID());
    $species = $db -> quote($arg->getSpecies());
    $gender = $db -> quote($arg->getGender());
    $weather = $db -> quote($arg->getWeather());
    $location = $db -> quote($arg->getLocation());
    $distance = $db -> quote($arg->getDistance());
    $detected = $db -> quote($arg->getDetected());
    $migrant = $db -> quote($arg->getMigrant());
    $nest = $db -> quote($arg->getNest());
    $eggs = $db -> quote($arg->getEggs());
    $yname = $db -> quote($arg->getyName());
    $notes = $db -> quote($arg->getNotes());
    $uid = $db->quote($arg->getUID());

    $results = $db -> query("UPDATE birds SET `id` = $id, `species` = $species, `gender` = $gender, `weather` = $weather, `location` = $location, `distance` = $distance, `detected` = $detected, `migrant` = $migrant, `nest` = $nest, `eggs` = $eggs, `yname` = $yname, `notes` = $notes, `users_uid` = $uid WHERE `id` = $id AND `users_uid` = $uid;");

  }

  public function getBird($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $bid = $db -> quote($arg);
      $results = $db -> select("SELECT * from birds where id = $bid limit 1");

      foreach($results as $result){
          $bird = new Bird();
          $bird->Ascend($result);
      }

      return $bird;

  }

  public function _add($bird){
    $db = new Db();

    $species = $db -> quote($bird->getSpecies());
    $gender = $db -> quote($bird->getGender());
    $weather = $db -> quote($bird->getWeather());
    $location = $db -> quote($bird->getLocation());
    $distance = $db -> quote($bird->getDistance());
    $detected = $db -> quote($bird->getDetected());
    $migrant = $db -> quote($bird->getMigrant());
    $nest = $db -> quote($bird->getNest());
    $eggs = $db -> quote($bird->getEggs());
    $yname = $db -> quote($bird->getyName());
    $notes = $db -> quote($bird->getNotes());
    $uid = $db->quote($bird->getUID());

    $results = $db -> query("insert into birds (species, gender, weather, location, distance, detected, migrant, nest, eggs, yname, notes, users_uid) values ($species, $gender, $weather, $location, $distance, $detected, $migrant, $nest, $eggs, $yname, $notes, $uid);");

  }
}
