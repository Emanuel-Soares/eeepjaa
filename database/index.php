<?php

class Database {
  private $mysqli = null;

  public function __construct($host, $user, $password, $db)
  {
    global $mysqli;
    $mysqli = new mysqli($host, $user, $password, $db);
  }

  public function cadastro($name, $email, $password) {
    global $mysqli;
    $userExists = $mysqli->query("SELECT id FROM users WHERE email = '$email'");
    if($userExists) {
      return false;
    } else {
      $mysqli->query("INSERT INTO users VALUES (DEFAULT, $name, $email, $password)");
      return true;
    }
  }

  public function login($email, $password)
  {
    global $mysqli;
    $user = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    if($user) {
      session_start();
      $_SESSION['user'] = $user;
      return true;
    } else{
      return false;
    }
  }
}

?>