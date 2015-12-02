<?php

class Flora{

  private $_fid;
  private $_fname;
  private $_soil;
  private $_weather;
  private $_location;
  private $_date;
  private $_time;
  private $_yname;
  private $_notes;
  private $_uid;

  public function getFID(){return $this->_fid;}
  public function setFID($arg){$this->_fid = $arg;}

  public function getfName(){return $this->_fname;}
  public function setfName($arg){$this->_fname = $arg;}

  public function getSoil(){return $this->_soil;}
  public function setSoil($arg){$this->_soil = $arg;}

  public function getWeather(){return $this->_weather;}
  public function setWeather($arg){$this->_weather = $arg;}

  public function getLocation(){return $this->_location;}
  public function setLocation($arg){$this->_location = $arg;}

  public function getDate(){return $this->_date;}
  public function setDate($arg){$this->_date = $arg;}

  public function getTime(){return $this->_time;}
  public function setTime($arg){$this->_time = $arg;}

  public function getyName(){return $this->_yname;}
  public function setyName($arg){$this->_yname = $arg;}

  public function getNotes(){return $this->_notes;}
  public function setNotes($arg){$this->_notes = $arg;}

  public function getUID(){return $this->_uid;}
  public function setUID($arg){$this->_uid = $arg;}

  public function Pollinate($arr) {
    $this->setFID(isset($arr["id"])?$arr["id"]:'');
    $this->setfName(isset($arr["fname"])?$arr["fname"]:'');
    $this->setSoil(isset($arr["soil"])?$arr["soil"]:'');
    $this->setWeather(isset($arr["weather"])?$arr["weather"]:'');
    $this->setLocation(isset($arr["location"])?$arr["location"]:'');
    $this->setDate(isset($arr["date"])?$arr["date"]:'');
    $this->setTime(isset($arr["time"])?$arr["time"]:'');
    $this->setyName(isset($arr["yname"])?$arr["yname"]:'');
    $this->setNotes(isset($arr["notes"])?$arr["notes"]:'');
    $this->setUID(isset($arr["users_uid"])?$arr["users_uid"]:'');


  }

}
