<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

header('Content-Type: text/html; charset=iso-8859-2');

$database = new db_mysql();
$database->connect();

if($_POST){	
	$nombre = $_POST['nombre'];
	#$id_pais = sprintf('%d', ($_POST['id_pais']?$_POST['id_pais']:2));

	$cargar_tarea = $database->insert("tareas","nombre = '$nombre'");
	header("Location: tareas.php");
}

$keyword = $_GET['keyword'];

$tareas_sql = "
	SELECT * FROM tareas WHERE nombre LIKE '%$keyword%' ORDER BY nombre ASC
";
$tareas = $database->list_assoc($tareas_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Tareas</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_tarea(){
	close_boxes();
	$('add_tarea').show();
	$('add_tarea_button').addClassName('active');
	
}

function search_tareas(){
	close_boxes();
	$('search_tareas').show();
	$('search_tareas_button').addClassName('active');
}

function close_boxes(){
	$('search_tareas').hide();
	$('add_tarea').hide();
	$('add_tarea_button').removeClassName('active');	
	$('search_tareas_button').removeClassName('active');
}

function validate_add_tarea(){
	if($F('nombre')==''){
		alert('Ingrese el nombre de la tarea');
		$('nombre').focus();
		return false
	}
	return true
}

function checkHash(){
	if(location.hash=='#add'){
		add_tarea();
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
		<h1>Tareas</h1>
		<div class="options">
			<ul>
				<li><a id="add_tarea_button" href="#add" class="button" onclick="Javascript:add_tarea();">Agregar nueva tarea</a></li>
				<li><a id="search_tareas_button" href="#search" class="button" onclick="Javascript:search_tareas();">Buscar tareas</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_tarea">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_tarea();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Nombre</td>
						<td><input name="nombre" type="text" class="field" id="nombre" style="width:600px" /></td>
					</tr>
          <tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear tarea</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_tareas">
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
					<th width="96%">Nombre</th>
					<th width="4%">&nbsp;</th>
				</tr>
				<? if($tareas){ ?>
				<? foreach($tareas as $tarea){ ?>
				<tr>
					<td><a href="tareas_editar.php?id=<?=$tarea['id_tarea'];?>">
						<?=$tarea['nombre'];?>
						</a></td>
					<td><a href="tareas_borrar.php?id=<?=$tarea['id_tarea'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				
				<? } else { ?>
				<tr class="empty">
					<td colspan="2">No se encontraron tareas <a href="#" onclick="Javascript:search_tareas();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
