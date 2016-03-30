<?php
  $database["username"] = "pavilion99";
  $database["password"] = "\$fcrapr3qrfxgbc14";
  $database["database"] = "phpmvctest";
  $database["host"] = "sql.spencercolton.tech";
  $database["port"] = 3306;

  function getMySQL() {
    return new mysqli($database["host"].":".$database["port"], $database["username"], $database["password"], $database["database"]);
  }
?>
