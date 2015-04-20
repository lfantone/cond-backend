<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$id = $_GET['id'];

if($_POST){	
	$id = $_POST['id'];
	$estado = $_POST['estado'];
	$titulo = $_POST['titulo'];
	$subtitulo = $_POST['subtitulo'];
  $copete = $_POST['copete'];
  if ($_POST['fecha_a_publicar'])
    $fecha_a_publicar = $_POST['fecha_a_publicar'];
  else
    $fecha_a_publicar = date("Y-m-d H:i:s");
  //$contenido = clean_string($_POST['contenido']);
  $contenido = $_POST['contenido'];

	$cargar_nota = $database->update("magazine_notas","titulo = '$titulo', subtitulo = '$subtitulo', copete = '$copete', contenido = '$contenido', estado = $estado, fecha_a_publicar = '$fecha_a_publicar', fecha_publicada = NOW()", "id = $id");
	
	if($_POST['video']){
		foreach($_POST['id_video'] as $video){
			//ed$database->insert("notas_videos","id_video = $video, id_nota = $id");
		}
	}
	
	if($_POST['id_imagen']){
		foreach($_POST['id_imagen'] as $imagen){
			//ed$database->insert("notas_imagenes","id_imagen = $imagen, id_nota = $id");
		}	
	}
	
	//paises
	//ed$database->query("DELETE FROM notas_paises WHERE id_nota = $id");	
	if($_POST['id_pais']){
		foreach($_POST['id_pais'] as $pais){
			//ed$database->insert("notas_paises","id_pais = $pais, id_nota = $id");
		}	
	}

	//marcas
	//ed$database->query("DELETE FROM notas_marcas WHERE id_nota = $id");	
	if($_POST['id_marca']){
		foreach($_POST['id_marca'] as $marca){
			//ed$database->insert("notas_marcas","id_marca = $marca, id_nota = $id");
		}	
	}	
	
	//tipos
	//ed$database->query("DELETE FROM notas_tipos WHERE id_nota = $id");
	if($_POST['id_tipo']){
		foreach($_POST['id_tipo'] as $tipo){
			$database->insert("notas_tipos","id_tipo = $tipo, id_nota = $id");
		}	
	}	
	
	//categorias
	//ed$database->query("DELETE FROM notas_categorias WHERE id_nota = $id");	
	if($_POST['id_categoria']){
		foreach($_POST['id_categoria'] as $categoria){
			//ed$database->insert("notas_categorias","id_categoria = $categoria, id_nota = $id");
		}	
	}			
		
	header("Location: magazine_notas_editar.php?id=$id");
}

$nota = $database->row_assoc("SELECT * FROM magazine_notas WHERE id = $id");
if(!$nota){
	header('Location:magazine_notas.php');
	exit();
}

//ed$imagenes_relacionadas = $database->list_assoc("SELECT notas_imagenes.id id_relacion, notas_imagenes.id_imagen, imagenes.titulo, notas_imagenes.predeterminada FROM notas_imagenes INNER JOIN imagenes ON imagenes.id = notas_imagenes.id_imagen AND imagenes.estado = 3 AND notas_imagenes.id_nota = $id");
//ed$videos_relacionados = $database->list_assoc("SELECT notas_videos.id id_relacion, notas_videos.id_video, videos.titulo FROM notas_videos INNER JOIN videos ON videos.id = notas_videos.id_video AND videos.estado = 3 AND notas_videos.id_nota = $id");

/*ed$paises_sql = "
	SELECT paises.id, paises.nombre, IFNULL(notas_paises.id,0) id_relacion 
	FROM paises
	LEFT OUTER JOIN notas_paises ON notas_paises.id_pais = paises.id AND notas_paises.id_nota = $id ORDER BY paises.nombre ASC
";
$paises = $database->list_assoc($paises_sql);

$marcas_sql = "
	SELECT marcas.id, marcas.nombre, IFNULL(notas_marcas.id,0) id_relacion 
	FROM marcas
	LEFT OUTER JOIN notas_marcas ON notas_marcas.id_marca = marcas.id AND notas_marcas.id_nota = $id ORDER BY marcas.nombre ASC
";
$marcas = $database->list_assoc($marcas_sql);

$tipos_sql = "
	SELECT tipos.id, tipos.nombre, IFNULL(notas_tipos.id,0) id_relacion 
	FROM tipos
	LEFT OUTER JOIN notas_tipos ON notas_tipos.id_tipo = tipos.id AND notas_tipos.id_nota = $id ORDER BY tipos.nombre ASC
";
$tipos = $database->list_assoc($tipos_sql);

$categorias_sql = "
	SELECT categorias.id, categorias.nombre, IFNULL(notas_categorias.id,0) id_relacion 
	FROM categorias
	LEFT OUTER JOIN notas_categorias ON notas_categorias.id_categoria = categorias.id AND notas_categorias.id_nota = $id ORDER BY categorias.nombre ASC
";
$categorias = $database->list_assoc($categorias_sql);

$comentarios = $database->list_assoc("SELECT * FROM comentarios WHERE id_nota = $id");

$galeria = $database->list_assoc("SELECT galeria.id id_relacion, notas.id id_nota FROM magazine_notas INNER JOIN galeria ON galeria.id_nota = notas.id AND notas.id = $id");*/

function tiny_mce_format($text) {

	//$text = str_replace("\r\n", "<br/>", $text);
	return $text;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar nota</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<style type="text/css">@import url(assets/scripts/calendar/calendar-win2k-1.css);</style>
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript" src="assets/scripts/calendar/calendar.js"></script>
<script type="text/javascript" src="assets/scripts/calendar/lang/calendar-en.js"></script>
<script type="text/javascript" src="assets/scripts/calendar/calendar-setup.js"></script>
<script language="javascript" type="text/javascript" src="assets/scripts/tinymce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "exact",
	theme : "advanced",
	//elements : "contenido",
	remove_linebreaks : false,
	apply_source_formatting : true,
	force_br_newlines : true,
	force_p_newlines : true, //<-- seems to be working fine
	cleanup : false,	
	theme_advanced_buttons1 : "image,bold,italic,underline,separator,forecolor,separator,fontsizeselect,separator,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,undo,redo,link,unlink",
	theme_advanced_buttons2 : "",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_path_location : "bottom",
	extended_valid_elements : "a[name|href|target|title|onclick],img[elemento|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[elemento|width|size|noshade],font[face|size|color|style],span[elemento|align|style]"
});

// videos
function buscarVideos(){
	new Ajax.Updater('videos_encontrados', 'magazine_videos_buscar.php', {
	  parameters: { keyword: $F('image_keyword'), id_nota: '<?=$id;?>' },
	  method: 'get'
	});
	$('videos_encontrados').show();
}

function borrarVideo(id_relacion){
	new Ajax.Request('magazine_notas_videos_borrar.php', {
	  method: 'post',
	  parameters: {id:id_relacion}
	});
	
	$('video'+id_relacion).remove();
}

// imagenes
function buscarImagenes(){
	new Ajax.Updater('imagenes_encontradas', 'magazine_imagenes_buscar.php', {
	  method: 'get',
	  parameters: { keyword: $F('image_keyword'), id_nota: '<?=$id;?>' }

	});
	$('imagenes_encontradas').show();
}

function borrarImagen(id_relacion){
	new Ajax.Request('magazine_notas_imagenes_borrar.php', {
	  method: 'post',
	  parameters: {id:id_relacion}
	});
	
	$('imagen'+id_relacion).remove();
}

function borrarComentario(id_comentario){
	new Ajax.Request('magazine_comentarios_borrar.php', {
	  method: 'post',
	  parameters: {id:id_comentario}
	});
	
	$('comentario'+id_comentario).remove();
}
</script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="magazine_notas.php">Magazine Notas</a> &raquo; &quot;
			<?=$nota['titulo'];?>
			&quot;</h1>
		<div class="form">
			<form action="magazine_notas_editar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Estado</td>
						<td><select name="estado" id="estado">
								<option value="2" <? if($nota['estado']==2){echo 'selected=selected';}?> >Borrador</option>						
								<option value="3" <? if($nota['estado']==3){echo 'selected=selected';}?> >Publicada</option>
							</select>						</td>
					</tr>
					<!--<tr>
						<td class="label">&nbsp;</td>
						<td><? if(!$galeria){?>
							<a href="magazine_notas_galeria_agregar.php?id=<?=$nota['id'];?>">mostrar en la galer&iacute;a</a>
							<? } else { ?>
							<a href="magazine_notas_galeria_borrar.php?id=<?=$galeria['id_relacion'];?>">Eliminar de la galer&iacute;a</a>
							<? } ?></td>
					</tr>
					<? if($nota['estado']==3){?>
					<tr>
						<td class="label">Previsualizar</td>
						<td><a href="/magazine_nota.php?id=<?=$nota['id'];?>" target="_blank">Vea esta nota en conduciendo.com</a></td>
					</tr>
					<? } ?>-->
          <tr>
            <td class="label">Fecha a publicar</td>
            <td><input name="fecha_a_publicar" type="text" class="field" id="fecha_a_publicar" value="<?=$nota['fecha_a_publicar'];?>" style="background-color: #C7FBF1" /></td>
          </tr>
          <tr>
            <td class="label">Titulo</td>
            <td><input name="titulo" type="text" class="field" id="titulo" value="<?=$nota['titulo'];?>" style="width:600px" /></td>
          </tr>
					<tr>
						<td class="label">Subtitulo</td>
						<td><input name="subtitulo" type="text" class="field" id="subtitulo" value="<?=$nota['subtitulo'];?>" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">Copete</td>
						<td><textarea name="copete" class="field" id="copete" style="width:600px; height:100px"><?=$nota['copete'];?>
</textarea></td>
					</tr>
					<tr>
						<td class="label">Contenido</td>
						<td><textarea name="contenido" class="field" id="contenido" style="width:600px; height:400px"><?=tiny_mce_format($nota['contenido']);?>
</textarea></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<!--ed<tr>
						<td valign="top" class="label">Paises</td>
						<td valign="top"><a href="#/paises" class="nounderline" onclick="Javascript:$('paises').show(); this.hide();">expandir <img src="assets/images/arrow_down.gif" width="13" height="9" border="0" /></a> 
							<div class="box1" id="paises" style="display:none">
							<table width="100%" border="0" cellpadding="2" cellspacing="2">
							<tr>
								<? 
									$contadorColumnas = 1;
									foreach($paises as $pais){ 
									if($contadorColumnas==6){
										echo "</tr><tr>";
										$contadorColumnas = 1;
									}
									?>
								<td><label class="small">
									<input name="id_pais[]" type="checkbox" id="id_pais[]" value="<?=$pais['id'];?>" <? if($pais['id_relacion']!=0){?>checked="checked"<? } ?> />
									<?=$pais['nombre'];?>
								</label></td>
								<?
									$contadorColumnas ++;
									}
									?>
							</tr>
						</table></div></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td valign="top" class="label">Marcas</td>
						<td valign="top"><a href="#/marcas" class="nounderline" onclick="Javascript:$('marcas').show(); this.hide();">expandir <img src="assets/images/arrow_down.gif" width="13" height="9" border="0" /></a> 
							<div class="box1" id="marcas" style="display:none"><table width="100%" border="0" cellpadding="2" cellspacing="2">
								<tr>
									<? 
									$contadorColumnas = 1;
									foreach($marcas as $marca){ 
									if($contadorColumnas==6){
										echo "</tr><tr>";
										$contadorColumnas = 1;
									}
									?>
									<td><label class="small"><input name="id_marca[]" type="checkbox" id="id_marca[]" value="<?=$marca['id'];?>" <? if($marca['id_relacion']!=0){?>checked="checked"<? } ?> />
									<?=$marca['nombre'];?></label></td>
									<?
									$contadorColumnas ++;
									}
									?>
								</tr>
							</table></div></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td class="label">Tipos</td>
						<td>
						<a href="#/ipos" class="nounderline" onclick="Javascript:$('tipos').show(); this.hide();">expandir <img src="assets/images/arrow_down.gif" width="13" height="9" border="0" /></a> 
							<div class="box1" id="tipos" style="display:none"><table width="100%" border="0" cellpadding="2" cellspacing="2">
								<tr>
									<? 
									$contadorColumnas = 1;
									foreach($tipos as $tipo){ 
									if($contadorColumnas==5){
										echo "</tr><tr>";
										$contadorColumnas = 1;
									}
									?>
									<td><label class="small"><input name="id_tipo[]" type="checkbox" id="id_tipo[]" value="<?=$tipo['id'];?>" <? if($tipo['id_relacion']!=0){?>checked="checked"<? } ?> />
									<?=$tipo['nombre'];?></label></td>
									<?
									$contadorColumnas ++;
									}
									?>
								</tr>
							</table></div>						</td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td valign="top" class="label">Categor&iacute;as</td>
						<td valign="top"><a href="#/categorias" class="nounderline" onclick="Javascript:$('categorias').show(); this.hide();">expandir <img src="assets/images/arrow_down.gif" width="13" height="9" border="0" /></a>
														
							<div class="box1" id="categorias" style="display:none">
							<table width="100%" border="0" cellpadding="2" cellspacing="2">
								<tr>
									<? 
									$contadorColumnas = 1;
									foreach($categorias as $categoria){ 
									if($contadorColumnas==6){
										echo "</tr><tr>";
										$contadorColumnas = 1;
									}
									?>
									<td><label class="small">
										<input name="id_categoria[]" type="checkbox" id="id_categoria[]" value="<?=$categoria['id'];?>" <? if($categoria['id_relacion']!=0){?>checked="checked"<? } ?> />
										<?=$categoria['nombre'];?>
									</label></td>
									<?
									$contadorColumnas ++;
									}
									?>
								</tr>
							</table>
						</div></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td class="label">Imagenes relacionadas</td>
						<td><? if($imagenes_relacionadas){?>
							<div class="box1">
								<table border="0" cellpadding="2" cellspacing="2">
									<? foreach($imagenes_relacionadas as $imagen){ ?>
									<tr id="imagen<?=$imagen['id_relacion'];?>">
										<td><div class="close1"><a title="Eliminar imagen" href="Javascript:borrarImagen(<?=$imagen['id_relacion']?>);"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div></td>
										<td><a href="magazine_imagenes_editar.php?id=<?=$imagen['id_imagen'];?>" title="<?=$imagen['titulo'];?>">
											<img src="thumbnail.php?id=<?=$imagen['id_imagen'];?>&size=1" border="0" />
											</a></td>
										<td>
										<? if($imagen['predeterminada']==0){ ?>
											<a href="magazine_notas_establecer_imagen_predeterminada.php?id_nota=<?=$nota['id']?>&amp;id_relacion=<?=$imagen['id_relacion'];?>" class="small">establecer como imagen predeterminada</a>
										<? } else {?>
											<span class="level1"><strong>imagen predeterminada</strong></span>
										<? } ?>										</td>
									</tr>
									<? } ?>
								</table>
							</div>
							<? } else { ?>
							<span class="message_error">No hay imagenes relacionadas.</span>
							<? } ?></td>
					</tr>
					<tr>
						<td class="label">Relacionar imagen</td>
						<td><input name="image_keyword" type="text" class="field" id="image_keyword" value="" style="width:300px" />
							<button type="button" onclick="Javascript:buscarImagenes();">buscar</button>
							 o <a href="imagenes.php#add">crear nueva imagen</a></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><div class="box1" id="imagenes_encontradas" style="display:none"></div></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td class="label">Videos relacionados</td>
						<td><? if($videos_relacionados){?>
							<div class="box1">
								<table border="0" cellpadding="2" cellspacing="2">
									<? foreach($videos_relacionados as $video){ ?>
									<tr id="video<?=$video['id_relacion'];?>">
										<td><div class="close1"><a title="Eliminar video" href="Javascript:borrarVideo(<?=$video['id_relacion']?>);"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div></td>
										<td><a class="small" href="magazine_videos_editar.php?id=<?=$video['id_video'];?>">
											<?=$video['titulo'];?>
											</a></td>
									</tr>
									<? } ?>
								</table>
							</div>
							<? } else { ?>
							<span class="message_error">No hay videos relacionados.</span>
							<? } ?></td>
					</tr>
					<tr>
						<td class="label">Relacionar video</td>
						<td><input name="video_keyword" type="text" class="field" id="video_keyword" value="" style="width:300px" />
							<button type="button" onclick="Javascript:buscarVideos();">buscar</button>
							 o <a href="videos.php#add">crear nuevo video</a></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><div class="box1" id="videos_encontrados" style="display:none"></div></td>
					</tr>
					<tr>
						<td class="label">Comentarios</td>
						<td><div class="box1">
							<table border="0" cellpadding="2" cellspacing="2">
								<tr>
									<td class="small">&nbsp;</td>
									<td class="bold1">Nombre</td>
									<td class="bold1">Email</td>
									<td class="bold1">Comentarios</td>
								</tr>
								<? foreach($comentarios as $comentario){ ?>
								<tr id="comentario<?=$comentario['id'];?>">
									<td><div class="close1"><a title="Eliminar comentario" href="Javascript:borrarComentario(<?=$comentario['id']?>);"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div></td>
									<td class="small"><?=$comentario['nombre'];?></td>
									<td class="small"><?=$comentario['email'];?></td>
									<td class="small"><?=$comentario['comentarios'];?></td>
								</tr>
								<? } ?>
							</table>
						</div></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>-->
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">actualizar nota</button>
							<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    Calendar.setup(
      {
        inputField  : "fecha_a_publicar",         // ID of the input field
        ifFormat    : "%Y-%m-%d %H:%M:%S",    // the date format %H:%M:%S
        //button      : "'.$name.'_btn",       // ID of the button
        align          :    "Tl",
        showsTime      :    true,
        //        singleClick    :    false
      }
    );
</script>

</body>
</html>
