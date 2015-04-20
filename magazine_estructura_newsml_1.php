<?
function newsml_xml($notas){
  error_reporting(0);
  $output = "";
  //$notas = toChars($notas);
  foreach($notas as $nota){
		$predeterminada = "";
		// Se quito el CDATA de "Cuerpo", porque yahoo no lo acepta
		/*$output .= "<Nota>
		<CodigoNota>$nota[id_nota]</CodigoNota>
		<Titulo>$nota[titulo]</Titulo>
		<SubTitulo>$nota[subtitulo]</SubTitulo>
		<Resumen>$nota[copete]</Resumen>
		<Cuerpo>$nota[contenido]</Cuerpo>
		$predeterminada
		<CodigoAutor>$nota[id_autor]</CodigoAutor>
		<Autor>$nota[autor]</Autor>
		<FechaPublicacion>".fecha_format($nota[fecha_creada])."</FechaPublicacion>
		</Nota>";*/
$contenido="";
$cuerpo_parrafos=split("\n",$nota[contenido]);
foreach($cuerpo_parrafos as $parrafo){
	if(!$parrafo) continue;
   	  $contenido.="<p>".$parrafo."</p>";
}
$output.="
  <Catalog Href=\"http://www.vidametro.com/dtd/VidaMetroCatalog.xml\"/>
  <NewsEnvelope>
    <DateAndTime>".fecha_format($nota[fecha_creada],'x')."T000001Z</DateAndTime>
  </NewsEnvelope>
  <NewsItem>
    <Identification>
      <NewsIdentifier>
        <ProviderId>vidametro.com</ProviderId>
        <DateId>".fecha_format($nota[fecha_creada],'x')."</DateId>
        <NewsItemId>".$nota[id_nota]."</NewsItemId>
        <RevisionId PreviousRevision=\"0\" Update=\"N\">1</RevisionId>
        <PublicIdentifier>urn:newsml:vidametro.com:".fecha_format($nota[fecha_creada],'x').":".$nota[id_nota].":1</PublicIdentifier>
      </NewsIdentifier>
      <NameLabel>Vida-metro-noticias</NameLabel>
    </Identification>
    <NewsManagement>
      <NewsItemType FormalName=\"News\"/>
      <FirstCreated>".fecha_format($nota[fecha_creada],'x')."T000001Z</FirstCreated>
      <ThisRevisionCreated>".fecha_format($nota[fecha_creada],'x')."T000001Z</ThisRevisionCreated>
      <Status FormalName=\"Usable\"/>
    </NewsManagement>
    <NewsComponent>
      <NewsLines>
        <HeadLine>".$nota[titulo]."</HeadLine>
        <Slugline>".$nota[copete]."</Slugline>
        <DateLine>BUENOS AIRES (VIDAMETRO)</DateLine>
        <CopyrightLine>© 2011 Metro</CopyrightLine>
      </NewsLines>
      <AdministrativeMetadata>
        <Provider>
          <Party FormalName=\"VIDAMETRO\"/>
        </Provider>
      </AdministrativeMetadata>
      <DescriptiveMetadata>
        <Language FormalName=\"es\"/> 
      </DescriptiveMetadata>
      <ContentItem>
          <MediaType FormalName=\"Text\"/>
          <Format FormalName=\"bcNITF2.5\"/>
          <DataContent>".$contenido."</DataContent>
      </ContentItem>
      </NewsComponent>
  </NewsItem>
";

  }
  $output = str_replace(">\n<", "><", $output);
  return utf8_encode("<?xml version=\"1.0\" encoding=\"utf-8\"?><NewsML>$output</NewsML>");
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
    $datetimeArr = explode(" ", $datetime);
    $date = $datetimeArr[0];
    $dateArr = explode("-", $date);
    $day = $dateArr[2];
    $month = $dateArr[1];
    $year = $dateArr[0];
    return $year.$month.$day;
    // TODO
  }
}

?>
