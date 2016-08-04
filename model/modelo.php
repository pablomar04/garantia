<?php
class Modelo {
  protected $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;'.'dbname=basetareas;charset=utf8', 'root', '');

  }
}
  ?>