<?
include("system.php");
include("classes/mysql.php");

$database = new db_mysql();
$database->connect();

$id = isset($_GET['id'])?$_GET['id']:$_POST['id'];

// fichas relacionadas
$fichas_sql = "
	SELECT fs.id_fichas_servicio as id_relacion, fs.id_servicio, ma.nombre as marca, mo.nombre as modelo, ve.nombre as version, fs.id_ficha as id_ficha 
        FROM fichas_servicios fs, fichas fi, modelo mo, marcas ma, version ve
        WHERE						fs.id_ficha  = fi.id AND
                        mo.id_modelo = fi.id_modelo AND
                        ma.id = fi.id_marca AND
                        ve.id_version = fi.id_version AND
                        fi.id_estado = 3 AND
                        fs.id_servicio = $id

";
$fichas_relacionadas = $database->list_assoc($fichas_sql);

if($_POST){	
	$id = $_POST['id'];
	//var_dump($_POST);
	$nombre = $_POST['nombre'];

	$actualizar_servicio = $database->update("servicios","nombre = '$nombre'", "id_servicio = $id");			
	
	
	// Relaciono servicios_tareas
	
	if (isset($_POST['id_tarea'])){
		
		$id_kilometro = $_POST['id_kilometro'];
		$i = 0;
		
		// borro los anteriores
		$database->query("DELETE FROM servicios_tareas WHERE id_servicio = $id");
		
		foreach ($_POST['id_tarea'] as $tareas) {
			
			foreach ($tareas as $id_tarea) {
			
				$database->insert("servicios_tareas","id_servicio = $id, id_kilometro = " . $id_kilometro[$i] . ", id_tarea = $id_tarea");
				//echo "id_servicio = $id, id_kilometro = " . $id_kilometro[$i] . ", id_tarea = $id_tarea";
			
			}
			
			$i++;
		}
		
	}
	
	// Relaciono fichas
	
	if($_POST['id_ficha']){
		foreach($_POST['id_ficha'] as $ficha){
			$database->insert("fichas_servicios","id_ficha = $ficha, id_servicio = $id");
			$database->insert("fichas_info","id_fichas = " . $ficha .", fecha = NOW(), accion = 'modificacion'");
		}		
	}	
	
	// Informo como modificada
	
	foreach($fichas_relacionadas as $ficha){
		$database->insert("fichas_info","id_fichas = " . $ficha['id_ficha'] .", fecha = NOW(), accion = 'modificacion'");
	}

	header("Location: servicios.php");
	
	
}


$servicio = $database->row_assoc("SELECT * FROM servicios WHERE id_servicio = $id");
if(!$servicio){
	header('Location:servicios.php');
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>conduciendo - editar servicio</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>
	
// fichas
function buscarFichas(){
        new Ajax.Updater('fichas_encontradas', 'fichas_buscar.php', {
          parameters: { keyword: $F('ficha_keyword'), id_nota: '<?=$id;?>', id_pais: $('id-pais-ficha').getValue() },
          method: 'get'
        });
        $('fichas_encontradas').show();
}

function borrarFicha(id_relacion){
        new Ajax.Request('servicios_fichas_borrar.php', {
          method: 'post',
          parameters: {id:id_relacion}
        });
        $('ficha'+id_relacion).remove();
}


</script>
</head>
<body>
<?
include("header.php");
?>
<div class="container">
	<div class="content">
		<h1><a href="servicios.php">Servicios</a> &raquo; &quot;
			<?=$servicio['nombre'];?>
			&quot;</h1>
		<div class="form">
			<form action="servicios_editar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Nombre del servicio</td>
						<td><input name="nombre" type="text" class="field" id="nombre" value="<?=$servicio['nombre'];?>" style="width:600px" /></td>
					</tr>
					<!-- kilometros y tareas -->					
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td colspan="2">
						<div id="kilometros-tareas-container">							
						<?php
							
							$servicios_tareas_sql = "
								SELECT `id_kilometro`,`id_tarea` 
								FROM `servicios_tareas` 
								WHERE `id_servicio` = $id 
								GROUP BY `id_kilometro`
								ORDER BY `id_kilometro`,`id_tarea`

								";
							
							$servicios_tareas = $database->list_assoc($servicios_tareas_sql);							
							$servicios_tareas = !empty($servicios_tareas)?$servicios_tareas:array(0=>false);							
							$k = 0;

							foreach ($servicios_tareas as $servicios_tarea) :			
								
								$quitar_link = !$servicios_tarea?"javascript:quitar($k);":"javascript:void(0);";
						
						?>
							<div class="box1" id="kilometros-tareas-<?=$k?>" style="display: block; max-height:none; border: 1px solid #CCCCCC;">	
								<div id="links" style="margin-left: 98%;" class="close1">  																		
									<a href="<?=$quitar_link?>" class="small"><img width="13" height="14" border="0" src="assets/images/close.gif"></a> 
								</div> 								
								<table width="100%" border="0" cellpadding="2" cellspacing="2">
								<tr>
									<td width="10%">Kilometros</td>
									<td >
										<?php
										
											// si no hay ninguna asociación

											$kilometro_sql = "
												SELECT id_kilometro, nombre
												FROM kilometros 
												ORDER BY nombre ASC
											";
											$kilometros = $database->list_assoc($kilometro_sql);

										?>
											<label class="small">
												<select name="id_kilometro[]" id="id-kilometro"  >
													<? foreach($kilometros as $kilometro) : ?>
													<option value="<?=$kilometro['id_kilometro'];?>" <?php echo $kilometro['id_kilometro']==$servicios_tarea['id_kilometro']?'selected':''; ?> ><?=$kilometro['nombre'];?></option>
													<? endforeach; ?>
												</select>									
												
												<span id="link-ocultar-tareas-<?=$k?>" style="display:none;">&nbsp;<a href="javascript:ocultar(<?=$k?>);" class="small">Ocultar tareas</a></span>
												<span id="link-mostrar-tareas-<?=$k?>">&nbsp;<a href="javascript:mostrar(<?=$k?>);" class="small">Mostrar tareas</a></span>
											</label>


									</td>
								</tr>
								<?php
								
								
									$kilometros_condition = !$servicios_tarea?"":" and servicios_tareas.id_kilometro=" . $servicios_tarea['id_kilometro'];
									$tarea_sql = "
										SELECT t.id_tarea, t.nombre, IFNULL(servicios_tareas.id_tarea,0) id_relacion
										FROM tareas t
										LEFT OUTER JOIN servicios_tareas ON servicios_tareas.id_tarea = t.id_tarea AND servicios_tareas.id_servicio = $id $kilometros_condition ORDER BY t.nombre ASC

									";
									$tareas = $database->list_assoc($tarea_sql);								
									
								?>

								<tr>									
									<td colspan="2" >							
										<table width="100%" border="0" cellpadding="2" cellspacing="2" id="tareas-table-<?=$k?>" style="display:none;">
										<tr>
											<?
												$col = 1;
												foreach($tareas as $tarea):
													if($col==3) {
														echo "</tr><tr>";
														$col = 1;
													}
											?>
											<td>
												<label class="small">
													<input name="id_tarea[<?=$k?>][]" type="checkbox" id="id-tarea" value="<?=$tarea['id_tarea'];?>" <?=$tarea['id_relacion']?"checked=\"checked\"":"";?> />
													<?=$tarea['nombre'];?>
												</label>
											</td>
											<?
													$col++;
												endforeach;
											?>
										</tr>
									</table>
									</td>
								</tr>					
								</table>

							</div>							
							<?php
									$k++;
								endforeach;
							?>
						</div>
						<div style="margin-left: 80%;">
							 <a href="javascript:void(0);" class="small" id="add-field">Agregar &raquo;</a>
						</div>
							
						</td>
					</tr>
					
					<!-- fin kilometros y tareas -->
					<!-- relacionar fichas -->					
					<tr>
						<td class="label">&nbsp;</td>
						<td><hr size="1" noshade="noshade" /></td>
					</tr>
					<tr>
						<td class="label">Fichas relacionadas</td>
						<td><? if($fichas_relacionadas){?>
							<div class="box1">
								<table border="0" cellpadding="2" cellspacing="2">
									<? foreach($fichas_relacionadas as $ficha){ ?>
									<tr id="ficha<?=$ficha['id_relacion'];?>">
										<td><div class="close1"><a title="Eliminar ficha" href="Javascript:borrarFicha(<?=$ficha['id_relacion']?>);"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div></td>
										<td><a class="small" href="fichas_edit.php?intId=<?=$ficha['id_ficha'];?>">
											<?=htmlentities($ficha['marca'], ENT_QUOTES, "UTF-8").' - '.htmlentities($ficha['modelo'], ENT_QUOTES, "UTF-8").' - '.htmlentities($ficha['version']);?>
											</a>
										</td>
									</tr>
									<? } ?>
								</table>
							</div>
							<? } else { ?>
							<span class="message_error">No hay fichas relacionadas.</span>
							<? } ?></td>
					</tr>
					<tr>
						<td class="label">Filtrar por pa&iacute;s</td>
						<td>
							
							<?php
								$paises_sql = "
									SELECT paises.id, paises.nombre, IFNULL(notas_paises.id,0) id_relacion
									FROM paises
									LEFT OUTER JOIN notas_paises ON notas_paises.id_pais = paises.id AND notas_paises.id_nota = $id ORDER BY paises.nombre ASC
								";
								$paises = $database->list_assoc($paises_sql);								
							?>
								<label class="small">
									<select name="id-pais-ficha" id="id-pais-ficha"  >
										<option value="">Todos</option>
										<? foreach($paises as $pais) : ?>
										<option value="<?=$pais['id'];?>" <?php echo $pais['id_relacion']!=0?'selected':''; ?> ><?=$pais['nombre'];?></option>
										<? endforeach; ?>
									</select>									
								</label>
								
							
						</td>
					</tr>					
					<tr>
						<td class="label">Relacionar Fichas</td>
						<td><input name="ficha_keyword" type="text" class="field" id="ficha_keyword" value="" style="width:300px" />
							<button type="button" onclick="Javascript:buscarFichas();">buscar</button>
							 </td>
					</tr>					
					<tr>
						<td class="label">&nbsp;</td>
						<td><div class="box1" id="fichas_encontradas" style="display:none"></div></td>
					</tr>					
					
					<!-- fin relacionar fichas -->
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">Guardar servicio</button>
							<input name="id" type="hidden" id="id" value="<?=$id;?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
	<script>
// para no tener probles con prototype

<?php

$kilometro_sql = "
	SELECT id_kilometro, nombre
	FROM kilometros 
	ORDER BY nombre ASC
";
$kilometros = $database->list_assoc($kilometro_sql);								

$tarea_sql = "
	SELECT t.id_tarea, t.nombre
	FROM tareas t
	ORDER BY t.nombre ASC

";
$tareas = $database->list_assoc($tarea_sql);										

?>

// Para no tener problemas con prototype

 var count = <?=$k?>;
 
 jQuery.noConflict();
     
 jQuery(document).ready(function($){
		
		$('#add-field').click(function() {
			
			count ++;
			
			$('#kilometros-tareas-container').append(
			
				'			<div class="box1" id="kilometros-tareas-' + count + '" style="display: block; max-height:none;border: 1px solid #CCCCCC;"> ' +	
				'				<div id="links" style="margin-left: 98%;" class="close1">  ' +
				'					 <a href="javascript:quitar(' + count + ');" class="small"><img width="13" height="14" border="0" src="assets/images/close.gif"></a> ' +
				'				</div> ' +
					
				'				<table width="100%" border="0" cellpadding="2" cellspacing="2">  ' +
				'				<tr>' +
				'					<td width="10%">Kilometros</td> ' +
				'					<td> ' +
				'								<select name="id_kilometro[]" id="id-kilometro"  > ' +
													<? foreach($kilometros as $kilometro) : ?>
				'									<option value="<?=$kilometro['id_kilometro'];?>"  ><?=$kilometro['nombre'];?></option>' +
													<? endforeach; ?>
				'								</select> ' +
				'								<span id="link-ocultar-tareas-' + count + '">&nbsp;<a href="javascript:ocultar(' + count + ');" class="small">Ocultar tareas</a></span>' +
				'								<span id="link-mostrar-tareas-' + count + '" style="display:none;">&nbsp;<a href="javascript:mostrar(' + count + ');" class="small">Mostrar tareas</a></span>' +					
				'					</td>  ' +
				'				</tr>  ' +
				'				<tr>  ' +
				'					<td colspan="2">  ' +
				'						<table width="100%" border="0" cellpadding="2" cellspacing="2" id="tareas-table-' + count + '">  ' +
				'						<tr>  ' +
											<?
												$col = 1;
												foreach($tareas as $tarea):
													if($col==3) {
														echo "'</tr><tr>' +";
														$col = 1;
													}
											?>
				'							<td> ' +
				'								<label class="small">  ' +
				'									<input name="id_tarea[' + count + '][]" type="checkbox" id="id-tarea" value="<?=$tarea['id_tarea'];?>"  /> ' +
				'									<?=$tarea['nombre'];?>  ' +
				' 							</label> ' +
				'							</td> ' +
											<?
													$col++;
												endforeach;
											?>
				'						</tr> ' +
				'					</table> ' +
				'					</td> ' +
				'				</tr> ' +
				'				</table> ' +
				'			</div>'
				
				
		
			);
			
		});
		
});

function quitar(count) {
	jQuery.noConflict();
     
	jQuery(document).ready(function($){

		$('#kilometros-tareas-' + count).remove();
		
	});		
}

function ocultar(count) {
	jQuery.noConflict();
     
	jQuery(document).ready(function($){

		$('#tareas-table-' + count).hide();
		$('#link-ocultar-tareas-' + count).hide();
		$('#link-mostrar-tareas-' + count).show();
		
	});		
}

function mostrar(count) {
	jQuery.noConflict();
     
	jQuery(document).ready(function($){

		$('#tareas-table-' + count).show();
		$('#link-mostrar-tareas-' + count).hide();
		$('#link-ocultar-tareas-' + count).show();

		
	});		
}

	</script>
</body>
</html>
