<?
function msn_xml($notas){
  error_reporting(0);
  $output = "";

  $output = "<NewsML>
<Catalog Href=\"http://www.conduciendo.com/msnxml/\"/>
<NewsEnvelope>
<DateAndTime>".date("Ymd")."T".date("His")."</DateAndTime>
</NewsEnvelope>";



  //$notas = toChars($notas);
  foreach($notas as $nota){

    $imagenes = "";
    #$indice_imagen = 1;
    #foreach($nota['imagenes'] as $imagen){
    $imagen = $notas['imagenes'][0];
    $imagenes .= "<codigoimagen1>0</codigoimagen1>";
    $imagenes .= "<imagen1></imagen1>";
    $imagenes .= "<leyendaimage1></leyendaimage1>";
    $imagenes .= "<urlimagen1></urlimagen1>";
    $imagenes .= "<codigoimagen2>0</codigoimagen2>";
    $imagenes .= "<imagen2></imagen2>";
    $imagenes .= "<leyendaimage2>Gentileza de la marca</leyendaimage2>";
    $imagenes .= "<urlimagen2></urlimagen2>";
    #$indice_imagen ++;
    #}

    $tipos = "";
    $indice_tipo = 1;
    if (is_array($nota['tipos'])) {
      foreach($nota['tipos'] as $tipo){

        $tipos .= "<codigotipoauto>".$tipo['id_tipo']."</codigotipoauto>";
        $tipos .= "<tipoauto>".$tipo['tipo']."</tipoauto>";
        $indice_tipo ++;
      }
    } else {
      $tipos .= "<codigotipoauto></codigotipoauto>";
      $tipos .= "<tipoauto></tipoauto>";
    }
    $marcas = "";
    $indice_marca = 1;
    if (is_array($nota['marcas'])) {
      foreach($nota['marcas'] as $marca) {
        $marcas .= "<codigomarca>".$marca['id_marca']."</codigomarca>";
        $marcas .= "<marca>".$marca['marca']."</marca>";
        $indice_marca ++;
      }
    } else {
      $marcas .= "<codigomarca></codigomarca>";
      $marcas .= "<marca></marca>";
    }
    $predeterminada = "";
    $predeterminada .="<imagenprincipal>http://conduciendo.com/imagen-".$nota['predeterminada']['id_imagen']."-4.jpg</imagenprincipal>";
    $predeterminada .="<leyendaimagenprincipal>".$nota['predeterminada']['imagen']."</leyendaimagenprincipal>";

$cat = '';
#$catArrNew = array();
if ($nota["categorias"]) {
  foreach($nota["categorias"] as $catArr) {
    if (!in_array($catArr["marca"], $catArrNew))
      $catArrNew[] = $catArr["marca"];
  }
  $cat = ", ".$catArr["marca"];
#  var_dump($nota["categorias"]);
}
  // Se quito el CDATA de "Cuerpo", porque yahoo no lo acepta
$output .= "<NewsItem>
<codigo>$nota[id_nota]</codigo>
<titulo>$nota[titulo]</titulo>
<subtitulo>$nota[subtitulo]</subtitulo>
<resumen>$nota[copete]</resumen>
<cuerpo>$nota[contenido]</cuerpo>
<palabrasclaves>Conduciendo.com, Msn, car, auto, $nota[titulo], $nota[autor]"."$cat</palabrasclaves>
$predeterminada
$marcas
<modelo></modelo>
<modeloano></modeloano>
<leyendalogomarca>Gentileza de la marca</leyendalogomarca>
<urllogomarca>http://conduciendo.com/assets/images/logo.jpg</urllogomarca>
$tipos
<codigoautor>$nota[id_autor]</codigoautor>
<autor>$nota[autor]</autor>
<fechapublicacion>".fecha_format($nota[fecha_creada])."</fechapublicacion>
<logoconduciendo>http://conduciendo.com/assets/images/logo.jpg</logoconduciendo>
$imagenes
</NewsItem>";

/*
  $output .= "<Nota>
<CodigoNota>$nota[id_nota]</CodigoNota>
<Titulo>$nota[titulo]</Titulo>
<SubTitulo>$nota[subtitulo]</SubTitulo>
<Resumen>$nota[copete]</Resumen>
<Cuerpo>$nota[contenido]</Cuerpo>
<PalabrasClaves>Conduciendo.com, Msn, car, auto, $nota[titulo], $nota[autor]</PalabrasClaves>
$predeterminada
$marcas
<Modelo></Modelo>
<ModeloAno></ModeloAno>
<LeyendaLogoMarca>Gentileza de la marca</LeyendaLogoMarca>
<UrlLogoMarca>http://conduciendo.com/assets/images/logo.png</UrlLogoMarca>
$tipos
<CodigoAutor>$nota[id_autor]</CodigoAutor>
<Autor>$nota[autor]</Autor>
<FechaPublicacion>".fecha_format($nota[fecha_creada])."</FechaPublicacion>
<LogoConduciendo>http://conduciendo.com/assets/images/logo.png</LogoConduciendo>
$imagenes
</Nota>";
*/
  }
  $output .= '</NewsML>';
  $output = str_replace(">\n<", "><", $output);
  $output = html_convert_entities($output);
  $output = unentities($output);
  return "<?xml version=\"1.0\" encoding=\"utf-8\"?>$output";
}

?>
