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

	$cargar_servicio = $database->insert("servicios","nombre = '$nombre'");
	$id_servicio = $database->insert_id();
	header("Location: servicios_editar.php?id=$id_servicio");
}

$keyword = $_GET['keyword'];

$servicios_sql = "
	SELECT * FROM servicios WHERE nombre LIKE '%$keyword%' ORDER BY nombre ASC
";
$servicios = $database->list_assoc($servicios_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Servicios</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_servicio(){
	close_boxes();
	$('add_servicio').show();
	$('add_servicio_button').addClassName('active');
	
}

function search_servicios(){
	close_boxes();
	$('search_servicios').show();
	$('search_servicios_button').addClassName('active');
}

function close_boxes(){
	$('search_servicios').hide();
	$('add_servicio').hide();
	$('add_servicio_button').removeClassName('active');	
	$('search_servicios_button').removeClassName('active');
}

function validate_add_servicio(){
	if($F('nombre')==''){
		alert('Ingrese el nombre de la servicio');
		$('nombre').focus();
		return false
	}
	return true
}

function checkHash(){
	if(location.hash=='#add'){
		add_servicio();
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
		<h1>Servicios</h1>
		<div class="options">
			<ul>
				<li><a id="add_servicio_button" href="#add" class="button" onclick="Javascript:add_servicio();">Agregar nueva servicio</a></li>
				<li><a id="search_servicios_button" href="#search" class="button" onclick="Javascript:search_servicios();">Buscar servicios</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_servicio">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_servicio();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Nombre</td>
						<td><input name="nombre" type="text" class="field" id="nombre" style="width:600px" /></td>
					</tr>
          <tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear servicio</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_servicios">
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
					<th width="2%">ID</th>
					<th width="90%">Nombre</th>
					<th width="4%">&nbsp;</th>
					<th width="4%">&nbsp;</th>
				</tr>
				<? if($servicios){ ?>
				<? foreach($servicios as $servicio){ ?>
				<tr>
					<td><a href="servicios_editar.php?id=<?=$servicio['id_servicio'];?>"><?=$servicio['id_servicio'];?></a></td>
					<td><a href="servicios_editar.php?id=<?=$servicio['id_servicio'];?>">
						<?=$servicio['nombre'];?>
						</a></td>
					<td><a href="servicios_copiar.php?id=<?=$servicio['id_servicio'];?>"><img src="assets/images/copy.png" width="13" height="14" border="0" /></a></td>
					<td><a href="servicios_borrar.php?id=<?=$servicio['id_servicio'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				
				<? } else { ?>
				<tr class="empty">
					<td colspan="2">No se encontraron servicios <a href="#" onclick="Javascript:search_servicios();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
