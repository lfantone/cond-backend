<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

$database = new db_mysql();
$database->connect();

$keyword = htmlspecialchars($_GET['keyword']);
$id_nota = htmlspecialchars($_GET['id_nota']);
$id_pais = htmlspecialchars($_GET['id_pais']);

$fichas_sql = "
	SELECT ma.nombre as marca, mo.nombre as modelo, fi.id as id, ve.nombre as version, e.nombre as estado 
	FROM fichas fi,modelo mo,marcas ma, version ve, estados e 
	WHERE (ma.nombre LIKE '%$keyword%' OR mo.nombre LIKE '%$keyword%') AND
		   mo.id_modelo = fi.id_modelo AND
		   ma.id = fi.id_marca AND
		   ve.id_version = fi.id_version AND
		   fi.id_estado = e.id	AND ". ($id_pais!=''?" fi.id_pais = $id_pais": "1") . "
	ORDER BY fi.id DESC LIMIT 0,60	
";
$fichas = $database->list_assoc($fichas_sql);

if($fichas){
?>
<table border="0" cellpadding="2" cellspacing="2">
	<? foreach($fichas as $ficha){ ?>
	<tr>
		<td><input name="id_ficha[]" type="checkbox" id="id_ficha[]" value="<?=$ficha['id'];?>"></td>
		<td><a href="fichas_edit.php?intId=<?=$ficha['id'];?>" class="small" target="_blank">ver</a></td>
		<td><?=htmlentities($ficha['marca'], ENT_QUOTES, "ISO-8859-1").' - '.htmlentities($ficha['modelo'], ENT_QUOTES, "UTF-8").' - '.htmlentities($ficha['version']).' - '.(htmlentities($ficha['estado'])=="Eliminada"?"<span style=\"color: #FF0000;\">".htmlentities($ficha['estado'])."</span>":htmlentities($ficha['estado']));?></td>
	</tr>
	<? } ?>
</table>
<?
} else {
?>
<span class="message_error">No se encontraron fichas.</span>
<?
}
?>
