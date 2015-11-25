<?php

class Birds{

  private $_fname;
  private $_soil;
  private $_weather;
  private $_location;
  private $_date;
  private $_time;
  private $_yname;
  private $_notes;

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

  public function Ascend($arr) {
    $this->setfName(isset($arr["fname"])?$arr["fname"]:'');
    $this->setSoil(isset($arr["soil"])?$arr["soil"]:'');
    $this->setWeather(isset($arr["weather"])?$arr["weather"]:'');
    $this->setLocation(isset($arr["location"])?$arr["location"]:'');
    $this->setDate(isset($arr["date"])?$arr["date"]:'');
    $this->setTime(isset($arr["time"])?$arr["time"]:'');
    $this->setyName(isset($arr["yname"])?$arr["yname"]:'');
    $this->setNotes(isset($arr["notes"])?$arr["notes"]:'');

  }

}
