<?php

class User_model
{
  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=pbl_project';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getUsers()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM user');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  private $users = [];

  public function getName()
  {
    return $this->users;
  }
}
