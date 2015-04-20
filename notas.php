<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

header('Content-Type: text/html; charset=iso-8859-2');

$database = new db_mysql();
$database->connect();


if($_POST){
  $titulo = $_POST['titulo'];
	$subtitulo = $_POST['subtitulo'];
	$copete = $_POST['copete'];
	$contenido = $_POST['contenido'];
	$id_autor = $_POST['id_autor'];

	$ar = ", titulo_ar = '', copete_ar = '', contenido_ar = ''";
	$mx = ", titulo_mx = '', copete_mx = '', contenido_mx = ''";
	$co = ", titulo_co = '', copete_co = '', contenido_co = ''";

	$cargar_nota = $database->insert("notas","titulo = '$titulo', subtitulo = '$subtitulo', copete = '$copete', contenido = '$contenido', estado = 2, id_autor = $id_autor, fecha_creada = NOW() $ar $mx $co ");
	$id_nota = $database->insert_id();
	header("Location: notas_editar.php?id=$id_nota");
}

$keyword = $_GET['keyword'];

/* --- */

$notas = $database->row_assoc("SELECT COUNT(id) cantidad FROM notas WHERE estado <> 1 AND titulo LIKE '%$keyword%'");
$cantidad = $notas['cantidad'];

$empresas = $database->list_assoc("SELECT * FROM empresas");
$paises = $database->list_assoc("SELECT * FROM paises");

$pagina = $_GET['pagina'];
if(!$pagina){
	$pagina = 1;
}
$paginas = round($cantidad/60);

$extremo_izquierdo = $pagina-5;
if($extremo_izquierdo<5){
	$extremo_izquierdo = 1;
}

$extremo_derecho = $pagina+5;
if($extremo_derecho>$paginas){
	$extremo_derecho = $paginas;
}

if(!$pagina or ($pagina>$paginas or $pagina<0)){
	$desde = 0;
} else {
	$desde = ($pagina-1)*60;
}

/* --- */

$notas_sql = "
	SELECT notas.id, notas.titulo, estados.nombre estado FROM notas INNER JOIN estados ON estados.id = notas.estado WHERE notas.titulo LIKE '%$keyword%' AND notas.estado <> 1 ORDER BY notas.id DESC LIMIT $desde,60
";
$notas = $database->list_assoc($notas_sql);
$autores = $database->list_assoc("SELECT * FROM autores ORDER BY nombre ASC");

$archivos_xml_sql = "
	SELECT archivos_xml.id, archivos_xml.nombre, empresas.nombre as empresa, archivos_xml.fecha FROM archivos_xml
	INNER JOIN empresas ON archivos_xml.id_empresa = empresas.id
	WHERE estado = 2
	ORDER BY nombre ASC
";
$archivos_xml = $database->list_assoc($archivos_xml_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Notas</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_nota(){
	close_boxes();
	$('add_nota').show();
	$('add_nota_button').addClassName('active');

}

function search_notas(){
	close_boxes();
	$('search_notas').show();
	$('search_notas_button').addClassName('active');
}

function close_boxes(){
	$('search_notas').hide();
	$('add_nota').hide();
	$('add_nota_button').removeClassName('active');
	$('search_notas_button').removeClassName('active');
}

function validate_add_nota(){
	if($F('titulo')==''){
		alert('Ingrese el titulo de la nota');
		$('titulo').focus();
		return false
	}
	return true
}

function checkHash(){
	if(location.hash=='#add'){
		add_nota();
	}
}

function updateLinkXml(id) {
  if (id > 0) {
    $('linkxml').writeAttribute('style','display:block');
    $('linkxml').writeAttribute('href','/backend/archivos_xml_generar.php?id='+id+'&target='+id);
  } else {
    $('linkxml').writeAttribute('style','display:none');
  }
  alert(id);
}
</script>
<script language="javascript" type="text/javascript" src="assets/scripts/tinymce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "exact",
	theme : "advanced",
	//elements : "contenido",
	theme_advanced_buttons1 : "image,bold,italic,underline,separator,forecolor,separator,fontsizeselect,separator,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,undo,redo,link,unlink",
	theme_advanced_buttons2 : "",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_path_location : "bottom",
	extended_valid_elements : "a[name|href|target|title|onclick],img[elemento|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[elemento|width|size|noshade],font[face|size|color|style],span[elemento|align|style]"
});
</script>
</head>
<body onload="checkHash();">
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1>Notas (&asymp; <?=$cantidad;?>)</h1>
		<div class="options">
			<ul>
				<li><a id="add_nota_button" href="#add" class="button" onclick="Javascript:add_nota();">Agregar nueva nota</a></li>
				<li><a id="search_notas_button" href="#search" class="button" onclick="Javascript:search_notas();">Buscar notas</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_nota">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_nota();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Titulo</td>
						<td><input name="titulo" type="text" class="field" id="titulo" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">Subtitulo</td>
						<td><input name="subtitulo" type="text" class="field" id="subtitulo" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">Copete</td>
						<td><textarea name="copete" class="field" id="copete" style="width:600px; height:100px"><?=$nota['copete'];?></textarea></td>
					</tr>
					<tr style="display:none">
						<td class="label">Contenido</td>
						<td><textarea name="contenido" class="field" id="contenido" style="width:600px; height:300px"></textarea></td>
					</tr>
					<tr>
						<td class="label">Autor</td>
						<td><select name="id_autor" id="id_autor">
							<? foreach($autores as $autor){?>
							<option value="<?=$autor['id'];?>"><?=$autor['nombre'];?></option>
							<? } ?>
						</select></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear nota</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_notas">
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

        		<form action="notas_xml_agregar.php" method="post">
			<table width="100%" border="0" cellspacing="0" cellpadding="6">
				<tr>
					<th width="4%">&nbsp;</th>
					<th width="82%">Titulo</th>
					<th width="5%">Estado</th>
					<th width="5%">&nbsp;</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<? if($notas){ ?>
				<? foreach($notas as $nota){ ?>
				<tr>
					<td><input name="id_nota[]" type="checkbox" id="id_nota[]" value="<?=$nota['id'];?>" /></td>
					<td><a href="notas_editar.php?id=<?=$nota['id'];?>">
						<?=$nota['titulo'];?>
						</a></td>
					<td><?=$nota['estado'];?></td>
					<td><a href="notas_lenguaje.php?id=<?=$nota['id'];?>">
						Lenguaje
						</a>
					</td>
					<td><a href="notas_borrar.php?id=<?=$nota['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				<tr>
					<td>&nbsp;</td>
					<td><select name="id_archivo" id="id_archivo">
						<option value="0">Agregar nota a ...</option>
						<? foreach($archivos_xml as $archivo){ ?>
						<option value="<?=$archivo['id'];?>">
						<?=$archivo['empresa'];?> - <?=$archivo['nombre'];?>.xml - (<?=$archivo['fecha'];?>)
						</option>
						<? } ?>
					</select>
					<button type="submit">aceptar</button></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>

<?php
/**
 * Agregamos una opcion para crear el xml desde aqui...
*/
?>
        <tr>
          <td>&nbsp;</td>
          <td>
          <select name="id_empresa" id="id_empresa">
            <option value="0">Crear xml para ...</option>
            <? foreach($empresas as $empresa){ ?>
            <option value="<?=$empresa['id'];?>">
            <?=$empresa['nombre'];?>
            </option>
            <? } ?>
          </select>
          <!--   <a href="" id="linkxml" style="display:none;">Generar XML</a> -->
            <select name="pais" id="pais">
              <option value="0">Elija Pais ...</option>
              <? foreach($paises as $pais){ ?>
              <option value="<?=$pais['id'];?>">
              <?=$pais['nombre'];?>
              </option>
              <? } ?>
            </select>
          <button type="submit">aceptar</button></td>
          <td>&nbsp;</td>
        </tr>
				<tr>
					<td colspan="4" align="center"><div class="paginate"> <a href="notas.php?pagina=1&keyword=<?=$keyword;?>">primera p&aacute;gina</a>
								<? for($i=$extremo_izquierdo;$i<=$extremo_derecho;$i++){?>
								<? if($pagina==$i){ ?>
								<a class="active" href="notas.php?pagina=<?=$i;?>&keyword=<?=$keyword;?>">
									<?=$i;?>
							</a>
								<? } else { ?>
								<a href="notas.php?pagina=<?=$i;?>&keyword=<?=$keyword;?>">
									<?=$i;?>
							</a>
								<? } ?>
								<? } ?>
							<a href="notas.php?pagina=<?=$paginas;?>&keyword=<?=$keyword;?>">ultima p&aacute;gina</a> </div></td>
				</tr>
				<? } else { ?>
				<tr class="empty">
					<td colspan="4">No se encontraron notas <a href="#" onclick="Javascript:search_notas();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table></form>
		</div>
	</div>
</div>
</body>
</html>
