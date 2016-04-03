<?php
include_once 'view/view.php';

class OrdenView extends View {


  public function showPage($ordenes){

      $this->smarty->assign("ordenes", $ordenes);
      $this->smarty->display('index.tpl');
  }
}
?>
