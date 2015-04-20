<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

if($_POST){	
	// actualizar ficha
}

$id = $_GET['id'];

$ficha = $database->row_assoc("SELECT * FROM fichas WHERE id = $id");
if(!$ficha){
	header('Location:fichas.php');
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar ficha</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="fichas.php">Fichas</a> &raquo; &quot;
			<?=$ficha['titulo'];?>
			&quot;</h1>
		<div class="form">
			<form action="fichas_editar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Estado</td>
						<td><select name="estado" id="estado">
								<? foreach($estados as $estado){?>
								<option value="<?=$estado['id'];?>">
								<?=$estado['nombre'];?>
								</option>
								<? } ?>
							</select></td>
					</tr>
					<tr>
						<td class="label">Marca</td>
						<td><select name="id_marca" id="id_marca">
								<? foreach($marcas as $marca){?>
								<option value="<?=$marca['id'];?>">
								<?=$marca['nombre'];?>
								</option>
								<? } ?>
							</select></td>
					</tr>
					<tr>
						<td class="label">Modelo</td>
						<td><input name="modelo" type="text" class="field" id="modelo" value="" /></td>
					</tr>
					<tr>
						<td class="label">Descripcion</td>
						<td><textarea name="descripcion" cols="45" rows="5" class="field" id="descripcion"></textarea></td>
					</tr>
					<? foreach($categorias as $categoria){?>
					<tr>
						<td>&nbsp;</td>
						<td><h1>
								<?=$categoria['titulo'];?>
							</h1></td>
					</tr>
					<? foreach($categoria['subcategorias'] as $subcategoria) {?>
					<tr>
						<td>&nbsp;</td>
						<td>&#8226;
							<?=$subcategoria['titulo'];?></td>
					</tr>
					<? for($i=$subcategoria['rango'][0];$i<=$subcategoria['rango'][1];$i++){?>
					<tr>
						<td class="label"><?=$campos[$i][0];?></td>
						<td><input name="campo<?=$i;?>" type="text" class="field" id="campo<?=$i;?>" />
							<? if($campos[$i][1]!=''){?>
							(
							<?=$campos[$i][1];?>
							)
							<? } ?></td>
					</tr>
					<? } ?>
					<? } ?>
					<? } ?>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">actualizar ficha</button>
							<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
