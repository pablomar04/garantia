<?php
include_once "model/modelo.php";
class OrdenModel extends Modelo{


  public function getOrdenes(){

      $statement = "select * from orden";
      $sth =$this->db->query($statement);
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $rows;

  }


}
?>
