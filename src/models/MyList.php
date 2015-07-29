<?php
  require __DIR__.'/../../classes/mysql.php';
  class MyList {
    private $isFetch;
    private $list;
    private $listName;

    private static $sql;

    public function __construct($list = array(), $listName = false) {
      $this->isFetch = false;
      self::$sql = new db_mysql();

      if($this->validate(array($list, $listName))) {
        $this->listName = $listName;
        if (count($list) === 0) {
          $this->fetchList();
        } else {
          $this->list = $list;
        }
      }
    }

    private static function validate($params) {
      $isValid = true;
      if (isset($params)) {
        foreach ($params as $key => $param) {
          if (!isset($param)) {
            $isValid = false;
          }

          if ($key === 0 && !is_array($param)) {
            $isValid = false;
          }
        }
      } else {
        $isValid = false;
      }
      return $isValid;
    }

    private function fetchList() {
      self::$sql->connect();
      $this->setList(self::$sql->list_assoc('SELECT * FROM '.$this->listName));
      self::$sql->close();
      $this->isFetch = true;
    }

    public function add($item) {
      $this->list[] = $item;
    }

    public function saveAll() {
      self::$sql->connect();
      self::$sql->query('INSERT INTO $this->listName VALUES $this->list ON DUPLICATE KEY UPDATE');
      self::$sql->close();
    }

    public function getAll($columns = false) {
      $list;
      $query;
      if ($this->isFetch) {
        $list = $this->list;
      } else {
        $this->sql->connect();
        $query = 'SELECT * FROM '.$this->listName;
        if (isset($columns)) {
          $query = 'SELECT '.$columns.' FROM '.$this->listName;
        }
        $list = self::$sql->list_assoc($query);
        self::$sql->close();
      }

      return $list;
    }

    public function getListName() {
      return $this->listName;
    }

    public function setListName($listName) {
      $this->listName = $listName;
    }

    public function getList() {
      return $this->list;
    }

    public function setList($list) {
      $this->list = $list;
    }
  }
?>
