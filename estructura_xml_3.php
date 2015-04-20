<?
error_reporting(0);
function uol_xml($notas){

	$output = "";
	foreach($notas as $nota){

		$imagenes = "";
		$indice_imagen = 1;
		foreach($nota['imagenes'] as $imagen){
			$imagenes .= "<imagen width=\"650\" height=\"430\" url=\"http://conduciendo.com/imagen-".$imagen['id_imagen']."-4.jpg\"></imagen>";
			$indice_imagen ++;
		}	
		
		$tipos = "";
		$indice_tipo = 1;
		foreach($nota['tipos'] as $tipo){
			
			$tipos .= "<CodigoTipoAuto>".$tipo['id_tipo']."</CodigoTipoAuto>\r";
			$tipos .= "<TipoAuto>".$tipo['tipo']."</TipoAuto>\r";
			$indice_tipo ++;
		}
		
		$marcas = "";
		$indice_marca = 1;
		foreach($nota['marcas'] as $marca){
			$marcas .= "<marca>".$marca['marca']."</marca>\r";
			$indice_marca ++;
		}
		
		$categorias = "";
		$indice_categoria = 1;
		foreach($nota['categorias'] as $categoria){
			$categorias .= "<categoria><![CDATA[".$categoria['categoria']."]]></categoria>\r";
			$indice_categoria ++;
		}			
			
		$predeterminada = "<destacada width=\"650\" height=\"430\" url=\"http://conduciendo.com/imagen-".$nota['predeterminada']['id_imagen']."-4.jpg\"></destacada>";
		
		if (($timestamp = strtotime($nota['fecha_generada'])) === false) {
			$dia = 0;
			$mes = 0;
			$ano = 0;
		} else {
			$dia = date('j', $timestamp);;
			$mes = date('n', $timestamp);;
			$ano = date('Y', $timestamp);;			
		}		


	$output .= "
	
	<auto id=\"$nota[id_nota]\">
		<fecha>
			<dia>$dia</dia>
			<mes>$mes</mes>
			<anio>$ano</anio>
		</fecha>
		$marca
		<modelo><![CDATA[$nota[titulo]]]></modelo>
		$categorias
		<tipo_nota categoria=\"novedad\">Nota</tipo_nota>
		<multimedia video=\"no\" galeria=\"si\">
			<fotos>
				<destacadas>
					$predeterminada
				</destacadas>
				<galeria>
					$imagenes
				</galeria>
			</fotos>
			<videos></videos>
		</multimedia>
		<nota>
			<volanta><![CDATA[$nota[copete]]]></volanta>
			<titulo><![CDATA[$nota[subtitulo]]]></titulo>
			<descripcion><![CDATA[$nota[descripcion]]]></descripcion>
			<parrafos>
				<parrafo><![CDATA[$nota[contenido]]]></parrafo>
			</parrafos>
			<autor><![CDATA[$nota[autor]]]></autor>
		</nota>
		<fuente><![CDATA[www.conduciendo.com]]></fuente>
	</auto>
	
	
	";
	}
	return "<?xml version=\"1.0\" encoding=\"iso-8859-2\"?>\r<autos>$output</autos>";
}
?>
