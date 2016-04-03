<?php

include_once "config/config_app.php";
include_once "controller/orden_controller.php";
include_once "controller/desvio_controller.php";

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST ) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_HOME){
		$ordenController = new OrdenController();
		$ordenController->home();
}
else {
  if (array_key_exists(ConfigApp::$ACTION,$_REQUEST )){
  		switch ($_REQUEST[ConfigApp::$ACTION]) {
  			case ConfigApp::$ACTION_DESVIO:
  				$desvioController = new DesvioController();
  				$desvioController->home();
  				break;
        case ConfigApp::$ACTION_DELETE_TASK:
  				$taskController = new TaskController();
  				$taskController->deleteTask();
  				break;



        default:
          echo "Page not found - Pagina no encontrada";
  				break;
        }
      }
  }
?>
