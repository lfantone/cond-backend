<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

header('Content-Type: text/html; charset=iso-8859-2');

$database = new db_mysql();
$database->connect();

if($_POST){	
	$nombre = $_POST['nombre'];
	$id_empresa = $_POST['id_empresa'];

	$cargar_archivo_xml = $database->insert("archivos_xml","nombre = '$nombre', id_empresa = $id_empresa, fecha = NOW(), estado = 2");
	header("Location: archivos_xml.php");
}

$keyword = $_GET['keyword'];

$empresas = $database->list_assoc("SELECT * FROM empresas");

$archivos_xml_sql = "
	SELECT archivos_xml.id, archivos_xml.nombre, empresas.id as id_empresa, empresas.nombre as empresa, archivos_xml.fecha, estados.nombre estado FROM archivos_xml
	INNER JOIN empresas ON archivos_xml.id_empresa = empresas.id
	INNER JOIN estados ON archivos_xml.estado = estados.id
	WHERE (archivos_xml.nombre LIKE '%$keyword%' OR empresas.nombre LIKE '%$keyword%') AND estado IN (2,3)
	ORDER BY nombre ASC
";
$archivos_xml = $database->list_assoc($archivos_xml_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Archivos xml</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_archivo_xml(){
	close_boxes();
	$('add_archivo_xml').show();
	$('add_archivo_xml_button').addClassName('active');
	
}

function search_archivos_xml(){
	close_boxes();
	$('search_archivos_xml').show();
	$('search_archivos_xml_button').addClassName('active');
}

function close_boxes(){
	$('search_archivos_xml').hide();
	$('add_archivo_xml').hide();
	$('add_archivo_xml_button').removeClassName('active');	
	$('search_archivos_xml_button').removeClassName('active');
}

function validate_add_archivo_xml(){
	if($F('nombre')==''){
		alert('Ingrese el nombre de la archivo xml');
		$('nombre').focus();
		return false
	}
	return true
}

function checkHash(){
	if(location.hash=='#add'){
		add_archivo_xml();
	}
}
</script>
</head>
<body onload="checkHash();">
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1>Archivos xml</h1>
		<div class="options">
			<ul>
				<li><a id="add_archivo_xml_button" href="#add" class="button" onclick="Javascript:add_archivo_xml();">Agregar nuevo archivo xml</a></li>
				<li><a id="search_archivos_xml_button" href="#search" class="button" onclick="Javascript:search_archivos_xml();">Buscar archivos xml</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_archivo_xml">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_archivo_xml();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Nombre</td>
						<td><input name="nombre" type="text" class="field" id="nombre"/>
							<span class="small">.xml</span></td>
					</tr>
					<tr>
						<td class="label">Empresa</td>
						<td><select name="id_empresa" id="id_empresa">
								<? foreach($empresas as $empresa){ ?>
								<option value="<?=$empresa['id'];?>">
								<?=$empresa['nombre'];?>
								</option>
								<? } ?>
							</select></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear archivo xml</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_archivos_xml">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form id="form2" name="form2" method="get" action="<?$PHP_SELF;?>">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Keyword:</td>
						<td><input name="keyword" type="text" class="field" id="keyword" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">search</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="grid">
			<table width="100%" border="0" cellspacing="0" cellpadding="6">
				<tr>
					<th width="20%">Empresa</th>
					<th width="21%">Nombre</th>
					<th width="22%">Fecha</th>
					<th width="13%">Descargar</th>
					<th width="19%">Publicar</th>
					<th width="19%">Estado</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<? if($archivos_xml){ ?>
				<? foreach($archivos_xml as $archivo_xml){ ?>
				<tr>
					<td><?=$archivo_xml['empresa'];?></td>
					<td><a href="archivos_xml_editar.php?id=<?=$archivo_xml['id'];?>"><?=$archivo_xml['nombre'];?>.xml</a></td>
					<td><?=$archivo_xml['fecha'];?></td>
					<td>
					<a href="archivos_xml_generar.php?id=<?=$archivo_xml['id'];?>&target=<?=$archivo_xml['id_empresa'];?>"><img src="assets/images/rss.gif" width="36" height="15" border="0" /></a>					</td>
					<td><a href="archivos_xml_publicar.php"><img src="assets/images/upload.gif" width="20" height="20" border="0" /></a></td>
					<td><?=$archivo_xml['estado'];?></td>
					<td><a href="archivos_xml_borrar.php?id=<?=$archivo_xml['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				<? } else { ?>
				<tr class="empty">
					<td colspan="7">No se encontraron archivos xml <a href="#" onclick="Javascript:search_archivos_xml();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
