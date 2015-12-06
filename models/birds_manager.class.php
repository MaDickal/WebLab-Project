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
    $distance = $db -> quote($bird->getDistance());
    $detected = $db -> quote($bird->getDetected());
    $migrant = $db -> quote($bird->getMigrant());
    $nest = $db -> quote($bird->getNest());
    $eggs = $db -> quote($bird->getEggs());
    $yname = $db -> quote($bird->getyName());
    $notes = $db -> quote($bird->getNotes());
    $uid = $db->quote($bird->getUID());

    $results = $db -> query("insert into birds (species, gender, distance, detected, migrant, nest, eggs, yname, notes, users_uid) values ($species, $gender, $distance, $detected, $migrant, $nest, $eggs, $yname, $notes, $uid);");

  }
}
