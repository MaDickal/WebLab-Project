<?php

class User{

  private $_uid;
  private $_pass;
  private $_mail;
  private $_admin;

  public function getUID(){return $this->_uid;}
  public function setUID($arg){$this->_uid = $arg;}

  public function getPassword(){return $this->_pass;}
  public function setPassword($arg){$this->_pass = $arg;}

  public function getMail(){return $this->_mail;}
  public function setMail($arg){$this->_mail = $arg;}

  public function getAdmin(){return $this->_admin;}
  public function setAdmin($arg){$this->_admin = $arg;}

  public function hydrate($arr) {
    $this->setUID(isset($arr["uid"])?$arr["uid"]:'');
    $this->setMail(isset($arr["mail"])?$arr["mail"]:'');
    $this->setPassword(isset($arr["pass"])?$arr["pass"]:'');
    $this->setAdmin(isset($arr["admin"])?$arr["admin"]:'');
  }

}
