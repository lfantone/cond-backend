<?php
    class IndexController {
      private static $hash = '72ab41c26ce1b8aced7a9eee0681abbb'; //md5('KnGNw5;NmH]\'Fvd');

      public static function setHash() {
        session_start();

        if (self::checkHash()) {
          $_SESSION['hash'] = self::$hash;
          Flight::render('index.php');
        } else {
          Flight::notFound();
        }
      }

      private static function checkHash() {
        $userHash = $_GET['hash'];

        if (!isset($userHash)) {
          $userHash = $_SESSION['hash'];
        }
        return $userHash == self::$hash;
       }
    }
?>
