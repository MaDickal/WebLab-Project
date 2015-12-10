<?php

class Bird{

  private $_bid;
  private $_species;
  private $_gender;
  private $_weather;
  private $_location;
  private $_distance;
  private $_detected;
  private $_migrant;
  private $_nest;
  private $_eggs;
  private $_yname;
  private $_notes;
  private $_uid;

  public function getBID(){return $this->_bid;}
  public function setBID($arg){$this->_bid = $arg;}

  public function getSpecies(){return $this->_species;}
  public function setSpecies($arg){$this->_species = $arg;}

  public function getGender(){return $this->_gender;}
  public function setGender($arg){$this->_gender = $arg;}

  public function getWeather(){return $this->_weather;}
  public function setWeather($arg){$this->_weather = $arg;}

  public function getLocation(){return $this->_location;}
  public function setLocation($arg){$this->_location = $arg;}

  public function getDistance(){return $this->_distance;}
  public function setDistance($arg){$this->_distance = $arg;}

  public function getDetected(){return $this->_detected;}
  public function setDetected($arg){$this->_detected = $arg;}

  public function getMigrant(){return $this->_migrant;}
  public function setMigrant($arg){$this->_migrant = $arg;}

  public function getNest(){return $this->_nest;}
  public function setNest($arg){$this->_nest = $arg;}

  public function getEggs(){return $this->_eggs;}
  public function setEggs($arg){$this->_eggs = $arg;}

  public function getyName(){return $this->_yname;}
  public function setyName($arg){$this->_yname = $arg;}

  public function getNotes(){return $this->_notes;}
  public function setNotes($arg){$this->_notes = $arg;}

  public function getUID(){return $this->_uid;}
  public function setUID($arg){$this->_uid = $arg;}

  public function Ascend($arr) {
    $this->setBID(isset($arr["id"])?$arr["id"]:'');
    $this->setSpecies(isset($arr["species"])?$arr["species"]:'');
    $this->setGender(isset($arr["gender"])?$arr["gender"]:'');
    $this->setWeather(isset($arr["weather"])?$arr["weather"]:'');
    $this->setLocation(isset($arr["location"])?$arr["location"]:'');
    $this->setDistance(isset($arr["distance"])?$arr["distance"]:'');
    $this->setDetected(isset($arr["detected"])?$arr["detected"]:'');
    $this->setMigrant(isset($arr["migrant"])?$arr["migrant"]:'');
    $this->setNest(isset($arr["nest"])?$arr["nest"]:'');
    $this->setEggs(isset($arr["eggs"])?$arr["eggs"]:'');
    $this->setyName(isset($arr["yname"])?$arr["yname"]:'');
    $this->setNotes(isset($arr["notes"])?$arr["notes"]:'');
    $this->setUID(isset($arr["users_uid"])?$arr["users_uid"]:'');


  }

}
