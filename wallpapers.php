<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

if($_POST){	
	$titulo = $_POST['titulo'];
	$jpg = $_FILES['jpg'];
	
	if($jpg['size']>0){
		$cargar_wallpaper = $database->insert("wallpapers","titulo = '$titulo', estado = 3 ");
		$wallpaper_id = $database->insert_id();
		$wallpaper_path = "../uploads/wallpapers/$wallpaper_id.jpg";
		move_uploaded_file($jpg['tmp_name'], $wallpaper_path);
	}
	header("Location: wallpapers.php#$wallpaper_id");
}

$keyword = $_GET['keyword'];

/* --- */
$wallpapers = $database->row_assoc("SELECT COUNT(id) cantidad FROM wallpapers WHERE estado = 3 AND titulo LIKE '%$keyword%'");
$cantidad = $wallpapers['cantidad'];

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

$wallpapers_sql = "
	SELECT * FROM wallpapers WHERE titulo LIKE '%$keyword%' AND estado = 3 ORDER BY id DESC LIMIT $desde,60
";
$wallpapers = $database->list_assoc($wallpapers_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Wallpapers</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_wallpaper(){
	close_boxes();
	$('add_wallpaper').show();
	$('add_wallpaper_button').addClassName('active');
}

function search_wallpapers(){
	close_boxes();
	$('search_wallpapers').show();
	$('search_wallpapers_button').addClassName('active');
}

function close_boxes(){
	$('search_wallpapers').hide();
	$('add_wallpaper').hide();
	$('add_wallpaper_button').removeClassName('active');	
	$('search_wallpapers_button').removeClassName('active');
}

function validate_add_wallpaper(){
	if($F('titulo')==''){
		alert('Ingrese el titulo de la wallpaper');
		$('titulo').focus();
		return false
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
		<h1>Wallpapers (&asymp; <?=$cantidad;?>)</h1>
		<div class="options">
			<ul>
				<li><a id="add_wallpaper_button" href="#add" class="button" onclick="Javascript:add_wallpaper();">Agregar nuevo wallpaper</a></li>
				<li><a id="search_wallpapers_button" href="#search" class="button" onclick="Javascript:search_wallpapers();">Buscar wallpapers</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_wallpaper">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_wallpaper();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Titulo</td>
						<td><input name="titulo" type="text" class="field" id="titulo" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">Archivo JPG</td>
						<td><input name="jpg" type="file" class="field" id="jpg" style="width:300px" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear wallpaper</button></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_wallpapers">
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
					<th width="13%">Wallpaper</th>
					<th width="82%">Titulo</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<? if($wallpapers){ ?>
				<? foreach($wallpapers as $wallpaper){ ?>
				<tr>
					<td><a href="wallpapers_editar.php?id=<?=$wallpaper['id'];?>" title="<?=$wallpaper['titulo'];?>"> <img src="wallpaper_thumbnail.php?id=<?=$wallpaper['id'];?>&amp;size=1" border="0" /> </a></td>
					<td><a href="wallpapers_editar.php?id=<?=$wallpaper['id'];?>">
						<?=$wallpaper['titulo'];?>
					</a></td>
					<td><a href="wallpapers_borrar.php?id=<?=$wallpaper['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				<tr>
					<td colspan="3" align="center"><div class="paginate"> <a href="wallpapers.php?pagina=1&keyword=<?=$keyword;?>">primera p&aacute;gina</a>
								<? for($i=$extremo_izquierdo;$i<=$extremo_derecho;$i++){?>
								<? if($pagina==$i){ ?>
								<a class="active" href="wallpapers.php?pagina=<?=$i;?>&keyword=<?=$keyword;?>">
								<?=$i;?>
								</a>
								<? } else { ?>
								<a href="wallpapers.php?pagina=<?=$i;?>&keyword=<?=$keyword;?>">
								<?=$i;?>
								</a>
								<? } ?>
								<? } ?>
							<a href="wallpapers.php?pagina=<?=$paginas;?>&keyword=<?=$keyword;?>">ultima p&aacute;gina</a> </div></td>
				</tr>
				<? } else { ?>
				<tr class="empty">
					<td colspan="3">No se encontraron wallpapers <a href="#" onclick="Javascript:search_wallpapers();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
