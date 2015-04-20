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
	$flv = $_FILES['flv'];
	$img = $_FILES['img'];
	$img_slider = $_FILES['img_slider'];

	$actualizar_video = $database->update("videos","titulo = '$titulo'", "id = $id");
	
	if($flv['size']>0){
		$video_id = $id;
		$video_path = "../uploads/videos/$video_id.flv";
		move_uploaded_file($flv['tmp_name'], $video_path);
	}
	
	if($img['size']>0){
		$image_id = $id;
		$image_path = "../uploads/videos_preview/$image_id.jpg";
		move_uploaded_file($img['tmp_name'], $image_path);
	}	

	if($img_slider['size']>0){
		$image_id = $id;
		$image_path = "../uploads/videos_preview/$image_id-slider.jpg";
		move_uploaded_file($img_slider['tmp_name'], $image_path);
	}	
	
	if($_POST['id_nota']){
		foreach($_POST['id_nota'] as $nota){
			$database->insert("notas_videos","id_video = $id, id_nota = $nota");
		}
	}
		
	header("Location: videos_editar.php?id=$id");
}

$video = $database->row_assoc("SELECT * FROM videos WHERE id = $id");
if(!$video){
	header('Location:videos.php');
	exit();
}
$notas_relacionadas = $database->list_assoc("SELECT notas_videos.id id_relacion, notas_videos.id_nota, notas.titulo FROM notas_videos INNER JOIN notas ON notas.id = notas_videos.id_nota AND notas.estado <> 1 AND notas_videos.id_video = $id");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar video</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript" src="assets/scripts/swfobject.js"></script>
<script type="text/javascript">
function video_player(){
	var so1 = new SWFObject("assets/flash/video_player.swf", "video", "400", "250", "4", "9");
	so1.addParam("menu","false"); 
	so1.addParam("wmode","transparent"); 
	so1.addVariable("id", "<?=$video['id'];?>")
	so1.write("video_player");
}

function buscarNotas(){
	new Ajax.Updater('notas_encontradas', 'notas_videos_buscar.php', {
	  parameters: { keyword: $F('keyword'), id_video: '<?=$id;?>' },
	  method: 'get'
	});
	$('notas_encontradas').show();
}

function borrarNota(id_relacion){
	new Ajax.Request('notas_videos_borrar.php', {
	  method: 'post',
	  parameters: {id:id_relacion}
	});
	
	$('nota'+id_relacion).remove();
}
</script>
</head>
<body onload="Javascript:video_player();">
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="videos.php">Videos</a> &raquo; &quot;<?=$video['titulo'];?>&quot;</h1>
		<div class="form">
			<form action="videos_editar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Titulo</td>
						<td><input name="titulo" type="text" class="field" id="titulo" value="<?=$video['titulo'];?>" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><div id="video_player">cargando reproductor de video</div></td>
					</tr>
					<tr>
						<td class="label">Reemplazar  FLV</td>
						<td><input name="flv" type="file" class="field" id="flv" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">Preview</td>
						<td><img src="/uploads/videos_preview/<?=$video['id'];?>.jpg" /></td>
					</tr>
					<tr>
						<td class="label">Reeemplazar Preview<br />
						<span class="small">337px x 188px</span></td>
						<td><input name="img" type="file" class="field" id="img" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">Preview slider</td>
						<td><img src="/uploads/videos_preview/<?=$video['id'];?>-slider.jpg" /></td>
					</tr>
					<tr>
						<td class="label">Reeemplazar Preview slider<br />
						<span class="small">650px x 430px</span></td>
						<td><input name="img_slider" type="file" class="field" id="img-slider" style="width:600px" /></td>
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
						<td><button type="submit" class="bold1">actualizar video</button>
						
						<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
