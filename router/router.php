<?php
  // No need to touch this file unless you're brave.

  require($_SERVER["DOCUMENT_ROOT"]."/../config/routes.php");

  $to_process;

  if (REQUEST_URI == "/" && isset($routes["ROOT"])) {
    $to_process = $routes["ROOT"];
  } else {
    if (!isset($routes[METHOD][REQUEST_URI])) {
      die("No route found.");
    }
    $to_process = $routes[METHOD][REQUEST_URI];
  }

  $controller = $to_process['controller'];
  $action     = $to_process['action'];

  $controller_file = $_SERVER["DOCUMENT_ROOT"]."/../app/controllers/{$controller}_controller.php";

  if (!file_exists($controller_file)) {
    die("Controller does not exist.");
  }

  require($_SERVER["DOCUMENT_ROOT"]."/../factory/controller.php");
  require($controller_file);

  $classTmp = "{$controller}_controller";

  $controllerInst = new $classTmp;

  if (!method_exists($controllerInst, $action)) {
    die("Method does not exist.");
  }

  $controllerInst->$action();

  $GLOBALS["rendered"] = $controllerInst->__render($action);

  $layout;

  if (!isset($_GLOBALS["layout"])) {
    if (file_exists($_SERVER["DOCUMENT_ROOT"]."/../app/views/layouts/{$controller}.php")) {
      $layout = $_SERVER["DOCUMENT_ROOT"]."/../app/views/layouts/{$controller}.php";
    } else {
      $layout = $_SERVER["DOCUMENT_ROOT"]."/../app/views/layouts/application.php";
    }
  } else {
    $file = $_SERVER["DOCUMENT_ROOT"]."/../app/views/layouts/{$GLOBALS["layout"]}.php";
    if (!file_exists($file)) {
      die("Layout does not exist.");
    }
    $layout = $file;
  }

  include($layout);

?>
