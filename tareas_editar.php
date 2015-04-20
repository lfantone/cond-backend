<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = $_GET['id'];

if($_POST){	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];

	$actualizar_tarea = $database->update("tareas","nombre = '$nombre'", "id_tarea = $id");			
	header("Location: tareas.php");
}

$tarea = $database->row_assoc("SELECT * FROM tareas WHERE id_tarea = $id");
if(!$tarea){
	header('Location:tareas.php');
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar tarea</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="tareas.php">Tareas</a> &raquo; &quot;
			<?=$tarea['nombre'];?>
			&quot;</h1>
		<div class="form">
			<form action="tareas_editar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Nombre</td>
						<td><input name="nombre" type="text" class="field" id="nombre" value="<?=$tarea['nombre'];?>" style="width:600px" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">actualizar tarea</button>
							<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
