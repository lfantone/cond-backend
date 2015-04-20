<?php class ColSoapWrapper extends ColSoap {
 public function GetFichaXml($intId) {
 $objArgs = func_get_args();
 $objToReturn = parent::GetFichaXml($objArgs[0]);
 return $objToReturn;
}
 public function ConsultarFicha($intId) {
 $objArgs = func_get_args();
 $objToReturn = parent::ConsultarFicha($objArgs[0]);
 return $objToReturn;
}
 public function ProcesarNovedad($intId) {
 $objArgs = func_get_args();
 $objToReturn = parent::ProcesarNovedad($objArgs[0]);
 return $objToReturn;
}
 public function ConsultarNovedades($intCantidad, $strFecha) {
 $objArgs = func_get_args();
 $objToReturn = parent::ConsultarNovedades($objArgs[0], $objArgs[1]);
 return $objToReturn;
}
 }
 ?>