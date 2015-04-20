<?
function directorym_xml($notas){
  error_reporting(0);
  $output = "";
  //$notas = toChars($notas);
/*  foreach($notas as $nota){

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
*/


  $output = "<DATA>
<COPYRIGHT>Copyright 2010 Conduciendo.com</COPYRIGHT>";
  foreach ($notas as $nota) {
    $output .= "<ARTICLE>
<URL>http://www.conduciendo.com/</URL>
<ID>$nota[id_nota]</ID>
<BODYTEXT>
<p>$nota[copete]</p>
<p>$nota[contenido]</p>
</BODYTEXT>
<LEAD>
$nota[subtitulo]
</LEAD>
<TITLE>$nota[titulo]</TITLE>
<PUBDATE>".fecha_format($nota["fecha_creada"])."</PUBDATE>
<AUTHORNAME>$nota[autor]</AUTHORNAME>
<KEYWORDS>
Conduciendo.com, car, auto, $nota[titulo], $nota[autor]
</KEYWORDS>
</ARTICLE>";
}
  $output .= "</DATA>";
  $output = str_replace(">\n<", "><", $output);
  $output = str_replace(' & ', ' &amp; ', $output);
  return utf8_encode("<?xml version=\"1.0\" encoding=\"utf-8\"?>$output");
}


?>
