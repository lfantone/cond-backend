<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = htmlspecialchars($_POST['id']);
$ficha_servicio = $database->list_assoc("SELECT id_servicio, id_ficha FROM fichas_servicios WHERE id_fichas_servicio = $id");
$id_ficha = $ficha_servicio[0]['id_ficha'];
$id_servicio = $ficha_servicio[0]['id_servicio'];
$database->insert("fichas_servicios_tracking","id_ficha = $id_ficha, id_servicio = $id_servicio, action = 'D|DELSRV'");
$database->query("DELETE FROM fichas_servicios WHERE id_fichas_servicio = $id");
?>