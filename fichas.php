<?
include("system.php");
include("classes/mysql.php");
include("classes/thumbnail.php");

header('Content-Type: text/html; charset=iso-8859-2');

$database = new db_mysql();
$database->connect();

if($_POST){	
	$estado = $_POST['estado'];
	$id_marca = $_POST['id_marca'];
	$modelo = $_POST['modelo'];
	$descripcion = $_POST['descripcion'];
	$estado = $_POST['estado'];
	
	for($i=1;$i<=102;$i++){
		$fields .=", campo$i = '".$_POST["campo$i"] ."'";
	}

	$cargar_ficha = $database->insert("fichas","id_marca = $id_marca, modelo = '$modelo', descripcion = '$descripcion' $fields, estado = $estado");
	$id_ficha = $database->insert_id();
	header("Location: fichas_editar.php?id=$id_ficha");
}

$keyword = $_GET['keyword'];

/* --- */

$fichas = $database->row_assoc("SELECT COUNT(id) cantidad FROM fichas WHERE estado <> 1 AND (titulo LIKE '%$keyword%' OR descripcion LIKE '%$keyword%')");
$cantidad = $fichas['cantidad'];

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

$fichas_sql = "
	SELECT fichas.id, marcas.nombre marca, estados.nombre estado, fichas.modelo FROM fichas
	INNER JOIN marcas ON marcas.id = fichas.id_marca
	INNER JOIN estados ON estados.id = fichas.estado
	WHERE (fichas.modelo LIKE '%$keyword%' OR fichas.descripcion LIKE '%$descripcion%') AND fichas.estado <> 1 ORDER BY fichas.id DESC LIMIT $desde,60
";
$fichas = $database->list_assoc($fichas_sql);
$estados = $database->list_assoc("SELECT * FROM estados WHERE id <> 1 ORDER BY nombre ASC");
$marcas = $database->list_assoc("SELECT * FROM marcas ORDER BY nombre ASC");

$categorias[0]['titulo'] = 'Técnica';
$categorias[0]['subcategorias'][0]['titulo'] = 'Motor';
$categorias[0]['subcategorias'][0]['rango'] = array(1,9);
$categorias[0]['subcategorias'][1]['titulo'] = 'Transmision';
$categorias[0]['subcategorias'][1]['rango'] = array(10,12);
$categorias[0]['subcategorias'][2]['titulo'] = 'Performance';
$categorias[0]['subcategorias'][2]['rango'] = array(13,18);
$categorias[0]['subcategorias'][3]['titulo'] = 'Dimensiones y chasis';
$categorias[0]['subcategorias'][3]['rango'] = array(19,35);

$categorias[1]['titulo'] = 'Confort y dise&ntilde;o';
$categorias[1]['subcategorias'][0]['titulo'] = 'Interior';
$categorias[1]['subcategorias'][0]['rango'] = array(36,62);
$categorias[1]['subcategorias'][1]['titulo'] = 'Exterior';
$categorias[1]['subcategorias'][1]['rango'] = array(63,72);
$categorias[1]['subcategorias'][2]['titulo'] = 'Multimedia';
$categorias[1]['subcategorias'][2]['rango'] = array(73,85);

$categorias[2]['titulo'] = 'Seguridad';
$categorias[2]['subcategorias'][0]['titulo'] = 'Seguridad';
$categorias[2]['subcategorias'][0]['rango'] = array(86,102);

$campos[1][0] = "Combustible";
$campos[1][1] = "Lts";

$campos[2][0] = "Cilindrada";
$campos[2][1] = "";

$campos[3][0] = "Cilindros";
$campos[3][1] = "";

$campos[4][0] = "Potencia Máxima";
$campos[4][1] = "Cv";

$campos[5][0] = "Par Motor/Torque";
$campos[5][1] = "Nm";

$campos[6][0] = "Posición";
$campos[6][1] = "";

$campos[7][0] = "Alimentación";
$campos[7][1] = "";

$campos[8][0] = "Relación de compresión";
$campos[8][1] = "";

$campos[9][0] = "Válvulas";
$campos[9][1] = "";

$campos[10][0] = "Tipo";
$campos[10][1] = "";

$campos[11][0] = "Marchas";
$campos[11][1] = "";

$campos[12][0] = "Traccion";
$campos[12][1] = "";

$campos[13][0] = "Velocidad Máxima";
$campos[13][1] = "km/h";

$campos[14][0] = "Aceleración 0 a 100 km/h";
$campos[14][1] = "segs";

$campos[15][0] = "Consumo urbano";
$campos[15][1] = "lts/100 km";

$campos[16][0] = "Consumo Interurbano";
$campos[16][1] = "lts/100 km";

$campos[17][0] = "Consumo Mixto";
$campos[17][1] = "lts/100 km";

$campos[18][0] = "Emisiones de CO2";
$campos[18][1] = "";

$campos[19][0] = "Tipo de carroceria";
$campos[19][1] = "";

$campos[20][0] = "Puertas";
$campos[20][1] = "";

$campos[21][0] = "Plazas";
$campos[21][1] = "";

$campos[22][0] = "Filas de asientos";
$campos[22][1] = "";

$campos[23][0] = "Largo/Ancho/Alto/Distancia entre ejes";
$campos[23][1] = "mm";

$campos[24][0] = "Peso";
$campos[24][1] = "";

$campos[25][0] = "Capacidad del baúl";
$campos[25][1] = "Lts.";

$campos[26][0] = "Capacidad del tanque de combustible";
$campos[26][1] = "Lts.";

$campos[27][0] = "Dimensiones de caja de cargas Largo/Ancho/Ancho entre caja de ruedas/Alto";
$campos[27][1] = "";

$campos[28][0] = "Volumen de caja de carga";
$campos[28][1] = "m3";

$campos[29][0] = "Capacidad de carga";
$campos[29][1] = "Kg.";

$campos[30][0] = "Frenos delanteros";
$campos[30][1] = "";

$campos[31][0] = "Frenos traseros";
$campos[31][1] = "";

$campos[32][0] = "Llantas";
$campos[32][1] = "";

$campos[33][0] = "Neumáticos";
$campos[33][1] = "";

$campos[34][0] = "Suspensión delantera";
$campos[34][1] = "";

$campos[35][0] = "Suspensión trasera";
$campos[35][1] = "";

$campos[36][0] = "Accionamiento de luces automático";
$campos[36][1] = "";

$campos[37][0] = "Climatización";
$campos[37][1] = "";

$campos[38][0] = "Alarma de luces encendidas";
$campos[38][1] = "";

$campos[39][0] = "Alza cristales eléctricos";
$campos[39][1] = "";

$campos[40][0] = "Apertura de baúl desde el habitáculo";
$campos[40][1] = "";

$campos[41][0] = "Apertura de tanque de combustible desde el habitáculo";
$campos[41][1] = "";

$campos[42][0] = "Asientos regulables en altura";
$campos[42][1] = "";

$campos[43][0] = "Asiento trasero rebatible";
$campos[43][1] = "";

$campos[44][0] = "Asientos calefaccionados";
$campos[44][1] = "";

$campos[45][0] = "Asientos con ajuste electronicos";
$campos[45][1] = "";

$campos[46][0] = "Asientos delanteros con butaca deportiva";
$campos[46][1] = "";

$campos[47][0] = "Asiento delantero bipartido";
$campos[47][1] = "";

$campos[48][0] = "Botón Start/Stop";
$campos[48][1] = "";

$campos[49][0] = "Cambio secuencial en el volante";
$campos[49][1] = "";

$campos[50][0] = "Cierre centralizado";
$campos[50][1] = "";

$campos[51][0] = "Computadora a bordo";
$campos[51][1] = "";

$campos[52][0] = "Direccion asistida";
$campos[52][1] = "";

$campos[53][0] = "Mandos de audio al volante ";
$campos[53][1] = "";

$campos[54][0] = "Reposabrazos";
$campos[54][1] = "";

$campos[55][0] = "Control crucero";
$campos[55][1] = "";

$campos[56][0] = "Sensor de lluvia";
$campos[56][1] = "";

$campos[57][0] = "Tapizado";
$campos[57][1] = "";

$campos[58][0] = "Salidas de aire";
$campos[58][1] = "";

$campos[59][0] = "Techo corredizo";
$campos[59][1] = "";

$campos[60][0] = "Comando a distancia";
$campos[60][1] = "";

$campos[51][0] = "Volante con ajuste vertical";
$campos[51][1] = "";

$campos[62][0] = "Volante de cuero";
$campos[62][1] = "";

$campos[63][0] = "Molduras color carroceria";
$campos[63][1] = "";

$campos[64][0] = "Espejos eléctricos";
$campos[64][1] = "";

$campos[65][0] = "Espejos revatibles electricamente";
$campos[65][1] = "";

$campos[66][0] = "Espejos con memorias";
$campos[66][1] = "";

$campos[67][0] = "Lava faros";
$campos[67][1] = "";

$campos[68][0] = "Lava luneta";
$campos[68][1] = "";

$campos[69][0] = "Cobertor de caja de carga";
$campos[69][1] = "";

$campos[70][0] = "Barras para portaequipajes en el techo";
$campos[70][1] = "";

$campos[71][0] = "Barra antivuelco";
$campos[71][1] = "";

$campos[72][0] = "Estribos";
$campos[72][1] = "";

$campos[73][0] = "Conexión auxiliar";
$campos[73][1] = "";

$campos[74][0] = "Conexión Bluetooth";
$campos[74][1] = "";

$campos[75][0] = "Control por voz";
$campos[75][1] = "";

$campos[76][0] = "Entrada para puerto USB";
$campos[76][1] = "";

$campos[77][0] = "Lector de tarjetas SD";
$campos[77][1] = "";

$campos[78][0] = "Navegador GPS";
$campos[78][1] = "";

$campos[79][0] = "Parlantes";
$campos[79][1] = "";

$campos[80][0] = "Radio AM/FM";
$campos[80][1] = "";

$campos[81][0] = "Radio satelital XM";
$campos[81][1] = "";

$campos[82][0] = "Reproductor CD";
$campos[82][1] = "";

$campos[83][0] = "Reproductor de DVD";
$campos[83][1] = "";

$campos[84][0] = "Reproductor MP3";
$campos[84][1] = "";

$campos[85][0] = "Toma corriente de 12V";
$campos[85][1] = "";

$campos[86][0] = "Airbags";
$campos[85][1] = "";

$campos[87][0] = "Alarma";
$campos[87][1] = "";

$campos[88][0] = "Asiento para ninos";
$campos[88][1] = "";

$campos[89][0] = "Asistencias electrónicas";
$campos[89][1] = "";

$campos[90][0] = "Cámara de retroceso";
$campos[90][1] = "";

$campos[91][0] = " Cinturones inerciales";
$campos[91][1] = "";

$campos[92][0] = "Sensor de distancia de estacionamiento ";
$campos[92][1] = "";

$campos[93][0] = "Desempanador de espejos exteriores";
$campos[93][1] = "";

$campos[94][0] = "Encendido automático de balizas en frenada de urgencia";
$campos[94][1] = "";

$campos[95][0] = "Faros antiniebla";
$campos[95][1] = "";

$campos[96][0] = "Faros de xenón";
$campos[96][1] = "";

$campos[97][0] = "Ganchos ISOFIX/Latch";
$campos[97][1] = "";

$campos[98][0] = "Garantía";
$campos[98][1] = "";

$campos[99][0] = "Indicador de presión de neumáticos";
$campos[99][1] = "";

$campos[100][0] = "Lavafaros";
$campos[100][1] = "";

$campos[101][0] = "Luces adaptativas a las curvas";
$campos[101][1] = "";

$campos[102][0] = "Tercer apoya cabezas trasero";
$campos[102][1] = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Fichas</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
<script type="text/javascript">
function add_ficha(){
	close_boxes();
	$('add_ficha').show();
	$('add_ficha_button').addClassName('active');
	
}

function search_fichas(){
	close_boxes();
	$('search_fichas').show();
	$('search_fichas_button').addClassName('active');
}

function close_boxes(){
	$('search_fichas').hide();
	$('add_ficha').hide();
	$('add_ficha_button').removeClassName('active');	
	$('search_fichas_button').removeClassName('active');
}

function validate_add_ficha(){
	if($F('modelo')==''){
		alert('Ingrese el modelo de la ficha');
		$('modelo').focus();
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
		<h1>Fichas </h1>
		<div class="options">
			<ul>
				<li><a id="add_ficha_button" href="#add" class="button" onclick="Javascript:add_ficha();">Agregar nueva ficha</a></li>
				<li><a id="search_fichas_button" href="#search" class="button" onclick="Javascript:search_fichas();">Buscar fichas</a></li>
			</ul>
		</div>
		<div class="form hidden" id="add_ficha">
			<div class="close"><a href="#close" onclick="Javascript:close_boxes();"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></div>
			<form action="<? $PHP_SELF;?>" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate_add_ficha();">
				<table border="0" cellspacing="6" cellpadding="6">
					<tr>
						<td class="label">Estado</td>
						<td><select name="estado" id="estado">
								<? foreach($estados as $estado){?>
								<option value="<?=$estado['id'];?>">
								<?=$estado['nombre'];?>
								</option>
								<? } ?>
							</select></td>
					</tr>
					<tr>
						<td class="label">Marca</td>
						<td><select name="id_marca" id="id_marca">
								<? foreach($marcas as $marca){?>
								<option value="<?=$marca['id'];?>">
								<?=$marca['nombre'];?>
								</option>
								<? } ?>
							</select></td>
					</tr>
					<tr>
						<td class="label">Modelo</td>
						<td><input name="modelo" type="text" class="field" id="modelo" value="" /></td>
					</tr>
					<tr>
						<td class="label">Descripcion</td>
						<td><textarea name="descripcion" cols="45" rows="5" class="field" id="descripcion"></textarea></td>
					</tr>
					<? foreach($categorias as $categoria){?>
					<tr>
						<td>&nbsp;</td>
						<td><h1>
								<?=$categoria['titulo'];?>
							</h1></td>
					</tr>
					<? foreach($categoria['subcategorias'] as $subcategoria) {?>
					<tr>
						<td>&nbsp;</td>
						<td>&#8226;
							<?=$subcategoria['titulo'];?></td>
					</tr>
					<? for($i=$subcategoria['rango'][0];$i<=$subcategoria['rango'][1];$i++){?>
					<tr>
						<td class="label"><?=$campos[$i][0];?></td>
						<td><input name="campo<?=$i;?>" type="text" class="field" id="campo<?=$i;?>" />
							<? if($campos[$i][1]!=''){?>
							(
							<?=$campos[$i][1];?>
							)
							<? } ?></td>
					</tr>
					<? } ?>
					<? } ?>
					<? } ?>					
					<tr>
						<td>&nbsp;</td>
						<td><button type="submit" class="bold1">crear ficha</button> 
							</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="form hidden" id="search_fichas">
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
					<th width="78%">Marca - Modelo</th>
					<th width="17%">Estado</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<? if($fichas){ ?>
				<? foreach($fichas as $ficha){ ?>
				<tr>
					<td><a href="fichas_editar.php?id=<?=$ficha['id'];?>">
						<?=$ficha['marca'];?> - <?=$ficha['modelo'];?>
						</a></td>
					<td><?=$ficha['estado'];?></td>
					<td><a href="fichas_borrar.php?id=<?=$ficha['id'];?>"><img src="assets/images/close.gif" width="13" height="14" border="0" /></a></td>
				</tr>
				<? } ?>
				<tr>
					<td colspan="3" align="center"><div class="paginate"> <a href="fichas.php?pagina=1&keyword=<?=$keyword;?>">primera p&aacute;gina</a>
							<? for($i=$extremo_izquierdo;$i<=$extremo_derecho;$i++){?>
							<? if($pagina==$i){ ?>
							<a class="active" href="fichas.php?pagina=<?=$i;?>&keyword=<?=$keyword;?>">
							<?=$i;?>
							</a>
							<? } else { ?>
							<a href="fichas.php?pagina=<?=$i;?>&keyword=<?=$keyword;?>">
							<?=$i;?>
							</a>
							<? } ?>
							<? } ?>
							<a href="fichas.php?pagina=<?=$paginas;?>&keyword=<?=$keyword;?>">ultima p&aacute;gina</a> </div></td>
				</tr>
				<? } else { ?>
				<tr class="empty">
					<td colspan="3">No se encontraron fichas <a href="#" onclick="Javascript:search_fichas();">Int&eacute;ntelo nuevamente</a></td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
