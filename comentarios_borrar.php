<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = !isset($_POST['id'])?$_GET['id']:$_POST['id'];
$id = htmlspecialchars($id);

$database->query("DELETE FROM comentarios WHERE id = $id");

if (!isset($_POST['id'])) 
  header("Location: comentarios.php");
?>