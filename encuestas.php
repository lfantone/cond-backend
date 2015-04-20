<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

if($_POST){	
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$opcion1 = $_POST['opcion1'];
	$opcion2 = $_POST['opcion2'];
	$opcion3 = $_POST['opcion3'];
	$opcion4 = $_POST['opcion4'];
	$opcion5 = $_POST['opcion5'];
	$opcion6 = $_POST['opcion6'];
	$cargar_encuesta = $database->insert("encuestas","titulo = '$titulo', opcion1 = '$opcion1', opcion2 = '$opcion2', opcion3 = '$opcion3', opcion4 = '$opcion4', opcion5 = '$opcion5', opcion6 = '$opcion6',estado = 0 ");
	header("Location: encuestas.php");
}

$keyword = htmlspecialchars($_GET['keyword']);
$encuestas_sql = "
	SELECT * FROM encuestas WHERE titulo LIKE '%$keyword%' AND estado = 0 ORDER BY id DESC
";
$encuestas = $database->list_assoc($encuestas_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Encuestas</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_encuesta(){
	close_boxes();
	$('add_encuesta').show();
	$('add_encuesta_button').addClassName('active');
}

function search_encuestas(){
	close_boxes();
	$('search_encuestas').show();
	$('search_encuestas_button').addClassName('active');
}

function close_boxes(){
	$('search_encuestas').hide();
	$('add_encuesta').hide();
	$('add_encuesta_button').removeClassName('active');	
	$('search_encuestas_button').removeClassName('active');
}

function validate_add_encuesta(){
	if($F('titulo')==''){
		alert('Ingrese el titulo de la encuesta');
		$('titulo').focus();
		return false
	}
	return true
}
</script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1>Encuestas </h1>
		<div class="options">
			<ul>
				<li><a id="add_encuesta_button" href="#add" class="button" onclick="Javascript:add_encuesta();">Agregar nueva encuesta</a></li>
				<li><a id="search_encuestas_button" href="#search" class="button" onclick="Javascript:search_encuestas();">Buscar encuestas</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_encuesta">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_encuesta();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Titulo</td>
						<td><input name="titulo" type="text" class="field" id="titulo" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td class="label">Opcion 1</td>
						<td><input name="opcion1" type="text" class="field" id="opcion1" style="width:400px" /></td>
					</tr>
					<tr>
						<td class="label">Opcion 2</td>
						<td><input name="opcion2" type="text" class="field" id="opcion2" style="width:400px" /></td>
					</tr>
					<tr>
						<td class="label">Opcion 3</td>
						<td><input name="opcion3" type="text" class="field" id="opcion3" style="width:400px" /></td>
					</tr>
					<tr>
						<td class="label">Opcion 4</td>
						<td><input name="opcion4" type="text" class="field" id="opcion4" style="width:400px" /></td>
					</tr>
					<tr>
						<td class="label">Opcion 5</td>
						<td><input name="opcion5" type="text" class="field" id="opcion5" style="width:400px" /></td>
					</tr>
					<tr>
						<td class="label">Opcion 6</td>
						<td><input name="opcion6" type="text" class="field" id="opcion6" style="width:400px" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear encuesta</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_encuestas">
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
					<th width="95%">Titulo</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<? if($encuestas){ ?>
				<? foreach($encuestas as $encuesta){ ?>
				<tr>
					<td><a href="encuestas_editar.php?id=<?=$encuesta['id'];?>">
						<?=$encuesta['titulo'];?>
						</a></td>
					<td><a href="encuestas_borrar.php?id=<?=$encuesta['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				<? } else { ?>
				<tr class="empty">
					<td colspan="2">No se encontraron encuestas <a href="#" onclick="Javascript:search_encuestas();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
