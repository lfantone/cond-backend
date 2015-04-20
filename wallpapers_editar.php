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

	$actualizar_wallpaper = $database->update("wallpapers","titulo = '$titulo'", "id = $id");
	
	if($jpg['size']>0){
		$wallpaper_id = $id;
		$wallpaper_path = "../uploads/wallpapers/$wallpaper_id.jpg";
		move_uploaded_file($jpg['tmp_name'], $wallpaper_path);
	}
		
	header("Location: wallpapers_editar.php?id=$id");
}

$wallpaper = $database->row_assoc("SELECT * FROM wallpapers WHERE id = $id");
if(!$wallpaper){
	header('Location:wallpapers.php');
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar wallpaper</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript" src="assets/scripts/swfobject.js"></script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="wallpapers.php">Wallpapers</a> &raquo; &quot;<?=$wallpaper['titulo'];?>&quot;</h1>
		<div class="form">
			<form action="wallpapers_editar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Titulo</td>
						<td><input name="titulo" type="text" class="field" id="titulo" value="<?=$wallpaper['titulo'];?>" style="width:600px" /></td>
					</tr>
					<tr>
						<td class="label">&nbsp;</td>
						<td><img src="wallpaper_thumbnail.php?id=<?=$wallpaper['id'];?>&amp;size=2" border="0" /></td>
					</tr>
					<tr>
						<td class="label">Reemplazar JPG </td>
						<td><input name="jpg" type="file" class="field" id="jpg" style="width:600px" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">actualizar wallpaper</button>
						
						<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
