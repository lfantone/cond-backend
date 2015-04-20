<?
function yahoo_xml($notas){
  error_reporting(0);
  $output = "";
  //$notas = toChars($notas);
  foreach($notas as $nota){

    $imagenes = "";
    #$indice_imagen = 1;
    #foreach($nota['imagenes'] as $imagen){
    $imagen = $notas['imagenes'][0];
    $imagenes .= "<CodigoImagen1>0</CodigoImagen1>";
    $imagenes .= "<Imagen1></Imagen1>";
    $imagenes .= "<LeyendaImage1></LeyendaImage1>";
    $imagenes .= "<UrlImagen1></UrlImagen1>";
    $imagenes .= "<CodigoImagen2>0</CodigoImagen2>";
    $imagenes .= "<Imagen2></Imagen2>";
    $imagenes .= "<LeyendaImage2>Gentileza de la marca</LeyendaImage2>";
    $imagenes .= "<UrlImagen2></UrlImagen2>";
    #$indice_imagen ++;
    #}
 
    $tipos = "";
    $indice_tipo = 1;
    if (is_array($nota['tipos'])) {
      foreach($nota['tipos'] as $tipo){
        
        $tipos .= "<CodigoTipoAuto>".$tipo['id_tipo']."</CodigoTipoAuto>";
        $tipos .= "<TipoAuto>".$tipo['tipo']."</TipoAuto>";
        $indice_tipo ++;
      }
    } else {
      $tipos .= "<CodigoTipoAuto/>";
      $tipos .= "<TipoAuto/>";
    }
    $marcas = "";
    $indice_marca = 1;
    if (is_array($nota['marcas'])) {
      foreach($nota['marcas'] as $marca){
        
        $marcas .= "<CodigoMarca>".$marca['id_marca']."</CodigoMarca>";
        $marcas .= "<Marca>".$marca['marca']."</Marca>";
        $indice_marca ++;
      } 
    } else {
        $marcas .= "<CodigoMarca/>";
        $marcas .= "<Marca/>";
    }
    $predeterminada = "";
    $predeterminada .="<ImagenPrincipal>http://conduciendo.com/imagen-".$nota['predeterminada']['id_imagen']."-4.jpg</ImagenPrincipal>";
    $predeterminada .="<LeyendaImagenPrincipal>".$nota['predeterminada']['imagen']."</LeyendaImagenPrincipal>";

  // Se quito el CDATA de "Cuerpo", porque yahoo no lo acepta
  $output .= "<Nota>
<CodigoNota>$nota[id_nota]</CodigoNota>
<Titulo>$nota[titulo]</Titulo>
<SubTitulo>$nota[subtitulo]</SubTitulo>
<Resumen>$nota[copete]</Resumen>
<Cuerpo>$nota[contenido]</Cuerpo>
<PalabrasClaves>Conduciendo.com, Yahoo, car, auto, $nota[titulo], $nota[autor]</PalabrasClaves>
$predeterminada
$marcas
<Modelo></Modelo>
<ModeloAno></ModeloAno>
<LeyendaLogoMarca>Gentileza de la marca</LeyendaLogoMarca>
<UrlLogoMarca>http://conduciendo.com/assets/images/logo.jpg</UrlLogoMarca>
$tipos
<CodigoAutor>$nota[id_autor]</CodigoAutor>
<Autor>$nota[autor]</Autor>
<FechaPublicacion>".fecha_format($nota[fecha_creada])."</FechaPublicacion>
<LogoConduciendo>http://conduciendo.com/assets/images/logo.jpg</LogoConduciendo>
$imagenes
</Nota>";
  }
  $output = str_replace(">\n<", "><", $output);
  return utf8_encode("<?xml version=\"1.0\" encoding=\"utf-8\"?><Notas>$output</Notas>");
}

function fecha_format($datetime, $format = null) {
  if (is_null($format)) { // format = DD/MM/AAAA
    $datetimeArr = explode(" ", $datetime);
    $date = $datetimeArr[0];
    $dateArr = explode("-", $date);
    $day = $dateArr[2];
    $month = $dateArr[1];
    $year = $dateArr[0];
    return $day.'/'.$month.'/'.$year;
  } else {
    // TODO
  }
}

?>
