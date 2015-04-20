<?
require("system.php");
include("classes/mysql.php");
$database = new db_mysql();
$database->connect();
if($_POST){

    $goto = strip_tags(htmlspecialchars($_POST['goto'], ENT_QUOTES));
    $email = strip_tags(htmlspecialchars($_POST['email'], ENT_QUOTES));
    $password_plain = strip_tags(htmlspecialchars($_POST['password'], ENT_QUOTES));
    $password = md5($password_plain);

    if ($user = $database->list_assoc(sprintf("select nombre, email from autores where email = '%s' and password = md5('%s')", $email, $password))) {
        $_SESSION['admin'] = 1;
        header("Location: ".$goto?$goto:"notas.php");
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