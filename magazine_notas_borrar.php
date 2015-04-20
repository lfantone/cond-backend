<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = htmlspecialchars($_GET['id']);
$database->update("notas","estado = 1","id = $id");
header("Location: notas.php");
?>