<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");
include("helpers/string.php");

header('Content-Type: text/html; charset=iso-8859-2');

$database = new db_mysql();
$database->connect();


$keyword = $_GET['keyword'];

$comentarios_sql = "
	SELECT * FROM comentarios WHERE comentarios LIKE '%$keyword%' or nombre LIKE '%$keyword%' or email LIKE '%$keyword%'  ORDER BY id DESC
";
$comentarios = $database->list_assoc($comentarios_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Comentarios</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">

function search_comentarios(){
	close_boxes();
	$('search_comentarios').show();
	$('search_comentarios_button').addClassName('active');
}

function close_boxes(){
	$('search_comentarios').hide();
	$('search_comentarios_button').removeClassName('active');
}


</script>

</head>
<body >
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1>Comentarios</h1>
		<div class="options">
			<ul>
				<li><a id="search_comentarios_button" href="#search" class="button" onclick="Javascript:search_comentarios();">Buscar comentarios</a></li>
			</ul>
		</div>
		<div class="form hidden" id="search_comentarios">
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
		<div class="grid" style="width: 1100px">
			<table  width="100%" border="0" cellspacing="0" cellpadding="6">
				<tr>
					<th width="1%">ID</th>
					<th width="5%">Nombre</th>
					<th width="5%">Email</th>
					<th width="50%">Comentario</th>          
					<th width="4%">Nota Id</th>
					<th width="4%">&nbsp;</th>
				</tr>
				<? if($comentarios){ ?>
				<? foreach($comentarios as $comentario){ ?>
        <tr bgcolor="<?=$comentario['status']!=1?"#F6CED8":""?>">
					<td><?=$comentario['id'];?></td>
					<td>
						<?=truncate($comentario['nombre'],3);?>
					</td>
					<td>
						<?=truncate($comentario['email'],10);?>
					</td>
					<td>
						<?=truncate($comentario['comentarios'],15);?>
					</td>          
					<td><a href="notas_editar.php?id=<?=$comentario['id_nota'];?>"><?=$comentario['id_nota'];?></a></td>
					<td><a href="comentarios_borrar.php?id=<?=$comentario['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				
				<? } else { ?>
				<tr class="empty">
					<td colspan="2">No se encontraron comentarios <a href="#" onclick="Javascript:search_comentarios();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php
 // actualizo lo comentarios como leidos

  $database->update("comentarios","status = 1", "1");			

?>
