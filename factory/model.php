<?php
class model
{
  private $vals;

  public static function find($id) {
    if(exists(get_called_class(), $id)) {
      return new ${get_called_class}(get_data(get_called_class(), $id));
    } else {
      die("No record found with that value.");
    }
  }

  function __construct($arr = []) {
    $this->$vals = $arr;
  }

  public static function where($str) {

  }

  public function __get($var) {
    return $vals[$var];
  }

  public function __set($var, $val) {
    if ($var = get_unique_column(get_class($this))) {
      die("Cannot set primary key.");
    }
    $vals[$var] = $val;
  }

  public function save() {
    require($_SERVER["DOCUMENT_ROOT"]."/../config/database.php");
    $sql = getMySQL();
    if ($this->exists()) {
      $sql->query("UPDATE ``")
    } else {

    }
  }

  private static function get_unique_column($model) {
    require($_SERVER["DOCUMENT_ROOT"]."/../config/database.php");

    $sql = getMySQL();

    $res = $sql->query("SHOW KEYS FROM `$model` WHERE Key_name='PRIMARY'");

    $col;

    if ($row = $res -> fetch_assoc()) {
      return $row["Column_name"];
    } else {
      return NULL;
    }
  }

  private static function exists($model, $key) {
    require($_SERVER["DOCUMENT_ROOT"]."/../config/database.php");

    $sql = getMySQL();

    $col = get_unique_column($model);

    $res = $sql->query("SELECT * FROM `$tblname` WHERE `$col`=$id");

    if ($row = $res->fetch_assoc()) {
      return true;
    } else {
      return false;
    }
  }

  private static function get_data($model, $key) {
    require($_SERVER["DOCUMENT_ROOT"]."/../config/database.php");

    $sql = getMySQL();

    $col = get_unique_column($model);

    $res = $sql->query("SELECT * FROM `$tblname` WHERE `$col`=$id");

    if ($row = $res->fetch_assoc()) {
      return $row;
    } else {
      return NULL;
    }
  }
}
?>
