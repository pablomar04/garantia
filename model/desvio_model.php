<?php
include_once "model/modelo.php";
class DesvioModel extends Modelo{


  public function getDesvios(){

      $statement = "select * from desvio";
      $sth =$this->db->query($statement);
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $rows;

  }


}
?>