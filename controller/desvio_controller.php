<?php
include_once "model/desvio_model.php";
include_once "view/desvio_view.php";
class DesvioController
{
    private $model;
	  private $view;

    public function __construct() {
        $this->model = new DesvioModel();
		    $this->view = new DesvioView();
       
    }

    public function home(){
     
      $desvios = $this->model->getDesvios();
      $this->view->showPage($desvios);
      
    }


}
?>