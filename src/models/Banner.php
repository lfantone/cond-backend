<?php
  require __DIR__.'/../../classes/mysql.php';

  class Banner {
    private $id;
    private $name;
    private $source;
    private $position;
    private $type;

    private static $sql;

    public function __construct($position = false, $id = false, $name = false, $source = false, $type = false) {
      self::$sql = new db_mysql();
      if(isset($position)) {
        $this->setBannerInfoFromPosition($position);
      } else {
        $this->id = $id;
        $this->name = $name;
        $this->source = $source;
        $this->position = $position;
        $this->type = $type;
      }
    }

    private function setId($id) {
      $this->id = $id;
    }

    public function getId() {
      return $this->id;
    }

    public function getName() {
      return $this->name;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getSource() {
      return $this->source;
    }

    public function setSource($source) {
      $this->source = $source;
    }

    public function getPosition() {
      return $this->position;
    }

    public function getPositionName() {
      $result;
      self::$sql->connect();
      $result = self::$sql->row_assoc('SELECT nombre AS name FROM posicion WHERE id = '.$this->getPosition());
      self::$sql->close();

      return $result['name'];
    }

    public function setPosition($position) {
      $this->position = $position;
    }

    public function getType() {
      return $this->type;
    }

    public function getTypeName() {
      $result;
      self::$sql->connect();
      $result = self::$sql->row_assoc('SELECT nombre AS name FROM tipo_banners WHERE id = '.$this->getType());
      self::$sql->close();

      return $result['name'];
    }

    public function setType($type) {
      $this->type = $type;
    }

    private function setBannerInfoFromPosition($position) {
      $banner;
      self::$sql->connect();
      $banner = self::$sql->row_assoc('SELECT id, nombre AS name, source, posicion AS position, tipo AS type FROM banners WHERE posicion = '.$position);

      $this->setId($banner['id']);
      $this->setName($banner['name']);
      $this->setSource($banner['source']);
      $this->setType($banner['type']);
      $this->setPosition($position);

      self::$sql->close();
    }

    public function save() {
      self::$sql->connect();
      echo 'saveing !';
      self::$sql->close();
    }
  }
?>
