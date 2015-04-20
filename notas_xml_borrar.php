<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$id = $_GET['id'];

$database->query("DELETE FROM notas_archivos WHERE id = $id");

header("Location: $referer");
?>