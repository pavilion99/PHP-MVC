<?php
class model
{
  private $vals;
  private $valid;

  private $extra;

  public static function find($id) {
    if(exists(strtolower(get_called_class()).'s', $id)) {
      return new ${get_called_class}(get_data(strtolower(get_called_class()).'s', $id));
    } else {
      die("No record found with that value.");
    }
  }

  private function __construct($arr = []) {
    $this->$vals = $arr;
    foreach ($arr as $key => $value) {
      $vals[] = $key;
    }
  }

  public static function where($str) {

  }

  public function __get($var) {
    return $vals[$var];
  }

  public function __set($var, $val) {
    if ($var = get_unique_column(strtolower(get_class($this)).'s')) {
      $tbl = strtolower(get_class($this)).'s';
      $col = get_unique_column($tbl);
      $extra = "DELETE FROM `$tbl` WHERE `$col`='".$vals[$var]."'";
    }
    $vals[$var] = $val;
  }

  public function save() {
    require($_SERVER["DOCUMENT_ROOT"]."/../config/database.php");
    $sql = getMySQL();
    $tbl = strtolower(get_class($this)).'s';

    if ($extra) {
      $sql->query($extra);
    }

    if ($this->exists()) {
      $inc = "";
      foreach ($vals as $key => $value) {
        if ($inc == "") {
          $inc .= "`$key`='$value'";
          continue;
        }
        $inc .= ",`$key`='$value'";
      }

      $col = get_unique_column($tbl);

      $sql->query("UPDATE `$tbl` SET $inc WHERE `$col`='".$vals[$col]."'");
    } else {
      $inc = "";
      foreach ($vals as $key => $value) {
        if ($inc == "") {
          $inc .= "`$key`='$value'";
          continue;
        }
        $inc .= ",`$key`='$value'";
      }

      $col = get_unique_column($tbl);

      $sql->query("INSERT INTO `$tbl` SET $inc WHERE `$col`='".$vals[$col]."'");
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
