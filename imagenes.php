<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

//$actualizar = $database->query("UPDATE imagenes SET titulo = CONCAT('imagen ', id);");

if($_POST){	
	$titulo = $_POST['titulo'];
	$jpg = $_FILES['jpg'];
	
	if($jpg['size']>0){
		$cargar_imagen = $database->insert("imagenes","titulo = '$titulo', fecha = NOW(), estado = 3 ");
		$imagen_id = $database->insert_id();
		$imagen_path = "../uploads/images/$imagen_id.jpg";
		move_uploaded_file($jpg['tmp_name'], $imagen_path);
	}
	header("Location: imagenes.php#$imagen_id");
}

$keyword = $_GET['keyword'];

/* --- */
$imagenes = $database->row_assoc("SELECT COUNT(id) cantidad FROM imagenes WHERE estado = 3 AND titulo LIKE '%$keyword%'");
$cantidad = $imagenes['cantidad'];

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

$imagenes_sql = "
	SELECT * FROM imagenes WHERE titulo LIKE '%$keyword%' AND estado = 3 ORDER BY id DESC LIMIT $desde,60
";
$imagenes = $database->list_assoc($imagenes_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Imagenes</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/base/jquery-ui.css" id="theme" />
<link rel="stylesheet" href="assets/scripts/upload/jquery.fileupload-ui.css" />

<!-- script src="assets/scripts/prototype.js" type="text/javascript"></script-->
<script type="text/javascript">
function add_imagen(){
	close_boxes();
	$('#add_imagen').show();
	$('#add_imagen_button').addClass('active');
}

function search_imagenes(){
	close_boxes();
	$('#search_imagenes').show();
	$('#search_imagenes_button').addClass('active');
}

function close_boxes(){
	$('#search_imagenes').hide();
	$('#add_imagen').hide();
	$('#add_imagen_button').removeClass('active');	
	$('#search_imagenes_button').removeClass('active');
}

function validate_add_imagen(){
	if($('#titulo').val()==''){
		alert('Ingrese el titulo de la imagen');
		$('#titulo').focus();
		return false
	}
	return true
}

function checkHash(){
	if(location.hash=='#add'){
		add_imagen();
	}
}
</script>
</head>
<body onload="checkHash()">
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1>Imagenes (&asymp; <?=$cantidad;?>)</h1>
		<div class="options">
			<ul>
				<li><a id="add_imagen_button" href="#add" class="button" onclick="Javascript:add_imagen();">Agregar nueva imagen</a></li>
				<li><a id="search_imagenes_button" href="#search" class="button" onclick="Javascript:search_imagenes();">Buscar imagenes</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_imagen">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
					<!-- <input name="titulo" type="text" class="field" id="titulo" style="width:600px" />--> 
					<!-- upload file widget -->				
					<div id="fileupload">
							<form action="imagenes_upload.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
									<div class="fileupload-buttonbar">
											<label class="fileinput-button">
													<span>Agregar imagenes...</span>
													<input type="file" name="files[]" multiple>
											</label>
											<button type="submit" class="start">Comenzar upload</button>
											<button type="reset" class="cancel">Cancelar upload</button>
									</div>
							</form>
							<div class="fileupload-content">
									<table class="files"></table>
									<div class="fileupload-progressbar"></div>
							</div>
					</div>				
					<!--/ upload file widget -->				
		</div>
		<div class="form hidden" id="search_imagenes">
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
			<table width="100%" border="0" cellspacing="0" cellpadding="6">
				<tr>
					<th width="13%">Imagen</th>
					<th width="82%">Titulo</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<? if($imagenes){ ?>
				<? foreach($imagenes as $imagen){ ?>
				<tr>
					<td><a href="imagenes_editar.php?id=<?=$imagen['id'];?>" title="<?=$imagen['titulo'];?>"> <img src="thumbnail.php?id=<?=$imagen['id'];?>&amp;size=1" border="0" /> </a></td>
					<td><a href="imagenes_editar.php?id=<?=$imagen['id'];?>">
						<?=$imagen['titulo'];?>
					</a></td>
					<td><a href="imagenes_borrar.php?id=<?=$imagen['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				<tr>
					<td colspan="3" align="center"><div class="paginate"> <a href="imagenes.php?pagina=1&keyword=<?=$keyword;?>">primera p&aacute;gina</a>
								<? for($i=$extremo_izquierdo;$i<=$extremo_derecho;$i++){?>
								<? if($pagina==$i){ ?>
								<a class="active" href="imagenes.php?pagina=<?=$i;?>&keyword=<?=$keyword;?>">
								<?=$i;?>
								</a>
								<? } else { ?>
								<a href="imagenes.php?pagina=<?=$i;?>&keyword=<?=$keyword;?>">
								<?=$i;?>
								</a>
								<? } ?>
								<? } ?>
							<a href="imagenes.php?pagina=<?=$paginas;?>&keyword=<?=$keyword;?>">ultima p&aacute;gina</a> </div></td>
				</tr>
				<? } else { ?>
				<tr class="empty">
					<td colspan="3">No se encontraron imagenes <a href="#" onclick="Javascript:search_imagenes();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
<script id="template-upload" type="text/x-jquery-tmpl">
    <tr class="template-upload{{if error}} ui-state-error{{/if}}">
        <td class="preview"></td>
        <td class="name">${name}</td>
        <td class="size">${sizef}</td>
        {{if error}}
            <td class="error" colspan="2">Error:
                {{if error === 'maxFileSize'}}File is too big
                {{else error === 'minFileSize'}}File is too small
                {{else error === 'acceptFileTypes'}}Filetype not allowed
                {{else error === 'maxNumberOfFiles'}}Max number of files exceeded
                {{else}}${error}
                {{/if}}
            </td>
        {{else}}
            <td class="progress"><div></div></td>
            <td class="start"><button>Comenzar</button></td>
        {{/if}}
        <td class="cancel"><button>Cancelar</button></td>
    </tr>
</script>
<script id="template-download" type="text/x-jquery-tmpl">
    <tr class="template-download{{if error}} ui-state-error{{/if}}">
        {{if error}}
            <td></td>
            <td class="name">${name}</td>
            <td class="size">${sizef}</td>
            <td class="error" colspan="2">Error:
                {{if error === 1}}File exceeds upload_max_filesize (php.ini directive)
                {{else error === 2}}File exceeds MAX_FILE_SIZE (HTML form directive)
                {{else error === 3}}File was only partially uploaded
                {{else error === 4}}No File was uploaded
                {{else error === 5}}Missing a temporary folder
                {{else error === 6}}Failed to write file to disk
                {{else error === 7}}File upload stopped by extension
                {{else error === 'maxFileSize'}}File is too big
                {{else error === 'minFileSize'}}File is too small
                {{else error === 'acceptFileTypes'}}Filetype not allowed
                {{else error === 'maxNumberOfFiles'}}Max number of files exceeded
                {{else error === 'uploadedBytes'}}Uploaded bytes exceed file size
                {{else error === 'emptyResult'}}Empty file upload result
                {{else}}${error}
                {{/if}}
            </td>
        {{else}}
            <td class="preview">
                {{if thumbnail_url}}
                    <a href="${url}" target="_blank"><img src="${thumbnail_url}"></a>
                {{/if}}
            </td>
            <td class="name">
                <a href="${url}"{{if thumbnail_url}} target="_blank"{{/if}}>${name}</a>
            </td>
            <td class="size">${sizef}</td>
            <td colspan="2"></td>
        {{/if}}
        <td class="delete">
            <!--button data-type="${delete_type}" data-url="${delete_url}">Delete</button-->
        </td>
    </tr>
</script>
	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
<script src="assets/scripts/upload/jquery.iframe-transport.js"></script>
<script src="assets/scripts/upload/jquery.fileupload.js"></script>
<script src="assets/scripts/upload/jquery.fileupload-ui.js"></script>
<script src="assets/scripts/upload/application.js"></script>
	
</body>
</html>
