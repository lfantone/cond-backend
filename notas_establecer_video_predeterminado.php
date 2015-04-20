<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id_nota = $_GET['id_nota'];
$id_relacion = $_GET['id_relacion'];

$database->update("notas_videos","predeterminada=0","id_nota = $id_nota");	
$database->update("notas_videos","predeterminada=1","id = $id_relacion");	

header("Location: $referer");
?>