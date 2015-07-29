<?php
  require __DIR__.'/../../classes/mysql.php';
  class Type {
    private $id;
    private $name;
    private static $sql;

    public function __construct ($id = false, $name = false) {
      if ($this->validate(array($id, $name))) {
        $this->id = $id;
        $this->name = $name;
      }

      self::$sql = new db_mysql();
    }

    private static function validate($params) {
      $isValid = true;
      if ($isset($params)) {
        foreach ($params as $param) {
          if (!isset($param)) {
            $isValid = false;
          }
        }
      } else {
        $isValid = false;
      }

      return $isValid;
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getName() {
      return $this->name;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getType() {
      $type;
      self::$sql->connect();
      $type = self::$sql->row_assoc('SELECT id, nombre as name FROM tipo_banners WHERE id = '.$this->id);
      self::$sql->close();
      return $type;
    }

    public function save() {
      self::$sql->connect();
      echo 'saving !';
      self::$sql->close();
    }
  }
?>
