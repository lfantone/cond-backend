<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = htmlspecialchars($_POST['id']);
$database->query("DELETE FROM fichas_notas WHERE id_ficha_nota = $id");
?>