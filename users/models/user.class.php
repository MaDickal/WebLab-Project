<?php

/**
 * User Object
 */
class User{

  private $_uid;
  private $_pass;
  private $_mail;

  public function getUID(){return $this->_uid;}
  public function setUID($arg){$this->_uid = $arg;}

  public function getPassword(){return $this->_pass;}
  public function setPassword($arg){$this->_pass = $arg;}

  public function getMail(){return $this->_mail;}
  public function setMail($arg){$this->_mail = $arg;}

  public function hydrate($arr) {
    $this->setUID(isset($arr["uid"])?$arr["uid"]:'');
    $this->setPassword(isset($arr["pass"])?$arr["pass"]:'');
    $this->setMail(isset($arr["mail"])?$arr["mail"]:'');
  }

}
