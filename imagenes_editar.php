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
	$jpg = $_FILES['jpg'];

	$actualizar_imagen = $database->update("imagenes","titulo = '$titulo'", "id = $id");
	
	if($jpg['size']>0){
		$imagen_id = $id;
		$imagen_path = "../uploads/images/$imagen_id.jpg";
		move_uploaded_file($jpg['tmp_name'], $imagen_path);
	}
	
	if($_POST['id_nota']){	
		foreach($_POST['id_nota'] as $nota){
			$database->insert("notas_imagenes","id_imagen = $id, id_nota = $nota");
		}
	}
		
	header("Location: imagenes_editar.php?id=$id");
}

$imagen = $database->row_assoc("SELECT * FROM imagenes WHERE id = $id");
if(!$imagen){
	header('Location:imagenes.php');
	exit();
}
$notas_relacionadas = $database->list_assoc("SELECT notas_imagenes.id id_relacion, notas_imagenes.id_nota, notas.titulo FROM notas_imagenes INNER JOIN notas ON notas.id = notas_imagenes.id_nota AND notas.estado <> 1 AND notas_imagenes.id_imagen = $id");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar imagen</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript" src="assets/scripts/swfobject.js"></script>
<script type="text/javascript">
function buscarNotas(){
	new Ajax.Updater('notas_encontradas', 'notas_imagenes_buscar.php', {
	  parameters: { keyword: $F('keyword'), id_imagen: '<?=$id;?>' },
	  method: 'get'
	});
	$('notas_encontradas').show();
}

function borrarNota(id_relacion){
	new Ajax.Request('notas_imagenes_borrar.php', {
	  method: 'post',
	  parameters: {id:id_relacion}
	});
	
	$('nota'+id_relacion).remove();
}
</script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="imagenes.php">Imagenes</a> &raquo; &quot;<?=$imagen['titulo'];?>&quot;</h1>
		<div class="form">
			<form action="imagenes_editar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					
					<tr>
						<td class="label">Titulo</td>
						<td><input name="titulo" type="text" class="field" id="titulo" value="<?=$imagen['titulo'];?>" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><img src="../uploads/images/<?=$imagen['id'];?>.jpg" /></td>
					</tr>
					<tr>
						<td class="label">Reemplazar JPG </td>
						<td><input name="jpg" type="file" class="field" id="jpg" style="width:600px" /></td>
					</tr>
					
					<tr>
						<td class="label">Notas relacionadas</td>
						<td>
						<? if($notas_relacionadas){?>
						<div class="box1"><table border="0" cellpadding="2" cellspacing="2">
							<? foreach($notas_relacionadas as $nota){ ?>
							<tr id="nota<?=$nota['id_relacion'];?>">
								<td><div class="close1"><a href="Javascript:borrarNota(<?=$nota['id_relacion']?>);"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div></td>
								<td><a class="small" href="notas_editar.php?id=<?=$nota['id_nota'];?>"><?=$nota['titulo'];?></a></td>
								</tr>
							<? } ?>
						</table></div>
						<? } else { ?>
						<span class="message_error">No hay notas relacionadas.</span>						<? } ?>						</td>
					</tr>
					<tr>
						<td class="label">Relacionar nota</td>
						<td><input name="keyword" type="text" class="field" id="keyword" value="" style="width:300px" />
						<button type="button" onclick="Javascript:buscarNotas();">buscar</button>						 
						   o <a href="notas.php#add">crear nota</a></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><div class="box1" id="notas_encontradas" style="display:none"></div></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">actualizar imagen</button>
						
						<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
