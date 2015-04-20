<?
function mercadolibre_xml($notas){

	$output = "";
	foreach($notas as $nota){

		$predeterminada = "";
		$predeterminada .="<imagen>http://conduciendo.com/imagen-".$nota['predeterminada']['id_imagen']."-4.jpg</imagen>\r";


		$output .= "<item>
			<codigo>$nota[id_nota]</codigo>
			<titulo>$nota[titulo]</titulo>
			$predeterminada
			<logoBlog>http://conduciendo.com/assets/images/logo.jpjpgg</logoBlog>
			<thumbnail></thumbnail>
			<resumen><![CDATA[$nota[contenido]]]></resumen>
			<fecha>$nota[fecha_creada]</fecha>
			<categoria>ver nota-breve-etc.</categoria>
			<author>Fuente: www.conduciendo.com</author>
			<tags>Conduciendo.com, Mercado Libre, car, auto, $nota[titulo], $nota[autor]</tags>
		</item>";
	
	}
	return "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r<items>$output</items>";
}
?>
