<?php
include_once "model/orden_model.php";
include_once "view/orden_view.php";
class OrdenController
{
    private $model;
	  private $view;

    public function __construct() {
        $this->model = new OrdenModel();
		    $this->view = new OrdenView();
       
    }

    public function home(){
     
      $ordenes = $this->model->getOrdenes();
      $this->view->showPage($ordenes);
      
    }


}
?>
