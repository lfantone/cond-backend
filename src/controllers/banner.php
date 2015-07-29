<?php
  require_once __DIR__.'/../models/Banner.php';
  require_once __DIR__.'/../models/Position.php';
  require_once __DIR__.'/../models/MyList.php';

  class BannerController {
    private static $html = 'test.php';
    private static $uploadFolder = '/../../assets/';
    private static $banner;
    private static $positionList;
    private static $typeList;

    private static function getBannerPositions() {
      return self::$positionList->getAll();
    }

    private static function getBannerTypes() {
      $data = null;
      if (isset(self::$typeList)) {
        $data = self::$typeList->getAll();
      }

      return $data;
    }

    private static function validate() {
      $isValid = false;
      if (isset($_POST['positions'])) {
        $isValid = true;
      }
      return $isValid;
    }

    public static function init() {
      self::$positionList = new MyList(array(), 'posicion');
      self::$typeList = new MyList(array(), 'tipo_banners');

      self::render();
    }

    public static function showBanner() {
      self::$positionList = new MyList(array(), 'posicion');
      if (isset($_POST['position'])) {
        self::$banner = new Banner($_POST['position']);
      }

      self::render();
    }

    public static function setBanner() {
      echo 'setBanner ! <br>';
      var_dump($_POST);
      var_dump($_FILES);
    }

    public static function updateBanner() {
      if (isset($_GET['id'])) {
        self::$banner = new Banner($_GET['id'])
      }

      self::render();
    }

    private static function render() {
      Flight::view()->set('positions', self::getBannerPositions());
      Flight::view()->set('types', self::getBannerTypes());
      Flight::view()->set('banner', self::$banner);

      Flight::render('banner.php');
    }

  }
?>
