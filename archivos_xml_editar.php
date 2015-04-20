<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

if($_POST){	
	$id = $_POST['id'];
	$estado = $_POST['estado'];

	$actualizar_archivo = $database->update("archivos_xml","estado = '$estado'", "id = $id");			
	header("Location: archivos_xml_editar.php?id=$id");
}

$id = $_GET['id'];

$archivo_xml = $database->row_assoc("SELECT * FROM archivos_xml WHERE id = $id");
if(!$archivo_xml){
	header('Location:archivos_xml.php');
	exit();
}

$notas_sql = "
	SELECT notas.id, notas.titulo, notas_archivos.id id_relacion
	FROM notas 
	INNER JOIN notas_archivos ON notas_archivos.id_nota = notas.id AND notas_archivos.id_archivo = $id
	WHERE notas.estado = 3
	ORDER BY notas_archivos.id DESC
";
$notas = $database->list_assoc($notas_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar archivo xml</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="archivos_xml.php">Archivos xml</a> &raquo; &quot;<?=$archivo_xml['nombre'];?>.xml&quot;</h1>
		<div class="form">
			<form action="<?$PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Estado</td>
						<td><select name="estado" id="estado">
							<option value="2" <? if($archivo_xml['estado']==2){echo 'selected=selected';}?> >Borrador</option>
							<option value="3" <? if($archivo_xml['estado']==3){echo 'selected=selected';}?> >Publicado</option>
						</select></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">actualizar archivo</button>
								<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="grid">
			<table width="100%" border="0" cellspacing="0" cellpadding="6">
				<tr>
					<th width="95%">Nota</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<? if($notas){ ?>
				<? foreach($notas as $nota){ ?>
				<tr>
					<td><?=$nota['titulo'];?></td>
					<td><a href="notas_xml_borrar.php?id=<?=$nota['id_relacion'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				<? } else { ?>
				<tr class="empty">
					<td colspan="2">Este archivo xml no contiene notas</td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
