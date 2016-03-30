<?php
switch ($argv[1]) {
  case "g":
  case "generate": {
    switch ($argv[2]) {
      case "controller": {
        $name = $argv[3];

        $actions;

        if (!$argv[4])
          $actions = [];
        else
          $actions = array_slice($argv, 4);

        $actionsParsed = [];

        $defAction = file_get_contents(__DIR__."/factory/default_action.def");

        foreach ($actions as $action) {
          $new = str_replace("%%ACTIONNAME%%", $action, $defAction);
          $actionsParsed[] = $new;
        }

        $defController = file_get_contents(__DIR__."/factory/default_controller.def");

        $actions = "";

        foreach ($actionsParsed as $action) {
          if ($actions == "") {
            $actions = $action;
            continue;
          }

          $actions .= "\r\n".$action;
        }

        $controllerParsed = str_replace("%%ACTIONDEFS%%", $actions, $defController);
        $controllerParsed = str_replace("%%CONTROLLERNAME%%", $name, $controllerParsed);

        file_put_contents(__DIR__."/app/controllers/{$name}_controller.php", $controllerParsed);

        break;
      }
    }
    break;
  }
  case "routes": {
    require_once('config/routes.php');
    process($routes["GET"]);
    process($routes["POST"]);
    break;
  }
}

function process($arr) {
  foreach ($arr as $name => $ignored) {
    if (!file_exists(__DIR__."/public/".$name)) {
      echo "Directory ".__DIR__."/public/".$name." does not exist. Creating...";
      if (mkdir(__DIR__."/public/".$name))
        echo "Created.";
      else
        echo "Failed.";
    }
    if (!file_exists(__DIR__."/public/".$name."/index.php")) {
      echo "File ".__DIR__."/public/".$name."/index.php does not exist. Creating...";
      if (copy(__DIR__."/factory/default_route.php", __DIR__."/public/".$name."/index.php"))
        echo "Created.";
      else
        echo "Failed.";
    }
  }
}
?>
