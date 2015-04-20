<?
include("system.php");
include("classes/mysql.php");
include("estructura_xml_1.php");
include("estructura_xml_2.php");
include("estructura_xml_3.php");
include("estructura_xml_msn.php");
include("estructura_xml_demotores.php");
include("estructura_xml_directorym.php");

$database = new db_mysql();
$database->connect();

function formatear_texto($texto){  
	$malos_caracteres=array('&', "&ntilde;");
	$buenos_caracteres=array('&amp;', "n");
	$texto = str_replace($malos_caracteres,$buenos_caracteres,$texto);	
	return $texto;       
}

$id = $_GET['id'];
$target = $_GET['target'];

$archivo_xml = $database->row_assoc("SELECT * FROM archivos_xml WHERE id = $id");
if(!$archivo_xml){
	header('Location:archivos_xml.php');
	exit();
}

$paquete = array();

$notas_sql = "
	SELECT notas.id id_nota, notas.titulo, notas.subtitulo, notas.copete, notas.contenido, notas.fecha_creada, autores.id id_autor, autores.nombre autor
	FROM notas 
	INNER JOIN notas_archivos ON notas_archivos.id_nota = notas.id AND notas_archivos.id_archivo = $id
	INNER JOIN autores ON autores.id = notas.id_autor
	WHERE notas.estado = 3
";
$notas = $database->list_assoc($notas_sql);

foreach($notas as $nota){
	$id_nota = $nota['id_nota'];
	$tipos_sql = "
		SELECT tipos.id id_tipo, tipos.nombre tipo FROM tipos
		INNER JOIN notas_tipos ON tipos.id = notas_tipos.id_tipo AND notas_tipos.id_nota = $id_nota
	";
	$tipos = $database->list_assoc($tipos_sql);
	
	$marcas_sql = "
		SELECT marcas.id id_marca, marcas.nombre marca FROM marcas
		INNER JOIN notas_marcas ON marcas.id = notas_marcas.id_marca AND notas_marcas.id_nota = $id_nota
	";
	$marcas = $database->list_assoc($marcas_sql);	
	
	$categorias_sql = "
		SELECT categorias.id id_categoria, categorias.nombre marca FROM categorias
		INNER JOIN notas_categorias ON categorias.id = notas_categorias.id_categoria AND notas_categorias.id_nota = $id_nota
	";
	$categorias = $database->list_assoc($categorias_sql);		
		
	$imagenes_sql = "
		SELECT imagenes.id id_imagen, imagenes.titulo imagen FROM imagenes
		INNER JOIN notas_imagenes ON imagenes.id = notas_imagenes.id_imagen AND notas_imagenes.id_nota = $id_nota
		LIMIT 0,2
	";
	$imagenes = $database->list_assoc($imagenes_sql);	
	
	$predeterminada_sql = "
		SELECT imagenes.id id_imagen, imagenes.titulo imagen FROM imagenes
		INNER JOIN notas_imagenes ON imagenes.id = notas_imagenes.id_imagen AND notas_imagenes.id_nota = $id_nota
		ORDER BY predeterminada DESC LIMIT 0,1
	";
	$predeterminada = $database->row_assoc($predeterminada_sql);		
	
	foreach($tipos as $tipo){
		$nota['tipos'][] = $tipo;
	}	
	
	foreach($imagenes as $idx => $imagen){
        if (($target == 5 && $idx < 1) || ($target == 6 && $idx < 3) || ( $target != 5 && $target != 6) )
            $nota['imagenes'][] = $imagen;
	}
	
	foreach($marcas as $marca){
		$nota['marcas'][] = $marca;
	}
	
	foreach($categorias as $categoria){
		$nota['categorias'][] = $categoria;
	}		
	
	$nota['predeterminada'] = $predeterminada;
	
	$paquete[] = $nota;	
}
if ($target == 5) {
    $strXml = put_entities(formatear_texto(msn_xml($paquete)));
    @file_put_contents(dirname(__FILE__)."/../msnxml/newsml2.xml", $strXml);
}

if ($target==7){
    $strXml = str_replace('&iquest;','', put_entities(formatear_texto(directorym_xml($paquete))));
    @file_put_contents(dirname(__FILE__)."/../directorym/".$archivo_xml["nombre"].".xml", $strXml);
}

header("Content-disposition: attachment; filename=$archivo_xml[nombre].xml");
header("Content-Type: text/xml; charset=utf-8");
header("Content-Transfer-Encoding: binary");
header("Cache-Control: must-revalidate");
header("Expires: 0"); 

if($target==1){
  // A los de yahoo le ponemos entities, porque de otra manera no lo aceptan.
	echo put_entities(formatear_texto(yahoo_xml($paquete)));
}
if($target==2){
	echo formatear_texto(mercadolibre_xml($paquete));
}

if($target==3){
	echo formatear_texto(uol_xml($paquete));
}

if($target==5){
    echo $strXml;
}

if($target==6){
    echo put_entities(formatear_texto(demotores_xml($paquete)));
}

if ($target==7){
    echo $strXml;
}



?>
