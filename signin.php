<?
error_reporting(0);
require("system.php");
include("classes/mysql.php");
$database = new db_mysql();
$database->connect();
if ($_POST) {
    $goto = strip_tags(htmlspecialchars($_POST['goto'], ENT_QUOTES));
    $email = strip_tags(htmlspecialchars($_POST['email'], ENT_QUOTES));
    $password_plain = strip_tags(htmlspecialchars($_POST['password'], ENT_QUOTES));
    // $password = md5($password_plain);
    $password = $password_plain;
    ob_start();
    $user = $database->list_assoc(sprintf("select nombre, email, superadmin from autores where email = '%s' and password = '%s'", $email, $password));
    if ($user && count($user) == 1) {
      $_SESSION['admin'] = 1;
      $_SESSION['admin_email'] = $user[0]['email'];
      $_SESSION['admin_nombre'] = $user[0]['nombre'];
      $_SESSION['admin_superadmin'] = $user[0]['superadmin'];
      ob_end_clean();
      header("Location: ".($goto ? $goto:"/notas.php"));
    } else {
      unset($_SESSION['admin']);
      unset($_SESSION['admin_email']);
      unset($_SESSION['admin_nombre']);
      unset($_SESSION['admin_superadmin']);
      ob_end_clean();
      header("Location: index.php");
    }
/*
    if($email=='info@conduciendo.com' && $password_plain =='123'){
        $_SESSION['admin'] = 1;
        header("Location: notas.php");
    } else {
        unset($_SESSION['admin']);
        header("Location: index.php");
    }
*/
}
?>
