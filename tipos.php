<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

header('Content-Type: text/html; charset=iso-8859-2');

$database = new db_mysql();
$database->connect();

if($_POST){	
	$nombre = $_POST['nombre'];

	$cargar_tipo = $database->insert("tipos","nombre = '$nombre'");
	header("Location: tipos.php");
}

$keyword = $_GET['keyword'];

$tipos_sql = "
	SELECT * FROM tipos WHERE nombre LIKE '%$keyword%' ORDER BY nombre ASC
";
$tipos = $database->list_assoc($tipos_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Tipos</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_tipo(){
	close_boxes();
	$('add_tipo').show();
	$('add_tipo_button').addClassName('active');
	
}

function search_tipos(){
	close_boxes();
	$('search_tipos').show();
	$('search_tipos_button').addClassName('active');
}

function close_boxes(){
	$('search_tipos').hide();
	$('add_tipo').hide();
	$('add_tipo_button').removeClassName('active');	
	$('search_tipos_button').removeClassName('active');
}

function validate_add_tipo(){
	if($F('nombre')==''){
		alert('Ingrese el nombre del tipo');
		$('nombre').focus();
		return false
	}
	return true
}

function checkHash(){
	if(location.hash=='#add'){
		add_tipo();
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
		<h1>Tipos</h1>
		<div class="options">
			<ul>
				<li><a id="add_tipo_button" href="#add" class="button" onclick="Javascript:add_tipo();">Agregar nuevo tipo</a></li>
				<li><a id="search_tipos_button" href="#search" class="button" onclick="Javascript:search_tipos();">Buscar tipos</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_tipo">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_tipo();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Nombre</td>
						<td><input name="nombre" type="text" class="field" id="nombre" style="width:600px" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear tipo</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_tipos">
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
				<? if($tipos){ ?>
				<? foreach($tipos as $tipo){ ?>
				<tr>
					<td><a href="tipos_editar.php?id=<?=$tipo['id'];?>">
						<?=$tipo['nombre'];?>
						</a></td>
					<td><a href="tipos_borrar.php?id=<?=$tipo['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				
				<? } else { ?>
				<tr class="empty">
					<td colspan="2">No se encontraron tipos <a href="#" onclick="Javascript:search_tipos();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
