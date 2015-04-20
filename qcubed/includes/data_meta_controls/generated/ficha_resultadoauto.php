<?
require_once("classes/mysql.php");
require_once("common.php");

$return			 = $_GET['ret']; //si viene seteado ba lo mando al buscador avanzado sino no hago nada con esta variable.
$pagina          = mysql_real_escape_string(htmlspecialchars($_GET['pagina'], ENT_QUOTES)); //fichas.id_marca
$marca_id        = mysql_real_escape_string(htmlspecialchars($_GET['marca_id'], ENT_QUOTES)); //fichas.id_marca
$modelo_id       = mysql_real_escape_string(htmlspecialchars($_GET['modelo_id'], ENT_QUOTES)); //fichas.id_modelo
$version_id      = mysql_real_escape_string(htmlspecialchars($_GET['version_id'], ENT_QUOTES)); //fichas.id_version
$tipovehiculo_id = mysql_real_escape_string(htmlspecialchars($_GET['tipovehiculo_id'], ENT_QUOTES)); //fichas.id_tipos
$combustible     = mysql_real_escape_string(htmlspecialchars($_GET['combustible'], ENT_QUOTES)); //fichas.combustible
$ver_marca_id    = mysql_real_escape_string(htmlspecialchars($_GET['ver_marca_id'], ENT_QUOTES)); //fichas.id_marca
$ver_modelo_id   = mysql_real_escape_string(htmlspecialchars($_GET['ver_modelo_id'], ENT_QUOTES)); //fichas.id_modelo
$moneda_id       = mysql_real_escape_string(htmlspecialchars($_GET['moneda_id'], ENT_QUOTES));
$preciodesde     = mysql_real_escape_string(htmlspecialchars($_GET['preciodesde'], ENT_QUOTES));
$preciohasta     = mysql_real_escape_string(htmlspecialchars($_GET['preciohasta'], ENT_QUOTES));
$id_nota         = mysql_real_escape_string(htmlspecialchars($_GET['id_nota'], ENT_QUOTES)); 

$allparams      = "&pagina=$pagina&marca_id=$marca_id&modelo_id=$modelo_id&version_id=$version_id&tipovehiculo_id=$tipovehiculo_id&combustible=$combustible&ver_marca_id=$ver_marca_id&ver_modelo_id=$ver_modelo_id&moneda_id=$moneda_id&preciodesde=$preciodesde&preciohasta=$preciohasta&id_nota=$id_nota";



$database = new db_mysql();
$database->connect();

//Filtros posibles
$ficha_id        = mysql_real_escape_string(htmlspecialchars($_GET['ficha_id'], ENT_QUOTES)); //fichas.id

$ficha_auto_sql =  "SELECT f.*, fi.id_imagen, ma.nombre marca, mo.nombre modelo, ti.nombre tipo_vehiculo, ve.nombre version FROM fichas f, fichas_imagenes fi, marcas ma, modelo mo, tipos ti, version ve WHERE f.id=".$ficha_id." and f.id_marca = ma.id and f.id_modelo=mo.id_modelo and ti.id = f.id_tipos and ve.id_version=f.id_version and f.id=fi.id_ficha and fi.imagen_principal=1
LIMIT 0, 1";

$ficha_equipamiento_sql =  "select i.id_item, i.nombre, i.descripcion, i.seccion, i.orden_seccion, fiv.valor
from item i, fichas_item_valor fiv
where fiv.id_fichas=".$ficha_id." and fiv.id_item = i.id_item
order by i.seccion, i.orden_seccion
LIMIT 0, 100";

$ficha_imagenes_sql = "SELECT * FROM fichas_imagenes where id_ficha=".$ficha_id." order by id_imagen LIMIT 0, 100";

$ficha_auto = $database->list_assoc($ficha_auto_sql,true);
$ficha_equipamiento = $database->list_assoc($ficha_equipamiento_sql,true);
$ficha_imagenes = $database->list_assoc($ficha_imagenes_sql,true);
?>
<script>
function f_activarSolapa(nombre){
	if (nombre=="solapatecnica"){
			document.getElementById("solapaequipamiento").className = "ficha-auto-equipamiento-solapa";
			document.getElementById('fichaequipamiento').style.display='none';
			document.getElementById("solapaimagenes").className = "ficha-auto-imagenes-solapa";
			document.getElementById('fichaimagenes').style.display='none';
			document.getElementById("solapatecnica").className = "ficha-auto-tecnica-solapa-on";
			document.getElementById('fichatecnica').style.display='block';
	}
	if (nombre=="solapaequipamiento"){
			document.getElementById("solapatecnica").className = "ficha-auto-tecnica-solapa";
			document.getElementById('fichatecnica').style.display='none';
			document.getElementById("solapaimagenes").className = "ficha-auto-imagenes-solapa";
			document.getElementById('fichaimagenes').style.display='none';
			document.getElementById("solapaequipamiento").className = "ficha-auto-equipamiento-solapa-on";
			document.getElementById('fichaequipamiento').style.display='block';
	}
	if (nombre=="solapaimagenes"){
			document.getElementById("solapatecnica").className = "ficha-auto-tecnica-solapa";
			document.getElementById('fichatecnica').style.display='none';
			document.getElementById("solapaequipamiento").className = "ficha-auto-equipamiento-solapa";
			document.getElementById('fichaequipamiento').style.display='none';
			document.getElementById("solapaimagenes").className = "ficha-auto-imagenes-solapa-on";
			document.getElementById('fichaimagenes').style.display='block';
	}
}

</script>

<div class="ficha-auto-wrapper">
	<div class="title">
		<img src="assets/images/ficha/titulo_catalogo_avanzado.gif" border="0">
		<!--<span>Cat&aacute;logo de autos Okm.</span>-->
	</div>
	<div class="ficha-auto-subtitulo"> 
	<!--	<div class="subtitle-bg-right"></div> -->
		<div class="subtitle-bg"><span class="subtitulo">Ficha del Auto</span></div>
	<!--	<div class="subtitle-bg-left"> </div>-->
		<div class="subtitle-bg-bottom">
		<? if ($return=='ba')
			echo '<div class="volver-fichas"><span class="volver-auto"><a href="/module.php?app=ficha_formulario">Volver a b&uacute;squeda avanzada&nbsp;&nbsp;&nbsp;</a></span></div>';
		else
			echo '<div class="volver-fichas"><span class="volver-auto"><a href="/module.php?app='.($id_nota?'ficha_notas':'ficha_versiones').$allparams.'">Volver a las versiones&nbsp;&nbsp;&nbsp;</a></span></div>';
		?>
		</div>
	</div>
  <div class="ficha-auto-content">
	<div class="ficha-auto-img"><img src="imagen-<?=$ficha_auto[0]['id_imagen'];?>-2.jpg"></div>
	<div class="ficha-auto-header">
		<div class="ficha-auto-titulo"><?=$ficha_auto[0][marca];?> <?=$ficha_auto[0][modelo];?></div>
		<!--<div>Tipo de veh&iacute;culo: <?=$ficha_auto[0][tipo_vehiculo];?> </div>-->
		<div class="ficha-auto-version"><b>Versi&oacute;n: </b><?=$ficha_auto[0][version];?> </div>
		<div class="ficha-auto-precio"><b>Precio: </b> <?=$ficha_auto[0][moneda].number_format($ficha_auto[0][precio],0,',','.');?> </div>
	</div>

	<div id="solapatecnica" class="ficha-auto-tecnica-solapa-on"><a onclick="f_activarSolapa('solapatecnica');"><span>Ficha T&eacute;cnica</span></a></div>
	<div id="solapaequipamiento" class="ficha-auto-equipamiento-solapa"><a onclick="f_activarSolapa('solapaequipamiento');"><span>Equipamiento</span></a></div>
	<div id="solapaimagenes" class="ficha-auto-imagenes-solapa"><a onclick="f_activarSolapa('solapaimagenes');"><span>Im&aacute;genes</span></a></div>
	<div class="ficha-auto-antecierre-solapa"> </div>
	<div class="ficha-auto-cierre-solapa"> </div>

	<div id="fichatecnica" style="display:block;" class="ficha-auto-tecnica">
		<table width="680" class="ficha-auto-table-tecnica">
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Combustible</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][combustible];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Cilindrada (Cm3 o Lts.)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][cilindrada];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Cilindros</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][cilindros];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Potencia m&aacute;x. (Cv)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][potencia_maxima];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Torque (Nm/Rpm)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][par_motor_torque];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Posici&oacute;n</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][posicion];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Alimentaci&oacute;n</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][alimentacion];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Motor Short</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][motor_short];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;V&aacute;lvulas</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][valvulas];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Tipo</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][tipo];?>	</td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Marchas</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][marchas];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Tracci&oacute;n</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][traccion];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Velocidad M&aacute;xima (Km/h)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][velocidad_maxima];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Aceleraci&oacute;n 0 a 100 km/h (Seg.)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][aceleracion_0_100];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Consumo urbano (Lts. c/100 Km)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][consumo_urbano];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Consumo interurbano (Lts. c/100 Km)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][consumo_interurbano];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Consumo mixto (Lts. c/100 Km)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][consumo_mixto];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Puertas</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][puertas];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Plazas</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][plazas];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Fila de asientos</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][filas_de_asientos];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Largo/Ancho/Alto/Distancia entre ejes (mm)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][info_ejes];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Peso (Kg.)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][peso];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Capacidad baul (Dm3)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][capacidad_baul];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Capacidad tanque (Lts.)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][capacidad_tanque];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Capacidad carga (Kg.)</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][capacidad_carga];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Frenos delanteros</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][frenos_delanteros];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Frenos traseros</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][frenos_traseros];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Neum&aacute;ticos</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][neumaticos];?></td>
			</tr>
			<tr class="tr-impar">
				<td>&nbsp;&nbsp;Suspensi&oacute;n delantera</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][suspension_delantera];?></td>
			</tr>
			<tr class="tr-par">
				<td>&nbsp;&nbsp;Suspensi&oacute;n trasera</td><td>&nbsp;&nbsp;<?=$ficha_auto[0][suspension_trasera];?></td>
			</tr>
		</table>
	</div>

	<div id="fichaequipamiento" style="display:none;" class="ficha-auto-equipamiento">
		<table width="680" class="ficha-auto-table-equipamiento">
		<?
			$parimpar="tr-impar";
			$seccion=$ficha_equipamiento[0][seccion];
			echo "<tr class=\"tr-seccion\"><td><br>".$seccion."</td></tr>\n";
			foreach ($ficha_equipamiento as $equipamiento) {
				if ($seccion != $equipamiento[seccion]){
					 $seccion=$equipamiento[seccion];
					 echo "<tr class=\"tr-seccion\"><td><br>".$seccion."</td></tr>\n";
					 $parimpar="tr-impar";
				 }
				echo "<tr class=\"".$parimpar."\">";
				echo "<td>&nbsp;&nbsp;".$equipamiento[descripcion];
				if ($equipamiento[valor]!='1') echo ": ".$equipamiento[valor];
				echo "</td>";
				echo "</tr>\n";
				if ($parimpar=='tr-impar')
					 $parimpar='tr-par';
				else
					 $parimpar='tr-impar';
			}
		?>
		</table>
	</div>
	<script type="text/javascript">
	function CacheImage(ImageSource) { // TURNS THE STRING INTO AN IMAGE OBJECT
	   var ImageObject = new Image();
	   ImageObject.src = ImageSource;
	   alert("Cacheando "+ImageSource);
	   return ImageObject;
	}
	</script>
	<div id="fichaimagenes" style="display:none;" class="ficha-auto-imagenes">
		  <div id="gallery">
			<div><span class="title1"><?=$nota['titulo'];?>
			</span></div>
			<div id="imagearea">
			  <div id="image">
				<a href="javascript:slideShow.nav(-1)" class="imgnav " id="previmg"></a>
				<a href="javascript:slideShow.nav(1)" class="imgnav " id="nextimg"></a>
			  </div>
			</div>
			<div id="thumbwrapper">
			  <div id="thumbarea">
				<ul id="thumbs">
				<?
				$arrImgs = array();
				foreach ($ficha_imagenes as $imagen) :
				array_push($arrImgs, 'imagen-'.$imagen['id_imagen'].'-0.jpg');
				?>
				  <li value="<?=$imagen['id_imagen'] ?>"><img src="imagen-<?=$imagen['id_imagen'] ?>-5.jpg" width="179" height="130" alt="" /></li>
				<? endforeach; ?>
				</ul>
			  </div>
			</div>
		  </div>
			<script type="text/javascript">
			var imgid = 'image';
			var imgdir = 'fullsize';
			var imgext = '.jpg';
			var thumbid = 'thumbs';
			var auto = false;
			var autodelay = 2;
			function CacheAll() {
			<? foreach ($arrImgs as $img) print 'CacheImage("'.$img.'");'."\n"; ?>
			}
			</script>
			<script type="text/javascript" src="/assets/scripts/slide.js"></script>
			<div id="hidden_images" style="display: none !important; visibility:hidden !important;">
			<script type="text/javascript">

			function cacheImages() {
				var imgs = new Array();
				<? $i = 0; foreach ($arrImgs as $img) {
					print 'imgs['.$i.'] = "'.$img.'";'."\n";
				} ?>
				var a;
				for (i=0 ; i < imgs.length ; i++ ) {
					a = new Element('img', { 'src': "'"+imgs[i]+"'" });
					insert($('hidden_images'), a);
				}
			}
			</script>
	</div>
	</div>
</div>
