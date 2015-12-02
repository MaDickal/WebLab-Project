<?php

class Bird{

  private $_bid;
  private $_bname;
  private $_gender;
  private $_weather;
  private $_location;
  private $_date;
  private $_time;
  private $_yname;
  private $_notes;
  private $_uid;

  public function getBID(){return $this->_bid;}
  public function setBID($arg){$this->_bid = $arg;}

  public function getbName(){return $this->_bname;}
  public function setbName($arg){$this->_bname = $arg;}

  public function getGender(){return $this->_gender;}
  public function setGender($arg){$this->_gender = $arg;}

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

  public function Ascend($arr) {
    $this->setBID(isset($arr["id"])?$arr["id"]:'');
    $this->setbName(isset($arr["bname"])?$arr["bname"]:'');
    $this->setGender(isset($arr["gender"])?$arr["gender"]:'');
    $this->setWeather(isset($arr["weather"])?$arr["weather"]:'');
    $this->setLocation(isset($arr["location"])?$arr["location"]:'');
    $this->setDate(isset($arr["date"])?$arr["date"]:'');
    $this->setTime(isset($arr["time"])?$arr["time"]:'');
    $this->setyName(isset($arr["yname"])?$arr["yname"]:'');
    $this->setNotes(isset($arr["notes"])?$arr["notes"]:'');
    $this->setUID(isset($arr["users_uid"])?$arr["users_uid"]:'');


  }

}
