<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$id = $_GET['id'];

$database->query("DELETE FROM archivos_xml WHERE id = $id");

header("Location: $referer");
?>