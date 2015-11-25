<?php

class UserManager extends Manager{

  public function getUser($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $uid = $db -> quote($arg);
      $results = $db -> select("SELECT * from users where uid = $uid limit 1");

      foreach($results as $result){
        $user = new User();
        $user->hydrate($result);
      }

      return $user;

  }
  public function getAllUsers(){

      $db = new Db();
      $users = array();

      $results = $db -> select("SELECT * from users");

    foreach($results as $result){
        $user = new User();
        $user->hydrate($result);
        $users[] = $user;
      }

      return $users;

  }
  public function save($user){

    if ($user->getUID()) {
      $this->_update($user);
    } else {
      $this->_add($user);
    }
  }

  private function _add($user){
    $db = new Db();

    $mail = $db -> quote($user->getMail());
    // $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT, array("cost" => 10));
    $pass = $db -> quote($pass);

    $results = $db -> query("insert into users (mail, pass) values ($mail, $pass);");

  }

  private function _update($user){
    $db = new Db();

    $uid = $db -> quote($user->getUID());
    $mail = $db -> quote($user->getMail());

    if($user->getPassword()){
      // $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT, array("cost" => 10));
      $pass = $db -> quote($pass);
    } else {
      $pass = '';
    }

    if(!empty($pass)){
      $results = $db -> query("update users set mail=$mail, pass=$pass where uid = $uid;");
    } else {
      $results = $db -> query("update users set mail=$mail, pass=$pass where uid = $uid;");
    }

  }

  public function delete($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $uid = $db -> quote($arg);
      $results = $db -> query("DELETE from users where uid = $uid");
  }

  public function authenticate($mail, $pass) {
	  $db = new Db();

	  $mail = $db->quote($mail);
	  $pass = $db->quote($pass);

	  $results = $db->select("SELECT * from users where mail = $mail limit 1");

	  if(!$results) {
		  return false;
	  }
	  foreach($results as $result) {
		  $user = new User();
		  $user->hydrate($result);
	  }
    // if(password_verify($pass, $user->getPassword())) {
    //   return $user;
    // } else {
    //   return FALSE;
    // }
	  return $user;
  }

}
