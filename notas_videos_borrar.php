<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = htmlspecialchars($_POST['id']);
$database->query("DELETE FROM notas_videos WHERE id = $id");
?>