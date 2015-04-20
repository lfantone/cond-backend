<?
include("system.php");
include("classes/mysql.php");
include("magazine_estructura_newsml_1.php");

$database = new db_mysql();
$database->connect();

function friendly_url($url) {
	$url = strtolower($url);
	$url = str_replace(array('á', 'é', 'í', 'ó', 'ú', 'n'),   array('a', 'e', 'i', 'o', 'u', 'n'), $url);
	$url = str_replace(array(' ', '&', '\r\n', '\n', '+'),  '-', $url);
	$url = preg_replace(array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/'), array('', '-', ''), $url);
	return $url;
}

function formatear_texto($texto){  
	$malos_caracteres=array('&', "&ntilde;");
	$buenos_caracteres=array('&amp;', "n");
	$texto = str_replace($malos_caracteres,$buenos_caracteres,$texto);	
	return $texto;       
}

$id = $_GET['id'];
$target = $_GET['target'];

$id_notas= implode(",", $_POST["id_nota"]);

$paquete = array();

$notas_sql = "
	SELECT magazine_notas.id id_nota, magazine_notas.titulo, magazine_notas.subtitulo, magazine_notas.copete, magazine_notas.contenido, magazine_notas.fecha_creada, autores.id id_autor, autores.nombre autor
	FROM magazine_notas 
	INNER JOIN autores ON autores.id = magazine_notas.id_autor
	WHERE magazine_notas.estado = 3 and magazine_notas.id in ($id_notas)
";
$notas = $database->list_assoc($notas_sql);

$paquete = $notas;	

$title=friendly_url($notas[0]['titulo']);

header("Content-disposition: attachment; filename=".$title.".xml");
header("Content-Type: text/xml; charset=utf-8");
header("Content-Transfer-Encoding: binary");
header("Cache-Control: must-revalidate");
header("Expires: 0");

  // A los de yahoo le ponemos entities, porque de otra manera no lo aceptan.
	echo put_entities(formatear_texto(newsml_xml($paquete)));
?>