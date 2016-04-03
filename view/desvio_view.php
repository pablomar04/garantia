<?php
include_once 'view/view.php';

class DesvioView extends View {


  public function showPage($desvios){

      $this->smarty->assign("desvios", $desvios);
      $this->smarty->display('desvio.tpl');
  }
}
?>