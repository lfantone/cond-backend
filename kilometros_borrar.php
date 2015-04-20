<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = htmlspecialchars($_GET['id']);
$database->query("DELETE FROM kilometros WHERE id_kilometro = $id");
header("Location: kilometros.php");
?>