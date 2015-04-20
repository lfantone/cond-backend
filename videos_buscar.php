<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$keyword = htmlspecialchars($_GET['keyword']);
$id_nota = htmlspecialchars($_GET['id_nota']);
$videos_sql = "
	SELECT * FROM videos 
	WHERE titulo LIKE '%$keyword%' AND id NOT IN (SELECT id_video FROM notas_videos WHERE id_nota = $id_nota) AND estado = 3 
	ORDER BY id DESC
	LIMIT 0,60
";
$videos = $database->list_assoc($videos_sql);

if($videos){
?>
<table border="0" cellpadding="2" cellspacing="2">
	<? foreach($videos as $video){ ?>
	<tr>
		<td><input name="id_video[]" type="checkbox" id="id_video[]" value="<?=$video['id'];?>"></td>
		<td><a href="videos_editar.php?id=<?=$video['id'];?>" class="small">ver</a></td>
		<td><?=$video['titulo'];?></td>
	</tr>
	<? } ?>
</table>
<?
} else {
?>
<span class="message_error">No se encontraron videos.</span>
<?
}
?>
