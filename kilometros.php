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

	$cargar_kilometro = $database->insert("kilometros","nombre = '$nombre'");
	header("Location: kilometros.php");
}

$keyword = $_GET['keyword'];

$kilometros_sql = "
	SELECT * FROM kilometros WHERE nombre LIKE '%$keyword%' ORDER BY nombre ASC
";
$kilometros = $database->list_assoc($kilometros_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Kilometros</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_kilometro(){
	close_boxes();
	$('add_kilometro').show();
	$('add_kilometro_button').addClassName('active');
	
}

function search_kilometros(){
	close_boxes();
	$('search_kilometros').show();
	$('search_kilometros_button').addClassName('active');
}

function close_boxes(){
	$('search_kilometros').hide();
	$('add_kilometro').hide();
	$('add_kilometro_button').removeClassName('active');	
	$('search_kilometros_button').removeClassName('active');
}

function validate_add_kilometro(){
	if($F('nombre')==''){
		alert('Ingrese el nombre de la kilometro');
		$('nombre').focus();
		return false
	}
	return true
}

function checkHash(){
	if(location.hash=='#add'){
		add_kilometro();
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
		<h1>Kil&oacute;metros</h1>
		<div class="options">
			<ul>
				<li><a id="add_kilometro_button" href="#add" class="button" onclick="Javascript:add_kilometro();">Agregar nuevo kilometro</a></li>
				<li><a id="search_kilometros_button" href="#search" class="button" onclick="Javascript:search_kilometros();">Buscar kilometros</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_kilometro">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_kilometro();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Nombre</td>
						<td><input name="nombre" type="text" class="field" id="nombre" style="width:600px" /></td>
					</tr>
          <tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear kilometro</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_kilometros">
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
				<? if($kilometros){ ?>
				<? foreach($kilometros as $kilometro){ ?>
				<tr>
					<td><a href="kilometros_editar.php?id=<?=$kilometro['id_kilometro'];?>">
						<?=$kilometro['nombre'];?>
						</a></td>
					<td><a href="kilometros_borrar.php?id=<?=$kilometro['id_kilometro'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				
				<? } else { ?>
				<tr class="empty">
					<td colspan="2">No se encontraron kil&oacute;metros <a href="#" onclick="Javascript:search_kilometros();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
