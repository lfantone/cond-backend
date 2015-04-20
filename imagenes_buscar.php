<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$keyword = htmlspecialchars($_GET['keyword']);
$id_nota = htmlspecialchars($_GET['id_nota']);
$imagenes_sql = "
	SELECT * FROM imagenes
	WHERE titulo LIKE '%$keyword%' AND id NOT IN (SELECT id_imagen FROM notas_imagenes WHERE id_nota = $id_nota)
	AND estado = 3 ORDER BY id DESC
	LIMIT 0,60
";
$imagenes = $database->list_assoc($imagenes_sql);

if($imagenes){
?>
<table border="0" cellpadding="2" cellspacing="2">
	<? foreach($imagenes as $imagen){ ?>
	<tr>
		<td><input name="id_imagen[]" type="checkbox" id="id_imagen[]" value="<?=$imagen['id'];?>"></td>
		<td><a href="imagenes_editar.php?id=<?=$imagen['id'];?>" class="small">ver</a></td>
		<td> <img src="/backend/thumbnail.php?id=<?=$imagen['id'];?>&amp;size=1" border="0" /> </td>
		<td><?=$imagen['titulo'];?></td>
	</tr>
	<? } ?>
</table>
<?
} else {
?>
<span class="message_error">No se encontraron imagenes.</span>
<?
}
?>
