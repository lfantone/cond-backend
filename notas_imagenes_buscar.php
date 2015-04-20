<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$keyword = htmlspecialchars($_GET['keyword']);
$id_imagen = htmlspecialchars($_GET['id_imagen']);
$notas_sql = "
	SELECT * FROM notas
	WHERE titulo LIKE '%$keyword%' AND id NOT IN (SELECT id_nota FROM notas_imagenes WHERE id_imagen = $id_imagen) AND estado IN (2,3) 
	ORDER BY id DESC
	LIMIT 0,60
";
$notas = $database->list_assoc($notas_sql);
echo mysql_error();
if($notas){
?>
<table border="0" cellpadding="2" cellspacing="2">
	<? foreach($notas as $nota){ ?>
	<tr>
		<td><input name="id_nota[]" type="checkbox" id="id_nota[]" value="<?=$nota['id'];?>"></td>
		<td><a class="small" href="notas_editar.php?id=<?=$nota['id'];?>">ver</a></td>
		<td><?=$nota['titulo'];?></td>
	</tr>
	<? } ?>
</table>
<?
} else {
?>
<span class="message_error">No se encontraron notas.</span>
<?
}
?>
