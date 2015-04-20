<?php
require('qcubed/includes/prepend.inc.php');
require ('XmlConduciendoPanel.class.php');
/*
 */
class ColSoap extends QSoapService {

    /**
     * Devuelve el xml generado de la ficha de id $intId
     *
     * @param int $intId
     * @return string
     */
    public function GetFichaXml($intId) {
        if (!($objFicha = Fichas::Load($intId)))
            return "ERROR: No existe la Ficha de Id $intId";
        // colombia es el pais con ID 6
        $objXmlConduciendoPanel = new XmlConduciendoPanel($this, $intId, null, 6);
        return sprintf("%s", $objXmlConduciendoPanel->Render(false));
    }

    /**
     * Devuelve el xml generado de la ficha de id $intId
     *
     * @param int $intId
     * @return string
     */
    public function ConsultarFicha($intId) {
        return $this->GetFichaXml($intId);
    }

    /**
    * Marca la novedad como procesada, para que no sea devuelta por ConsultarNovedades la
    * proxima vez que busquemos novedades.
    *
    * @param int $intId
    * @return boolean
    */
    public function ProcesarNovedad($intId) {
        if ($objFicha = Fichas::Load($intId)) {
            $objFicha->Procesada = 1;
            $objFicha->Save();
            return true;
        }
        return false;
    }

    /**
     * Consultar novedades recibe como parametro una fecha, y devuelve todas las novedades
     * desde esa fecha en adelante.
     * Devuelve un xml (string), con el Id de la ficha, el Tipo de novedad y la Fecha de la misma.
     * De este modo, con todos los Ids de las fichas, se puede llamar a ConsultarFicha
     * y obtener el xml de cada una de las fichas.
     *
     * @param int $intCantidad
     * @param string $strFecha
     * @return string
     */
    public function ConsultarNovedades($intCantidad, $strFecha) {
        if (!preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}\s[0-9]{2}:[0-9]{2}:[0-9]{2}/', $strFecha))
            return ("ERROR: El formato de fecha es erroneo, debe ser YYYY-MM-DD HH:mm:ss");
        if (strcmp(date("Y-m-d H:i:s"), $strFecha) < 0) {
            return "ERROR: La fecha no puede ser mayor a NOW()";
        }

        try {
            $objDatabase = QApplication::$Database[1];
            $objDbResult = $objDatabase->Query("SELECT f.id, f2.accion, f2.fecha, UNIX_TIMESTAMP(f2.fecha) as fecha_unix FROM fichas_info f2 INNER JOIN fichas f on f.id = f2.id_fichas ".
                    " WHERE fecha >= ".$objDatabase->SqlVariable($strFecha)." AND ( procesada IS NULL or procesada = 0 ) AND id_pais = 6 ". #AND f2.accion != 'baja'
                    " ORDER BY f.id DESC , f2.id_fichas_info DESC"
                    );
            $arrFichasInfo = array();
            $arrFichasIds = array();
            $arrFichasIdsBaja = array();
            #error_reporting(0);
            if ($objDbResult->CountRows()) {
                while ($mixRow = $objDbResult->FetchArray()) {
                    if (!in_array($mixRow[0], $arrFichasIds)/* && $mixRow[1] != "baja"*/) {
                        array_push($arrFichasIds, $mixRow[0]);
                        array_push($arrFichasInfo, array("IdFicha" => $mixRow[0], "TipoNovedad" => $mixRow[1], "FechaNovedad" => $mixRow[2]));
                    }
                    if ($mixRow[1] == "baja") {
                        array_push($arrFichasIdsBaja, $mixRow[0]);
                    }
                    $arrFichasIds = array_unique($arrFichasIds);
                    $arrFichasIdsBaja = array_unique($arrFichasIdsBaja);
                    // si el array ya tiene la cantidad requerida salgo del loop
                    if (count($arrFichasInfo)==$intCantidad) break;

                }
                /*foreach ($arrFichasInfo as $idx => $arrInfo) {
                    if (in_array($arrInfo["IdFicha"], $arrFichasIdsBaja)) {
                        unset($arrFichasInfo[$idx]);
                    }
                }*/
                #return implode(",", $arrFichasInfo2);
/*
                      if ($mixRow[3] > $arrTmp[$mixRow[0]]["fecha"]) {
                          $arrTmp[$mixRow[0]]["fecha"] = $mixRow[3];
                          $arrFichasInfo[$mixRow[0]] = array("IdFicha" => $mixRow[0], "TipoNovedad" => $mixRow[1], "FechaNovedad" => $mixRow[2]);
                      }
                    }
                }
*/
            } else {
                return ("WARNING: No existen mas novedades sin procesar a partir de $strFecha");
            }
            #error_reporting(63);
            $objXml = new QXmlItem($this);
            $objXml->Name = "Novedades";
            foreach ($arrFichasInfo as $arrInfo) {
                $objNodoNovedad = $objXml->AddChildElement("Novedad");
                foreach ($arrInfo as $strName => $strValue) {
                    $objNodoNovedad->AddChildElement($strName, $strValue);
                }
            }
            return $objXml->Render(false);
        } catch (Exception $e) {
            return "ERROR: Ocurrio un error intentando traer las novedades";
        }


    }


}
// We need to RUN the WebService (just like how we run a QForm)
//ColSoap::Run('ColSoap', 'http://conduciendo.com/backend/col_soap.php');
?>
