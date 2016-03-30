<?php

class controller
{
  function __render($method) {
    if (!isset($GLOBALS["render"])) {
      $GLOBALS["render"] = $method;
    }

    $contString = str_replace("_controller", "", get_class($this));

    $file = $_SERVER["DOCUMENT_ROOT"]."/../app/views/{$contString}/{$method}.php";

    if (!file_exists($file)) {
      echo __DIR__.'<br>';
      echo $file.'<br>';
      echo var_dump($this instanceof main_controller);
      echo '<br>'.get_class($this).'<br>';
      die("View not found.");
    }

    ob_start();
    include($file);
    return ob_get_clean();
  }
}

?>
