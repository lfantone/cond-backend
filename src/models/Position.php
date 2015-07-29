<?php
  require __DIR__.'/../../classes/mysql.php';
  class Position {
    private $id;
    private $name;
    private $htmlId;
    private static $sql;

    public function __construct($name = false, $htmlId = false) {
      if ($this->validate(array($name, $htmlId))) {
        $this->name = $name;
        $this->htmlId = $htmlId;
      }

      self::$sql = new db_mysql();
    }

    private static function validate($params) {
      $isValid = true;
      if (isset($params)) {
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

    public function getName() {
      return $this->name;
    }

    public function setName($nombre) {
      $this->nombre = $name;
    }

    public function getHtmlId() {
      return $this->htmlId;
    }

    public function setHtmlId($htmlId) {
      $this->htmlId = $htmlId;
    }

    public function getPosition() {
      $position;
      self::$sql->connect();
      $position =self::$sql->row_assoc('SELECT id, nombre as name, html_id FROM position WHERE id = '.$this->id);
      self::$sql->close();
      return $position;
    }

    public function save() {
      self::$sql->connect();
      echo 'saving !';
      self::$sql->close();
    }
  }
?>
