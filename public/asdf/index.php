<?php
  define("REQUEST_URI", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
  define("METHOD", $_SERVER["REQUEST_METHOD"]);

  require($_SERVER["DOCUMENT_ROOT"]."/../router/router.php");
?>
