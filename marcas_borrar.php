<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = htmlspecialchars($_GET['id']);
$database->query("DELETE FROM marcas WHERE id = $id");
header("Location: marcas.php");
?>