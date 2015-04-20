<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$id = $_GET['id'];

if($_POST){	
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$opcion1 = $_POST['opcion1'];
	$opcion2 = $_POST['opcion2'];
	$opcion3 = $_POST['opcion3'];
	$opcion4 = $_POST['opcion4'];
	$opcion5 = $_POST['opcion5'];
	$opcion6 = $_POST['opcion6'];
	$cargar_encuesta = $database->update("encuestas","titulo = '$titulo', opcion1 = '$opcion1', opcion2 = '$opcion2', opcion3 = '$opcion3', opcion4 = '$opcion4', opcion5 = '$opcion5', opcion6 = '$opcion6'", "id = $id");
	header("Location: encuestas_editar.php?id=$id");
}

$encuesta = $database->row_assoc("SELECT * FROM encuestas WHERE id = $id");
if(!$encuesta){
	header('Location:encuestas.php');
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar encuesta</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script language="javascript" type="text/javascript" src="assets/tinymce/tiny_mce.js"></script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="encuestas.php">Encuestas</a> &raquo; &quot;<?=$encuesta['titulo'];?>&quot;</h1>
		<div class="form">
			<form action="encuestas_editar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Titulo</td>
						<td><input name="titulo" type="text" class="field" id="titulo" value="<?=$encuesta['titulo'];?>" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td class="label"><span class="bold1">Opcion 1</span></td>
						<td><input name="opcion1" type="text" class="field" id="opcion1" style="width:400px" value="<?=$encuesta['opcion1'];?>" /></td>
					</tr>
					<tr>
						<td class="label"><span class="bold1">Opcion 2</span></td>
						<td><input name="opcion2" type="text" class="field" id="opcion2" style="width:400px" value="<?=$encuesta['opcion2'];?>" /></td>
					</tr>
					<tr>
						<td class="label"><span class="bold1">Opcion 3</span></td>
						<td><input name="opcion3" type="text" class="field" id="opcion3" style="width:400px" value="<?=$encuesta['opcion3'];?>" /></td>
					</tr>
					<tr>
						<td class="label"><span class="bold1">Opcion 4</span></td>
						<td><input name="opcion4" type="text" class="field" id="opcion4" style="width:400px" value="<?=$encuesta['opcion4'];?>" /></td>
					</tr>
					<tr>
						<td class="label"><span class="bold1">Opcion 5</span></td>
						<td><input name="opcion5" type="text" class="field" id="opcion5" style="width:400px" value="<?=$encuesta['opcion5'];?>" /></td>
					</tr>
					<tr>
						<td class="label"><span class="bold1">Opcion 6</span></td>
						<td><input name="opcion6" type="text" class="field" id="opcion6" style="width:400px" value="<?=$encuesta['opcion6'];?>" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">actualizar encuesta</button>
						
						<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
