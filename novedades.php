<?php
    $client = new SoapClient('http://conduciendo.com/backend/example_soap.php?wsdl', array('trace' => 1, 'exception' => 1));
    #$strXml = $client->GetFichaXml(32);  
    $strXml = $client->ConsultarNovedades(9999,'2010-02-01 20:09:06');
    #$client->ProcesarNovedad(32);
    #var_dump($client);
    header ("Content-type: text/xml");;
    print($strXml);
    exit;
?>

