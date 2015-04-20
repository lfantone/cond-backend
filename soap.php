<?php
    $client = new SoapClient('http://conduciendo.com/backend/example_soap.php?wsdl');
    #$client = new SoapClient('http://qcond.local/backend/example_soap.php?wsdl');
    #$strXml = $client->GetXml(32);  
    #$strXml = $client->ConsultarNovedades(5, '2010-03-17 20:09:06');
    print (int)$client->ProcesarNovedad(17);
    #var_dump($client);
    #print $strXml;
?>

