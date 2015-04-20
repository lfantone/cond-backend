<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$id = $_GET['id_nota'];

if(!$id&&$_POST){
	$id = $_POST['id_nota'];
}

$imagenes_relacionadas = $database->list_assoc("SELECT notas_imagenes.id id_relacion, notas_imagenes.id_imagen, imagenes.titulo, notas_imagenes.predeterminada FROM notas_imagenes INNER JOIN imagenes ON imagenes.id = notas_imagenes.id_imagen AND imagenes.estado = 3 AND notas_imagenes.id_nota = $id");
?>
<script>
// imagenes
window.buscarImagenes=function(){
	new Ajax.Updater('imagenes_encontradas', '/backend/imagenes_buscar.php', {
	  method: 'get',
	  parameters: { keyword: $F('image_keyword'), id_nota: '<?=$id;?>' }

	});
	$('imagenes_encontradas').show();
}

window.borrarImagen=function (id_relacion){
	new Ajax.Request('/backend/notas_imagenes_borrar.php', {
	  method: 'post',
	  parameters: {id:id_relacion}
	});

	$('imagen'+id_relacion).remove();
}
window.seleccionarImagen=function (id,sizeattr,w,h){
	//ImageDialog.getImageData();
	document.getElementById("alt").value=document.getElementById(id).getAttribute("title");
	//document.getElementById("src").onchange();
	document.getElementById("src").value=document.getElementById(id).getAttribute(sizeattr);
	document.getElementById("width").value=w;
	document.getElementById("height").value=h;
	//ImageDialog.updateStyle();
	//document.getElementById("alt").onchange();
	mcTabs.displayTab('general_tab','general_panel');

}
	if(document.getElementById("insert").value.search(/insert/i)!=-1){

	}else{
		mcTabs.displayTab('general_tab','general_panel');
	}
</script>
			<table border="0" cellpadding="4" cellspacing="0">
					<tr>
						<td class="label">Imagenes relacionadas</td>
						<td><? if($imagenes_relacionadas){?>
							<div class="box1">
								<table border="0" cellpadding="2" cellspacing="2">
									<? foreach($imagenes_relacionadas as $imagen){ ?>
									<tr id="imagen<?=$imagen['id_relacion'];?>" title="<?=$imagen['titulo'];?>" srcthumbnail="/backend/thumbnail.php?id=<?=$imagen['id_imagen'];?>&size=1">
										<td><a title="<?=$imagen['titulo'];?>">
											<img src="/backend/thumbnail.php?id=<?=$imagen['id_imagen'];?>&size=1" border="0" width="80" height="53"/>
											</a></td>
										<td><td><a onclick="seleccionarImagen('imagen<?=$imagen['id_relacion'];?>','srcthumbnail',80,53)">thumbnail</a></td>
									</tr>
									<? } ?>
								</table>
							</div>
							<? } else { ?>
							<span class="message_error"><script>mcTabs.displayTab('general_tab','general_panel');</script>No hay imagenes relacionadas.</span>
							<? } ?></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><div class="box1" id="imagenes_encontradas" style="display:none"></div></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
			</table>