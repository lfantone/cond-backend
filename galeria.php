<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

//header('Content-Type: text/html; charset=iso-8859-2');

$database = new db_mysql();
$database->connect();

$notas_sql = "
	SELECT notas.id, notas.titulo
	FROM notas
	INNER JOIN notas_categorias ON notas_categorias.id_nota = notas.id AND notas_categorias.id_categoria = 11
	WHERE notas.estado = 3
	GROUP BY notas.id
	ORDER BY notas.id DESC
";
$notas = $database->list_assoc($notas_sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Galería</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>

</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1>Galer&iacute;a</h1>
		<div class="options">Para agregar una nota a la galer&iacute;a seleccione la categoria Galeria, dentro de la nota que desee</div>
		<div class="grid">
			<table width="100%" border="0" cellspacing="0" cellpadding="6">
				<tr>
					<th width="95%">Titulo</th>
				</tr>
				<? if($notas){ ?>
				<? foreach($notas as $nota){ ?>
				<tr>
					<td><a href="notas_editar.php?id=<?=$nota['id'];?>">
						<?=$nota['titulo'];?>
					</a></td>
				</tr>
				<? } ?>

				<? } else { ?>

				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
