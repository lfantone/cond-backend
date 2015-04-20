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
	$titulo_ar = $_POST['titulo_ar'];
	$copete_ar = $_POST['copete_ar'];
	$titulo_mx = $_POST['titulo_mx'];
	$copete_mx = $_POST['copete_mx'];
	$titulo_co = $_POST['titulo_co'];
	$copete_co = $_POST['copete_co'];

	if(get_magic_quotes_gpc()){
  		$contenido = clean_string(stripslashes($_POST['contenido']));
  		$contenido_rtf = clean_string(stripslashes($_POST['contenido_rtf']));
  		$contenido_ar = clean_string(stripslashes($_POST['contenido_ar']));
  		$contenido_rtf_ar = clean_string(stripslashes($_POST['contenido_rtf_ar']));
  		$contenido_mx = clean_string(stripslashes($_POST['contenido_mx']));
  		$contenido_rtf_mx = clean_string(stripslashes($_POST['contenido_rtf_mx']));
  		$contenido_co = clean_string(stripslashes($_POST['contenido_co']));
  		$contenido_rtf_co = clean_string(stripslashes($_POST['contenido_rtf_co']));

	}else{
  		$contenido = clean_string($_POST['contenido']);
  		$contenido_rtf = clean_string($_POST['contenido_rtf']);
  		$contenido_ar = clean_string($_POST['contenido_ar']);
  		$contenido_rtf_ar = clean_string($_POST['contenido_rtf_ar']);
  		$contenido_mx = clean_string($_POST['contenido_mx']);
  		$contenido_rtf_mx = clean_string($_POST['contenido_rtf_mx']);
  		$contenido_co = clean_string($_POST['contenido_co']);
  		$contenido_rtf_co = clean_string($_POST['contenido_rtf_co']);

	}
	$ar = " titulo_ar = '$titulo_ar', copete_ar = '$copete_ar', contenido_ar = '$contenido_ar', contenido_rtf_ar='$contenido_rtf_ar', ";
	$mx = " titulo_mx = '$titulo_mx', copete_mx = '$copete_mx', contenido_mx = '$contenido_mx', contenido_rtf_mx='$contenido_rtf_mx', ";
	$co = " titulo_co = '$titulo_co', copete_co = '$copete_co', contenido_co = '$contenido_co', contenido_rtf_co='$contenido_rtf_co' ";		
	$cargar_nota = $database->update("notas","titulo = '$titulo', copete = '$copete', contenido = '$contenido', contenido_rtf='$contenido_rtf', $ar $mx $co ", "id = $id");


	header("Location: notas_lenguaje.php?id=$id");
}

$nota = $database->row_assoc("SELECT * FROM notas WHERE id = $id");
if(!$nota){
	header('Location:notas.php');
	exit();
}

$imagenes_relacionadas = $database->list_assoc("SELECT notas_imagenes.id id_relacion, notas_imagenes.id_imagen, imagenes.titulo, notas_imagenes.predeterminada FROM notas_imagenes INNER JOIN imagenes ON imagenes.id = notas_imagenes.id_imagen AND imagenes.estado = 3 AND notas_imagenes.id_nota = $id");
$videos_relacionados = $database->list_assoc("SELECT notas_videos.id id_relacion, notas_videos.id_video, videos.titulo, notas_videos.predeterminada  FROM notas_videos INNER JOIN videos ON videos.id = notas_videos.id_video AND videos.estado = 3 AND notas_videos.id_nota = $id");

// fichas relacionadas
$fichas_sql = "
	SELECT fn.id_ficha_nota as id_relacion, fn.id_nota, ma.nombre as marca, mo.nombre as modelo, ve.nombre as version, fi.id as id 
	FROM fichas_notas fn, fichas fi, modelo mo, marcas ma, version ve 
	WHERE  	fn.id_fichas = fi.id AND
			mo.id_modelo = fi.id_modelo AND
			ma.id = fi.id_marca AND
			ve.id_version = fi.id_version AND
			fi.id_estado = 3 AND 
			fn.id_nota = $id
";
$fichas_relacionadas = $database->list_assoc($fichas_sql);

$paises_sql = "
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

$galeria = $database->list_assoc("SELECT galeria.id id_relacion, notas.id id_nota FROM notas INNER JOIN galeria ON galeria.id_nota = notas.id AND notas.id = $id");

$es_nota_secundaria = $nota['es_nota_secundaria'];
$es_col_derecha = $nota['es_col_derecha'];
$mostrar_video = $nota['mostrar_video'];

function tiny_mce_format($text) {

	//$text = str_replace("\r\n", "<br/>", $text);
	$text =htmlentities($text);
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
<script language="javascript" type="text/javascript" src="assets/scripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "exact",
	theme : "advanced",
	elements : "contenido_rtf,contenido_rtf_ar,contenido_rtf_mx,contenido_rtf_co",
	language: "es",
	content_css: "/assets/styles/screen.css",
	//remove_linebreaks : false,
	apply_source_formatting : true,
	//force_br_newlines : true,
	//force_p_newlines : true, //<-- seems to be working fine
	plugins : "fullscreen",
	////theme_advanced_buttons1 : "newdocument,|,image,bold,italic,underline,strikethrough,separator,forecolor,separator,fontselect,fontsizeselect,separator,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,undo,redo,link,unlink,cleanup",
	//theme_advanced_buttons1 : "newdocument,|,image,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect,|,bullist,numlist,|,undo,redo,|,link,unlink,|,forecolor,backcolor,|,fullscreen,code",
	theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect,|,bullist,numlist,|,undo,redo,|,link,unlink,|,forecolor,backcolor,|,fullscreen,code",
	theme_advanced_buttons2 : "",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_path_location : "bottom",
	extended_valid_elements : "a[name|href|target|title|onclick],img[elemento|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[elemento|width|size|noshade],font[face|size|color|style],span[elemento|align|style]"
});
function toogleRTF(el){
	if(el.checked){
		document.getElementById("rtf_activo").style.display="inline";
		document.getElementById("rtf_noactivo").style.display="none";
		tinyMCE.get("contenido_rtf").setContent(document.getElementById("contenido").value.replace(/\n/g,"</p><p>"));
		tinyMCE.get("contenido_rtf").setContent(tinyMCE.get("contenido_rtf").getContent().replace(/<p>&nbsp;<\/p>/g,""));
		tinyMCE.get("contenido_rtf_ar").setContent(document.getElementById("contenido_ar").value.replace(/\n/g,"</p><p>"));
		tinyMCE.get("contenido_rtf_ar").setContent(tinyMCE.get("contenido_rtf_ar").getContent().replace(/<p>&nbsp;<\/p>/g,""));
		tinyMCE.get("contenido_rtf_mx").setContent(document.getElementById("contenido_mx").value.replace(/\n/g,"</p><p>"));
		tinyMCE.get("contenido_rtf_mx").setContent(tinyMCE.get("contenido_rtf_mx").getContent().replace(/<p>&nbsp;<\/p>/g,""));
		tinyMCE.get("contenido_rtf_co").setContent(document.getElementById("contenido_co").value.replace(/\n/g,"</p><p>"));
		tinyMCE.get("contenido_rtf_co").setContent(tinyMCE.get("contenido_rtf_co").getContent().replace(/<p>&nbsp;<\/p>/g,""));

		document.getElementById("contenido").value="";
		document.getElementById("contenido_ar").value="";
		document.getElementById("contenido_co").value="";
		document.getElementById("contenido_mx").value="";
		document.getElementById("contenido_rtf_host").style.display="block";
		document.getElementById("contenido_host").style.display="none";

		document.getElementById("contenido_rtf_host_ar").style.display="block";
		document.getElementById("contenido_host_ar").style.display="none";

		document.getElementById("contenido_rtf_host_mx").style.display="block";
		document.getElementById("contenido_host_mx").style.display="none";

		document.getElementById("contenido_rtf_host_co").style.display="block";
		document.getElementById("contenido_host_co").style.display="none";

	}else{
		if(confirm("Esta seguro que desea desactivar el formato?\nRecuerde que al desactivar el formato se perdera todo lo relacionado a imagenes,listas,estilos y/o cualquier elemento solo existente con el formato activado.")){
			document.getElementById("rtf_activo").style.display="none";
			document.getElementById("rtf_noactivo").style.display="inline";
			document.getElementById("contenido").value=tinyMCE.get("contenido_rtf").getContent()
												.replace(/<\/p>/,"\n")
												.replace(/<[^>]+>/g, '')
												.replace(/&nbsp;\r?\n/g,"\n")
												.replace(/&nbsp;\r?\n$/g,"\n")
												.replace(/&ntilde;/g,unescape("%F1"))
												.replace(/&Ntilde;/g,unescape("%D1"))
												.replace(/&aacute;/g,"á")
												.replace(/&Aacute;/g,"Á")
												.replace(/&eacute;/g,"é")
												.replace(/&Eacute;/g,"É")
												.replace(/&iacute;/g,"í")
												.replace(/&Iacute;/g,"Í")
												.replace(/&oacute;/g,"ó")
												.replace(/&Oacute;/g,"Ó")
												.replace(/&uacute;/g,"ú")
												.replace(/&Uacute;/g,"Ú")
												.replace(/&lt;/g,"<")
												.replace(/&gt;/g,">")
												.replace(/&amp;/g,"&")
												;
			tinyMCE.get("contenido_rtf").setContent("");
			document.getElementById("contenido_rtf").value="";
			document.getElementById("contenido_rtf_host").style.display="none";
			document.getElementById("contenido_host").style.display="block";

			document.getElementById("contenido_ar").value=tinyMCE.get("contenido_rtf_ar").getContent()
												.replace(/<\/p>/,"\n")
												.replace(/<[^>]+>/g, '')
												.replace(/&nbsp;\r?\n/g,"\n")
												.replace(/&nbsp;\r?\n$/g,"\n")
												.replace(/&ntilde;/g,unescape("%F1"))
												.replace(/&Ntilde;/g,unescape("%D1"))
												.replace(/&aacute;/g,"á")
												.replace(/&Aacute;/g,"Á")
												.replace(/&eacute;/g,"é")
												.replace(/&Eacute;/g,"É")
												.replace(/&iacute;/g,"í")
												.replace(/&Iacute;/g,"Í")
												.replace(/&oacute;/g,"ó")
												.replace(/&Oacute;/g,"Ó")
												.replace(/&uacute;/g,"ú")
												.replace(/&Uacute;/g,"Ú")
												.replace(/&lt;/g,"<")
												.replace(/&gt;/g,">")
												.replace(/&amp;/g,"&")
												;
			tinyMCE.get("contenido_rtf_ar").setContent("");
			document.getElementById("contenido_rtf_ar").value="";
			document.getElementById("contenido_rtf_host_ar").style.display="none";
			document.getElementById("contenido_host_ar").style.display="block";

			document.getElementById("contenido_mx").value=tinyMCE.get("contenido_rtf_mx").getContent()
												.replace(/<\/p>/,"\n")
												.replace(/<[^>]+>/g, '')
												.replace(/&nbsp;\r?\n/g,"\n")
												.replace(/&nbsp;\r?\n$/g,"\n")
												.replace(/&ntilde;/g,unescape("%F1"))
												.replace(/&Ntilde;/g,unescape("%D1"))
												.replace(/&aacute;/g,"á")
												.replace(/&Aacute;/g,"Á")
												.replace(/&eacute;/g,"é")
												.replace(/&Eacute;/g,"É")
												.replace(/&iacute;/g,"í")
												.replace(/&Iacute;/g,"Í")
												.replace(/&oacute;/g,"ó")
												.replace(/&Oacute;/g,"Ó")
												.replace(/&uacute;/g,"ú")
												.replace(/&Uacute;/g,"Ú")
												.replace(/&lt;/g,"<")
												.replace(/&gt;/g,">")
												.replace(/&amp;/g,"&")
												;
			tinyMCE.get("contenido_rtf_mx").setContent("");
			document.getElementById("contenido_rtf_mx").value="";
			document.getElementById("contenido_rtf_host_mx").style.display="none";
			document.getElementById("contenido_host_mx").style.display="block";


			document.getElementById("contenido_co").value=tinyMCE.get("contenido_rtf_co").getContent()
												.replace(/<\/p>/,"\n")
												.replace(/<[^>]+>/g, '')
												.replace(/&nbsp;\r?\n/g,"\n")
												.replace(/&nbsp;\r?\n$/g,"\n")
												.replace(/&ntilde;/g,unescape("%F1"))
												.replace(/&Ntilde;/g,unescape("%D1"))
												.replace(/&aacute;/g,"á")
												.replace(/&Aacute;/g,"Á")
												.replace(/&eacute;/g,"é")
												.replace(/&Eacute;/g,"É")
												.replace(/&iacute;/g,"í")
												.replace(/&Iacute;/g,"Í")
												.replace(/&oacute;/g,"ó")
												.replace(/&Oacute;/g,"Ó")
												.replace(/&uacute;/g,"ú")
												.replace(/&Uacute;/g,"Ú")
												.replace(/&lt;/g,"<")
												.replace(/&gt;/g,">")
												.replace(/&amp;/g,"&")
												;
			tinyMCE.get("contenido_rtf_co").setContent("");
			document.getElementById("contenido_rtf_co").value="";
			document.getElementById("contenido_rtf_host_co").style.display="none";
			document.getElementById("contenido_host_co").style.display="block";

		}
	}
}


function validate_add_nota(){
	if($F('titulo')==''){
		alert('Ingrese el titulo de la nota');
		$('titulo').focus();
		return false
	}
	$('contenido').blur();
	$('contenido_rtf').blur();
	if($F('contenido')==''&&$F('contenido_rtf')==''){
		alert('Ingrese el contenido de la nota');
		return false
	}
	if(tinyMCE.get("contenido_rtf").getContent()){
			document.getElementById("contenido").value=tinyMCE.get("contenido_rtf").getContent()
												.replace(/<\/p>/,"\n")
												.replace(/<[^>]+>/g, '')
												.replace(/&nbsp;\r?\n/g,"\n")
												.replace(/&nbsp;\r?\n$/g,"\n")
												.replace(/&ntilde;/g,unescape("%F1"))
												.replace(/&Ntilde;/g,unescape("%D1"))
												.replace(/&aacute;/g,"á")
												.replace(/&Aacute;/g,"Á")
												.replace(/&eacute;/g,"é")
												.replace(/&Eacute;/g,"É")
												.replace(/&iacute;/g,"í")
												.replace(/&Iacute;/g,"Í")
												.replace(/&oacute;/g,"ó")
												.replace(/&Oacute;/g,"Ó")
												.replace(/&uacute;/g,"ú")
												.replace(/&Uacute;/g,"Ú")
												.replace(/&lt;/g,"<")
												.replace(/&gt;/g,">")
												.replace(/&amp;/g,"&")
												;
	}
	if(tinyMCE.get("contenido_rtf_ar").getContent()){
			document.getElementById("contenido_ar").value=tinyMCE.get("contenido_rtf_ar").getContent()
												.replace(/<\/p>/,"\n")
												.replace(/<[^>]+>/g, '')
												.replace(/&nbsp;\r?\n/g,"\n")
												.replace(/&nbsp;\r?\n$/g,"\n")
												.replace(/&ntilde;/g,unescape("%F1"))
												.replace(/&Ntilde;/g,unescape("%D1"))
												.replace(/&aacute;/g,"á")
												.replace(/&Aacute;/g,"Á")
												.replace(/&eacute;/g,"é")
												.replace(/&Eacute;/g,"É")
												.replace(/&iacute;/g,"í")
												.replace(/&Iacute;/g,"Í")
												.replace(/&oacute;/g,"ó")
												.replace(/&Oacute;/g,"Ó")
												.replace(/&uacute;/g,"ú")
												.replace(/&Uacute;/g,"Ú")
												.replace(/&lt;/g,"<")
												.replace(/&gt;/g,">")
												.replace(/&amp;/g,"&")
												;
	}
	if(tinyMCE.get("contenido_rtf_mx").getContent()){
			document.getElementById("contenido_mx").value=tinyMCE.get("contenido_rtf_mx").getContent()
												.replace(/<\/p>/,"\n")
												.replace(/<[^>]+>/g, '')
												.replace(/&nbsp;\r?\n/g,"\n")
												.replace(/&nbsp;\r?\n$/g,"\n")
												.replace(/&ntilde;/g,unescape("%F1"))
												.replace(/&Ntilde;/g,unescape("%D1"))
												.replace(/&aacute;/g,"á")
												.replace(/&Aacute;/g,"Á")
												.replace(/&eacute;/g,"é")
												.replace(/&Eacute;/g,"É")
												.replace(/&iacute;/g,"í")
												.replace(/&Iacute;/g,"Í")
												.replace(/&oacute;/g,"ó")
												.replace(/&Oacute;/g,"Ó")
												.replace(/&uacute;/g,"ú")
												.replace(/&Uacute;/g,"Ú")
												.replace(/&lt;/g,"<")
												.replace(/&gt;/g,">")
												.replace(/&amp;/g,"&")
												;
	}
	if(tinyMCE.get("contenido_rtf_co").getContent()){
			document.getElementById("contenido_co").value=tinyMCE.get("contenido_rtf_co").getContent()
												.replace(/<\/p>/,"\n")
												.replace(/<[^>]+>/g, '')
												.replace(/&nbsp;\r?\n/g,"\n")
												.replace(/&nbsp;\r?\n$/g,"\n")
												.replace(/&ntilde;/g,unescape("%F1"))
												.replace(/&Ntilde;/g,unescape("%D1"))
												.replace(/&aacute;/g,"á")
												.replace(/&Aacute;/g,"Á")
												.replace(/&eacute;/g,"é")
												.replace(/&Eacute;/g,"É")
												.replace(/&iacute;/g,"í")
												.replace(/&Iacute;/g,"Í")
												.replace(/&oacute;/g,"ó")
												.replace(/&Oacute;/g,"Ó")
												.replace(/&uacute;/g,"ú")
												.replace(/&Uacute;/g,"Ú")
												.replace(/&lt;/g,"<")
												.replace(/&gt;/g,">")
												.replace(/&amp;/g,"&")
												;
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
		<h1><a href="notas.php">Lenguaje</a> &raquo; &quot;
			<?=$nota['titulo'];?>
			&quot;</h1>
		<div class="form">
			<form action="notas_lenguaje.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_nota();">
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Internacional</a></li>    	
        <li><a href="#tabs-2">Argentina</a></li>
        <li><a href="#tabs-3">M&eacute;xico</a></li>
        <li><a href="#tabs-4">Colombia</a></li>
    </ul>
    <div id="tabs-1">
    	<?=lang_table($nota)?>
    </div>
    <div id="tabs-2">
        <?=lang_table($nota,'ar')?>
    </div>
    <div id="tabs-3">
        <?=lang_table($nota,'mx')?>
    </div>
    <div id="tabs-4">
        <?=lang_table($nota,'co')?>
    </div>

</div>


			<input name="id" type="hidden" id="id" value="<?=$id;?>" />
			</form>
		</div>
	</div>
</div>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
 </script>
</body>
</html><?php

function lang_table($nota, $country_code='') {
	$country_code=$country_code!=''?'_'.$country_code:'';
	//$country_code = (get_country_code($pais_id)!='int && $pais_id != null)'?'_'.get_country_code($pais_id):'';
?>
				<table border="0" cellspacing="6" cellpadding="6">
		          <tr>
		            <td class="label">Titulo</td>
		            <td><input name="titulo<?=$country_code?>" type="text" class="field" id="titulo<?=$country_code?>" value="<?=$nota['titulo'.$country_code];?>" style="width:600px" /></td>
		          </tr>
					<tr>
						<td class="label">Copete</td>
						<td><textarea name="copete<?=$country_code?>" class="field" id="copete<?=$country_code?>" style="width:600px; height:100px"><?=$nota['copete'.$country_code];?>
							</textarea>
						</td>
					</tr>
					<tr>
						<td class="label">Contenido</td>
						<?if($nota["contenido_rtf".$country_code]||!$nota["contenido".$country_code]){?>
						<td>
						<div id="formato_host<?=$country_code?>"><p class="formato"><input type="checkbox"  id="cb_<?=time();?>" checked="checked" onclick="toogleRTF(this);"/> <span id="rtf_activo" style="display:inline">Desactivar formato enriquecido</span><span id="rtf_noactivo" style="display:none">Activar formato enriquecido</span></p></div>
						<div id="contenido_host<?=$country_code?>" style="display:none;"><textarea name="contenido<?=$country_code?>" class="field" id="contenido<?=$country_code?>" style="width:600px; height:400px"><?=$nota['contenido'.$country_code]?></textarea></div>
						<div id="contenido_rtf_host<?=$country_code?>" style="display:block;"><textarea name="contenido_rtf<?=$country_code?>" class="field" id="contenido_rtf<?=$country_code?>" style="width:600px; height:400px"><?=tiny_mce_format($nota['contenido_rtf'.$country_code]);?></textarea></div>
						</td>
						<?}else{?>
						<td>
						<div id="formato_host<?=$country_code?>"><p class="formato"><input type="checkbox" id="cb_<?=time();?>" onclick="toogleRTF(this);"/> <span id="rtf_activo" style="display:none">Desactivar formato enriquecido</span><span id="rtf_noactivo" style="display:inline">Activar formato enriquecido</span></p></div>
						<div id="contenido_host<?=$country_code?>" style="display:block;"><textarea name="contenido<?=$country_code?>" class="field" id="contenido<?=$country_code?>" style="width:600px; height:400px"><?=$nota['contenido'.$country_code]?></textarea></div>
						<div id="contenido_rtf_host<?=$country_code?>" style="display:none;"><textarea name="contenido_rtf<?=$country_code?>" class="field" id="contenido_rtf<?=$country_code?>" style="width:600px; height:400px"><?=tiny_mce_format($nota['contenido_rtf'.$country_code]);?></textarea></div>
						</td>
						<?}?>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">actualizar nota</button>
						</td>
					</tr>
				</table>


<?php	

}

?>
