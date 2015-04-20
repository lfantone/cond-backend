<?php


include("classes/mysql.php");



/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class XmlConduciendoPanel {

    protected $objXml;
    protected $intIdFichas;
    protected $intIdPais;

    public function Render($blnDisplayOutput = true) {
        return $this->objXml->Render($blnDisplayOutput);
    }

    public function __construct($objParentObject, $intIdFichas, $strControlId = null, $intIdPais = null) {
        $this->intIdFichas = $intIdFichas;
        
        $this->objXml = new QXmlItem($this);
        $this->objXml->Name = "FichaConduciendo";
        $this->intIdPais = $intIdPais;

        $objFichas = Fichas::LoadById($this->intIdFichas);

        $objClauses = array();
        array($objClauses, QQ::Clause(QQ::OrderBy(QQN::FichasItemValor()->IdItemObject->Seccion)));
        array($objClauses, QQ::Clause(QQ::OrderBy(QQN::FichasItemValor()->IdItemObject->OrdenSeccion)));
        $objFichasItemValorArray = FichasItemValor::QueryArray(
            QQ::AndCondition(QQ::Equal(QQN::FichasItemValor()->IdFichas, $this->intIdFichas), 
                QQ::NotEqual(QQN::FichasItemValor()->IdItem, 233)
            ),
            $objClauses);
        #$objFichasItemValorArray = FichasItemValor::LoadArrayByIdFichas($this->intIdFichas, $objClauses);
        $objFichasItemOrderedArray = array();
        foreach ($objFichasItemValorArray as $objFichasItemValor) {
            $objFichasItemOrderedArray[$objFichasItemValor->IdItemObject->Seccion][] = $objFichasItemValor;
        }

        /*try {
            $objFichas = Fichas::QuerySingle(QQ::AndCondition(
                            QQ::Equal(QQN::Fichas()->Id, $this->intIdFichas),
                            QQ::Equal(QQN::Fichas()->IdEstadoObject->Id, 3)
                            ));
        } catch (QCallerException $e) {
            throw new QCallerException("ERROR: No se encontro la ficha o no esta publicada. Verifique que existe y su estado es publicado.");
        }
         *
         */
				
				/*
        $strMoneda = substr($objFichas->Precio, 0, 3);
        $strPrecio = substr($objFichas->Precio, 3, strlen($objFichas->Precio));
        $strPrecio = str_replace($strMoneda, '', $strPrecio);
        $strPrecio = str_replace('.', '', $strPrecio);
        $strPrecio = preg_replace("/[^\d]+/",'',$strPrecio);
				 */
								
				$strMoneda = $objFichas->Moneda;
        $strPrecio = $objFichas->Precio;
				
        switch ($strMoneda) {
            case 'DLS':
                $strMoneda = 'U&#36;S';
            break;
            case 'ARS':
                $strMoneda = 'AR&#36;';
            break;
            case 'EUR':
                $strMoneda = '&#8364;';
            break;
            case 'MEX':
                $strMoneda = 'M&#36;';
            break;
        }

        $this->objXml->AddChildElement("IdFicha", $objFichas->Id);
        $objNodoMarca = $this->objXml->AddChildElement("Marca");
        $objNodoMarca->AddChildElement("Id", $objFichas->IdMarca);
        $objNodoMarca->AddChildElement("Nombre", htmlentities($objFichas->IdMarcaObject->Nombre, ENT_QUOTES, "ISO-8859-1"));



        $objNodoTipo = $this->objXml->AddChildElement("Tipo");
        $objNodoTipo->AddChildElement("Id", $objFichas->IdTipos);
        switch ($objFichas->IdTipos) {
            case 2:
                $strTipos = "Sedán";
            break;
            case 3:
                $strTipos = "Camioneta";
            break;
            case 4:
                $strTipos = "Familiar";
            break;
            case 5:
                $strTipos = "Convertible";
            break;
            case 6:
                $strTipos = "Camioneta";
            break;
            case 7:
                $strTipos = "Coupé";
            break;
            case 8:
                $strTipos = "Hatchback";
            break;
            case 9:
                $strTipos = "Van/Familiar";
            break;
            case 10:
                $strTipos = "Concept";
            break;
            case 11:
                $strTipos = "Pick Up";
            break;
            case 12:
                $strTipos = "Sedán (Lujo)";
            break;
            case 13:
                $strTipos = "Utilitario";
            break;
        }
        $objNodoTipo->AddChildElement("Nombre", $strTipos);

        $objNodoModelo = $this->objXml->AddChildElement("Modelo");
        $objNodoModelo->AddChildElement("Id", $objFichas->IdModelo);
        $objNodoModelo->AddChildElement("Nombre", $objFichas->IdModeloObject->Nombre);

        $objNodoVersion = $this->objXml->AddChildElement("Version");
        $objNodoVersion->AddChildElement("Id", $objFichas->IdVersion);
        $objNodoVersion->AddChildElement("Nombre", $objFichas->IdVersionObject->Nombre);

        $this->objXml->AddChildElement("IdSeguro", $objFichas->IdSeguro);

        $this->objXml->AddChildElement("Descripcion", $objFichas->Descripcion);
        $this->objXml->AddChildElement("Moneda", $strMoneda);
        $this->objXml->AddChildElement("Precio", $strPrecio);
        $this->objXml->AddChildElement("Anio", $objFichas->Anio);

        $objNodoGarantia = $this->objXml->AddChildElement("Garantia");
        $objNodoGarantia->AddChildElement("Id", "garantia");
        $objNodoGarantia->AddChildElement("Nombre", "Garantia");
        $objNodoGarantia->AddChildElement("Descripcion", "Garantía");
        if (($objFichasItemValorGarantia = FichasItemValor::LoadByIdFichasIdItem($this->intIdFichas, 233))) {
            if ($objFichasItemValorGarantia->Valor == 1)
                $strValor = "Si";
            else
                $strValor = $objFichasItemValorGarantia->Valor;

            $objNodoGarantia->AddChildElement("Valor", $strValor);
        } else {
            $objNodoGarantia->AddChildElement("Valor", "");
        }

        $objNodoEspec =  $this->objXml->AddChildElement("Especificaciones");
        // TECNICA
        $objNodoTecnica = $objNodoEspec->AddChildElement("Tecnica");

        // MOTOR //

        $objNodoMotor = $objNodoTecnica->AddChildElement("Motor");


        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "alimentacion");
        $objNodoItem->AddChildElement("Nombre", "Alimentacion");
        $objNodoItem->AddChildElement("Descripcion", "Alimentación");
        $objNodoItem->AddChildElement("Valor", $objFichas->Alimentacion);

        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "motor_short");
        $objNodoItem->AddChildElement("Nombre", "motor_short");
        $objNodoItem->AddChildElement("Descripcion", "Motor");
        $objNodoItem->AddChildElement("Valor", $objFichas->MotorShort);

        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "combustible");
        $objNodoItem->AddChildElement("Nombre", "Combustible");
        $objNodoItem->AddChildElement("Descripcion", "Combustible");
        //$objNodoCombustible = $objNodoMotor->AddChildElement("Combustible");

        if (preg_match('/diesel|gasoil/i', $objFichas->Combustible)) {
            $objNodoItem->AddChildElement("Valor", "Diesel");
        } elseif (preg_match('/hibrido|híbrido|h&iacute;brido/i', $objFichas->Combustible)) {
            $objNodoItem->AddChildElement("Valor", "H&iacute;brido");
        } else {
            $objNodoItem->AddChildElement("Valor", "Nafta");
        }
        
        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "posicion");
        $objNodoItem->AddChildElement("Nombre", "Posicion");
        $objNodoItem->AddChildElement("Descripcion", "Posición");
        $objNodoItem->AddChildElement("Valor", $objFichas->Posicion);

        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "cilindros");
        $objNodoItem->AddChildElement("Nombre", "Cilindros");
        $objNodoItem->AddChildElement("Descripcion", "Cilindros");
        $objNodoItem->AddChildElement("Valor", $objFichas->Cilindros);

        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "cilindrada");
        $objNodoItem->AddChildElement("Nombre", "Cilindrada");
        $objNodoItem->AddChildElement("Descripcion", "Cilindrada");
        $objNodoItem->AddChildElement("Valor", $objFichas->Cilindrada);
        $objNodoItem->AddChildElement("UnidadDeMedida", "cc");

        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "valvulas");
        $objNodoItem->AddChildElement("Nombre", "Valvulas");
        $objNodoItem->AddChildElement("Descripcion", "Válvulas");
        $objNodoItem->AddChildElement("Valor", $objFichas->Valvulas);

        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "potenciamaxima");
        $objNodoItem->AddChildElement("Nombre", "PotenciaMaxima");
        $objNodoItem->AddChildElement("Descripcion", "Potencia");
        $objNodoItem->AddChildElement("Valor", $objFichas->PotenciaMaxima);
        $objNodoItem->AddChildElement("UnidadDeMedida", "cv");

        $objNodoItem = $objNodoMotor->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "torque");
        $objNodoItem->AddChildElement("Nombre", "Torque");
        $objNodoItem->AddChildElement("Descripcion", "Torque");
        $objNodoItem->AddChildElement("Valor", $objFichas->ParMotorTorque);
        $objNodoItem->AddChildElement("UnidadDeMedida", "nm/rpm");

        //$objNodoMotor->AddChildElement("RelacionDeCompresion", $objFichas->RelacionDeCompresion);
        $objNodoTransmision = $objNodoTecnica->AddChildElement("TransmisionYChasis");

        $objNodoItem = $objNodoTransmision->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "tipo");
        $objNodoItem->AddChildElement("Nombre", "Tipo");
        $objNodoItem->AddChildElement("Descripcion", "Transmisión");

        if (preg_match('/^manual/i', $objFichas->Tipo)) {
            $objNodoItem->AddChildElement("Valor", "Manual");
        } else {
            $objNodoItem->AddChildElement("Valor", "Autom&aacute;tica");
        }
        $objNodoItem->AddChildElement("ValorExtra", $objFichas->Tipo);


        $objNodoItem = $objNodoTransmision->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "marchas");
        $objNodoItem->AddChildElement("Nombre", "Marchas");
        $objNodoItem->AddChildElement("Descripcion", "Marchas");
        $objNodoItem->AddChildElement("Valor", $objFichas->Marchas);

        $objNodoItem = $objNodoTransmision->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "traccion");
        $objNodoItem->AddChildElement("Nombre", "Traccion");
        $objNodoItem->AddChildElement("Descripcion", "Tracción");
        $objNodoItem->AddChildElement("Valor", $objFichas->Traccion);
        //$objNodoDimensionesYChasis->AddChildElement("InfoCajaCarga", $objFichas->InfoCajaCarga);
        //$objNodoDimensionesYChasis->AddChildElement("VolumenCajaCarga", $objFichas->VolumenCajaCarga);
        $objNodoItem = $objNodoTransmision->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "frenosdelanteros");
        $objNodoItem->AddChildElement("Nombre", "FrenosDelanteros");
        $objNodoItem->AddChildElement("Descripcion", "Frenos delanteros");
        $objNodoItem->AddChildElement("Valor", $objFichas->FrenosDelanteros);

        $objNodoItem = $objNodoTransmision->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "frenostraseros");
        $objNodoItem->AddChildElement("Nombre", "FrenosTraseros");
        $objNodoItem->AddChildElement("Descripcion", "Frenos traseros");
        $objNodoItem->AddChildElement("Valor", $objFichas->FrenosTraseros);

        //$this->objXml->AddChildElement("Llantas", $objFichas->Llantas);
        $objNodoItem = $objNodoTransmision->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "suspensiondelantera");
        $objNodoItem->AddChildElement("Nombre", "SuspensionDelantera");
        $objNodoItem->AddChildElement("Descripcion", "Suspensión delantera");
        $objNodoItem->AddChildElement("Valor", $objFichas->SuspensionDelantera);

        $objNodoItem = $objNodoTransmision->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "suspensiontrasera");
        $objNodoItem->AddChildElement("Nombre", "SuspensionTrasera");
        $objNodoItem->AddChildElement("Descripcion", "Suspensión trasera");
        $objNodoItem->AddChildElement("Valor", $objFichas->SuspensionTrasera);

        $objNodoItem = $objNodoTransmision->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "neumaticos");
        $objNodoItem->AddChildElement("Nombre", "Neumaticos");
        $objNodoItem->AddChildElement("Descripcion", "Neumáticos");
        $objNodoItem->AddChildElement("Valor", $objFichas->Neumaticos);

        // PERFORMANCE Y CONSUMO //

        $objNodoPerformance = $objNodoTecnica->AddChildElement("PerformanceYConsumo");

        $objNodoItem = $objNodoPerformance->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "velocidadmaxima");
        $objNodoItem->AddChildElement("Nombre", "VelocidadMaxima");
        $objNodoItem->AddChildElement("Descripcion", "Velocidad máxima");
        $objNodoItem->AddChildElement("Valor", $objFichas->VelocidadMaxima);
        $objNodoItem->AddChildElement("UnidadDeMedida", "km/h");

        $objNodoItem = $objNodoPerformance->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "aceleracion0100");
        $objNodoItem->AddChildElement("Nombre", "Aceleracion0100");
        $objNodoItem->AddChildElement("Descripcion", "Aceleración 0-100 km/h");
        $objNodoItem->AddChildElement("Valor", $objFichas->Aceleracion0100);
        $objNodoItem->AddChildElement("UnidadDeMedida", "seg");

        $objNodoItem = $objNodoPerformance->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "consumourbano");
        $objNodoItem->AddChildElement("Nombre", "ConsumoUrbano");
        $objNodoItem->AddChildElement("Descripcion", "Consumo en ciudad");

        if ($this->intIdPais!= null && $this->intIdPais == 6) {
          
          $objNodoItem->AddChildElement("Valor", $this->to_gallons($objFichas->ConsumoUrbano));
          $objNodoItem->AddChildElement("UnidadDeMedida", "gal / 100 kms");                           
          
        } else {
          
          $objNodoItem->AddChildElement("Valor", $objFichas->ConsumoUrbano);
          $objNodoItem->AddChildElement("UnidadDeMedida", "lts / 100 kms");                 
          
        }

        $objNodoItem = $objNodoPerformance->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "consumointerurbano");
        $objNodoItem->AddChildElement("Nombre", "ConsumoInterurbano");
        $objNodoItem->AddChildElement("Descripcion", "Consumo en ruta");
        
        if ($this->intIdPais!= null && $this->intIdPais == 6) {
          
          $objNodoItem->AddChildElement("Valor", $this->to_gallons($objFichas->ConsumoInterurbano));
          $objNodoItem->AddChildElement("UnidadDeMedida", "gal / 100 kms");                           
          
        } else {
          
          $objNodoItem->AddChildElement("Valor", $objFichas->ConsumoInterurbano);
          $objNodoItem->AddChildElement("UnidadDeMedida", "lts/ 100 kms");
          
        }
        
        $objNodoItem = $objNodoPerformance->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "consumomixto");
        $objNodoItem->AddChildElement("Nombre", "ConsumoMixto");
        $objNodoItem->AddChildElement("Descripcion", "Consumo mixto");
        
        if ($this->intIdPais!= null && $this->intIdPais == 6) {
          
          $objNodoItem->AddChildElement("Valor", $this->to_gallons($objFichas->ConsumoMixto));
          $objNodoItem->AddChildElement("UnidadDeMedida", "gal / 100 kms");                           
          
        } else {
          
          $objNodoItem->AddChildElement("Valor", $objFichas->ConsumoMixto);
          $objNodoItem->AddChildElement("UnidadDeMedida", "lts / 100 kms");
          
        }
        
        //$objNodoPerformance->AddChildElement("EmisionesCo2", $objFichas->EmisionesCo2);
        //$this->objXml->AddChildElement("TipoCarroceria", $objFichas->TipoCarroceria);

        // DIMENSIONES Y CAPACIDADES

        $objNodoDimensionesYChasis = $objNodoTecnica->AddChildElement("DimensionesYCapacidades");

        $objNodoItem = $objNodoDimensionesYChasis->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "puertas");
        $objNodoItem->AddChildElement("Nombre", "Puertas");
        $objNodoItem->AddChildElement("Descripcion", "Puertas");
        $objNodoItem->AddChildElement("Valor", $objFichas->Puertas);

        $objNodoItem = $objNodoDimensionesYChasis->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "plazas");
        $objNodoItem->AddChildElement("Nombre", "Plazas");
        $objNodoItem->AddChildElement("Descripcion", "Plazas");
        $objNodoItem->AddChildElement("Valor", $objFichas->Plazas);

        $objNodoItem = $objNodoDimensionesYChasis->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "filasdeasientos");
        $objNodoItem->AddChildElement("Nombre", "FilasDeAsientos");
        $objNodoItem->AddChildElement("Descripcion", "Filas de asientos");
        $objNodoItem->AddChildElement("Valor", $objFichas->FilasDeAsientos);

        $objNodoItem = $objNodoDimensionesYChasis->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "largoanchoaltodistanciaentreejes");
        $objNodoItem->AddChildElement("Nombre", "LargoAnchoAltoDistanciaEntreEjes");
        $objNodoItem->AddChildElement("Descripcion", "Largo / Ancho / Alto / Distancia entre ejes");
        $objNodoItem->AddChildElement("Valor", $objFichas->InfoEjes);
        $objNodoItem->AddChildElement("UnidadDeMedida", "mm");

        //Largo/Ancho/Alto/Distancia entre ejes
        $objNodoItem = $objNodoDimensionesYChasis->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "peso");
        $objNodoItem->AddChildElement("Nombre", "Peso");
        $objNodoItem->AddChildElement("Descripcion", "Peso");
        $objNodoItem->AddChildElement("Valor", $objFichas->Peso);
        $objNodoItem->AddChildElement("UnidadDeMedida", "kg");

        $objNodoItem = $objNodoDimensionesYChasis->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "capacidadbaul");
        $objNodoItem->AddChildElement("Nombre", "CapacidadBaul");
        $objNodoItem->AddChildElement("Descripcion", "Baúl");
        $objNodoItem->AddChildElement("Valor", $objFichas->CapacidadBaul);
        $objNodoItem->AddChildElement("UnidadDeMedida", "dm3");

        $objNodoItem = $objNodoDimensionesYChasis->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "capacidadtanque");
        $objNodoItem->AddChildElement("Nombre", "CapacidadTanque");
        $objNodoItem->AddChildElement("Descripcion", "Tanque de combustible");
        
        if ($this->intIdPais!= null && $this->intIdPais == 6) {
          
          $objNodoItem->AddChildElement("Valor", $this->to_gallons($objFichas->CapacidadTanque));
          $objNodoItem->AddChildElement("UnidadDeMedida", "gal");                           
          
        } else {
          
          $objNodoItem->AddChildElement("Valor", $objFichas->CapacidadTanque);
          $objNodoItem->AddChildElement("UnidadDeMedida", "lts");
          
        }

        $objNodoItem = $objNodoDimensionesYChasis->AddChildElement("Item");
        $objNodoItem->AddChildElement("Id", "capacidadcarga");
        $objNodoItem->AddChildElement("Nombre", "CapacidadCarga");
        $objNodoItem->AddChildElement("Descripcion", "Capacidad de carga");
        $objNodoItem->AddChildElement("Valor", $objFichas->CapacidadCarga);
        $objNodoItem->AddChildElement("UnidadDeMedida", "kg");

        $objNodoConfortYDiseno = $objNodoEspec->AddChildElement("ConfortYConveniencia");
        foreach ($objFichasItemOrderedArray as $strFichasItemSeccion => $objItemSeccionArray) {
            $objNodoSeccion = $objNodoConfortYDiseno->AddChildElement(QConvertNotation::CamelCaseFromUnderscore($strFichasItemSeccion));
            foreach ($objItemSeccionArray as $objItemSeccion) {
                $objNodoItem = $objNodoSeccion->AddChildElement("Item");
                if ($objItemSeccion->Valor == 1)
                    $strValor = "Si";
                else
                    $strValor = $objItemSeccion->Valor;
                $objNodoItem->AddChildElement("Id", $objItemSeccion->IdItem);
                $objNodoItem->AddChildElement("Nombre", QConvertNotation::CamelCaseFromUnderscore($objItemSeccion->IdItemObject->Nombre));
                $objNodoItem->AddChildElement("Descripcion", $objItemSeccion->IdItemObject->Descripcion);
                $objNodoItem->AddChildElement("Valor", $strValor);
            }
        }

        /*foreach ($objFichasItemValorArray as $objFichasItemValor) {
            if ($objFichasItemValor->Valor == 1)
                $strValor = $objFichasItemValor->IdItemObject->Descripcion;
            else
                $strValor = $objFichasItemValor->Valor;
            $this->objXml->AddChildElement(QConvertNotation::CamelCaseFromUnderscore(str_replace(' ','_',$objFichasItemValor->IdItemObject->Descripcion)), $strValor);
        }*/

        $objFichasImagenesArray = FichasImagenes::LoadArrayByIdFicha($this->intIdFichas);
        $arrIdImagenes = array();
        $intImagenPrincipal = 0;
        foreach ($objFichasImagenesArray as $objFichasImagenes) {
            if ($objFichasImagenes->ImagenPrincipal == 1)
                $intImagenPrincipal = $objFichasImagenes->IdImagen;
            $arrIdImagenes[] = $objFichasImagenes->IdImagen;
        }
        if ($intImagenPrincipal > 0) {
            $this->objXml->AddChildElement("ImagenPrincipal",'http://conduciendo.com/thumbnail.php?id='.$intImagenPrincipal.'&size=6');
        }
        $objXmlItemImagenes = $this->objXml->AddChildElement("Imagenes");
        if (count($arrIdImagenes)) {
            foreach ($arrIdImagenes as $intIdImagen) {
                $objNodoImagen = $objXmlItemImagenes->AddChildElement("Imagen");
                $objNodoImagen->AddChildElement("IdImagen", $intIdImagen);
                $objNodoImagen->AddChildElement("Source",'http://conduciendo.com/thumbnail.php?id='.$intIdImagen);
            }
            //$objImagenesArray = Imagenes::QueryArray(QQ::In(QQN::Imagenes()->Id, $arrIdImagenes));
            //foreach ($objImagenesArray as $objImagenes) {
                //$objXmlItemImagenes->AddChildElement("Imagen",'http://conduciendo.com/backend/thumbnail.php?id='.$objImagenes->Id);
            //}
        }

        $objFichasNotasArray = FichasNotas::LoadArrayByIdFichas($this->intIdFichas);
        $objNotasAsociadas = $this->objXml->AddChildElement("NotasAsociadas");
        if (is_array($objFichasNotasArray)) {
            foreach ($objFichasNotasArray as $objFichasNotas) {
            
                $objNotaAsociada = $objNotasAsociadas->AddChildElement("Nota");
                $objNotaAsociada->AddChildElement("IdNota", $objFichasNotas->IdNota);
                $strTitulo = htmlentities(html_entity_decode($objFichasNotas->IdNotasObject->Titulo));
                $strCopete = htmlentities(html_entity_decode($objFichasNotas->IdNotasObject->Copete));
                $strContenido = htmlentities(html_entity_decode(iconv("UTF-8", "ISO-8859-1", $objFichasNotas->IdNotasObject->Contenido)));
                $objNotaAsociada->AddChildElement("Titulo", $strTitulo);
                $objNotaAsociada->AddChildElement("Copete", $strCopete);
                $objNotaAsociada->AddChildElement("Contenido", $strContenido);
            }
        }

        $objFichasVideosArray = FichasVideos::LoadArrayByIdFicha($this->intIdFichas);
        if (is_array($objFichasVideosArray)) {
            $objVideoAsociado = $this->objXml->AddChildElement("Video");
            foreach ($objFichasVideosArray as $objFichaVideo) {
                $strVideoHtml = sprintf('<object width="395" height="346" type="application/x-shockwave-flash" data="http://conduciendo.com/assets/flash/video_player_full/player_flv_maxi.swf?flv=http://conduciendo.com/uploads/videos/%d.flv" id="video_player" style="visibility: visible;"><param name="menu" value="false"><param name="flashvars" value="autoload=1&amp;showvolume=1&amp;buffer=10&amp;buffermessage=Cargando...&amp;margin=0&amp;width=395&amp;height=346&amp;flv=http://conduciendo.com/uploads/videos/%d.flv&amp;showplayer=always&amp;startimage=http://conduciendo.com/uploads/videos_preview/%d.jpg"></object>', $objFichaVideo->IdVideo, $objFichaVideo->IdVideo, $objFichaVideo->IdVideo);
                $strVideoLink = sprintf('http://conduciendo.com/uploads/videos/%d.flv', $objFichaVideo->IdVideo);
                $objVideoAsociado->AddChildElement("IdVideo", $objFichaVideo->IdVideo);
                $objVideoAsociado->AddChildElement("HtmlVideo", $strVideoHtml);
                $objVideoAsociado->AddChildElement("LinkVideo", $strVideoLink);
            }
        }

        QDateTime::$DefaultFormat = QDateTime::FormatIso;
        $objFichasInfoArray = FichasInfo::QueryArray(QQ::Equal(QQN::FichasInfo()->IdFichas, $this->intIdFichas));
        $strAccion = $strFecha = '';
        if (is_array($objFichasInfoArray)) {
            foreach ($objFichasInfoArray as $objFichasInfo) {
                if ($strFecha < $objFichasInfo->Fecha) {
                    $strFecha = $objFichasInfo->Fecha;
                    $strAccion = $objFichasInfo->Accion;
                }
            }
        } else {
          $strAccion = $objFichasInfo->Accion;
          $strFecha = $objFichasInfo->Fecha;
        }
        $this->objXml->AddChildElement('Accion', $strAccion);
        $this->objXml->AddChildElement('FechaUltimaModificacion', $strFecha);

        $this->objXml->AddChildElement("Disclaimer", "*Datos sujetos a cambios por las terminales y/o importadoras.\n*Los datos y precios no necesariamente serán idénticos a los que se ofrezcan en las concesionarias.\n*Datos suministrados por las marcas.\n*Las fotos son al solo efecto referencial.");
				
				
				// servicios sin usar qcubed

				$database = new db_mysql();
				$database->connect();
				
				
				$servicios_sql = "
					SELECT k.nombre AS kilometro, t.nombre AS tarea
						FROM fichas_servicios fs, servicios_tareas st, kilometros k, tareas t
						WHERE fs.id_ficha = " . $this->intIdFichas . "
							AND fs.id_servicio = st.id_servicio
							AND st.id_kilometro = k.id_kilometro
							AND st.id_tarea = t.id_tarea
						ORDER BY k.id_kilometro, t.nombre
				";
				$servicios = $database->list_assoc($servicios_sql);
				
				$km = null;        
        if (count($servicios)) {
					
						$objXmlItemServicios = $this->objXml->AddChildElement("Servicios");
						
            foreach ($servicios as $servicio) {
														
								if ($km != $servicio['kilometro']) {
									
									$objNodoServicio = $objXmlItemServicios->AddChildElement("Servicio");								
									$objNodoServicio->AddChildElement("Km", $servicio['kilometro']);
									$objNodoTareas = $objNodoServicio->AddChildElement("Tareas");
									
								}			
								
								if ($km == null || $km == $servicio['kilometro']) {
									
									$objNodoTareas->AddChildElement('Tarea',  htmlentities(html_entity_decode($servicio['tarea'])));
									
								}
								
								$km = $servicio['kilometro'];
								
								
            }
        }

				
    }
    
    /*
     * convert liters to gallons
     */
    function to_gallons($number) {
      $gallons = number_format(str_replace(',','.',$number)/3.78541178,2,',','');
      return ($gallons!='0,00'?$gallons:'');
    }
    
}


?>
