<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

if($_POST){	
	$titulo = $_POST['titulo'];
	$flv = $_FILES['flv'];
	
	if($flv['size']>0){
		$cargar_video = $database->insert("videos","titulo = '$titulo',fecha = NOW(), estado = 3 ");
		$video_id = $database->insert_id();
		$video_path = "../uploads/videos/$video_id.flv";
		move_uploaded_file($flv['tmp_name'], $video_path);
	}
	header("Location: videos.php#$video_id");
}

$keyword = $_GET['keyword'];
$videos_sql = "
	SELECT * FROM videos WHERE titulo LIKE '%$keyword%' AND estado <> 1 ORDER BY id DESC
";
$videos = $database->list_assoc($videos_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Videos</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_video(){
	close_boxes();
	$('add_video').show();
	$('add_video_button').addClassName('active');
}

function search_videos(){
	close_boxes();
	$('search_videos').show();
	$('search_videos_button').addClassName('active');
}

function close_boxes(){
	$('search_videos').hide();
	$('add_video').hide();
	$('add_video_button').removeClassName('active');	
	$('search_videos_button').removeClassName('active');
}

function validate_add_video(){
	if($F('titulo')==''){
		alert('Ingrese el titulo de la video');
		$('titulo').focus();
		return false
	}
	return true
}

function checkHash(){
	if(location.hash=='#add'){
		add_video();
	}
}
</script>
</head>
<body onload="checkHash();">
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1>Videos </h1>
		<div class="options">
			<ul>
				<li><a id="add_video_button" href="#add" class="button" onclick="Javascript:add_video();">Agregar nuevo video</a></li>
				<li><a id="search_videos_button" href="#search" class="button" onclick="Javascript:search_videos();">Buscar videos</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_video">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_video();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Titulo</td>
						<td><input name="titulo" type="text" class="field" id="titulo" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">Archivo FLV</td>
						<td><input name="flv" type="file" class="field" id="flv" style="width:600px" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear video</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_videos">
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
					<th width="95%">Titulo</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<? if($videos){ ?>
				<? foreach($videos as $video){ ?>
				<tr>
					<td><a href="videos_editar.php?id=<?=$video['id'];?>">
						<?=$video['titulo'];?>
						</a></td>
					<td><a href="videos_borrar.php?id=<?=$video['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				<? } else { ?>
				<tr class="empty">
					<td colspan="2">No se encontraron videos <a href="#" onclick="Javascript:search_videos();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
