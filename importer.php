<?php
// Load the QCubed Development Framework
require('qcubed/includes/prepend.inc.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Fichas class.  It uses the code-generated
 * FichasDataGrid control which has meta-methods to help with
 * easily creating/defining Fichas columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_list.php AND
 * fichas_list.tpl.php out of this Form Drafts directory.
 *
 * @package My Application
 * @subpackage Drafts
 */
class ImporterForm extends QForm {
    public $btnImport;
    public $txtFile;
    public $intCant = 0;
    public $arrFichas = array();
    public $strMsgs = array();
    public $blnDebug;
    public $txtDelim;

    protected function Form_Create() {

        $this->blnDebug = false;

        $this->btnImport = new QButton($this);
        $this->btnImport->Name = "Importar";
        $this->btnImport->Text = "Importar";
        $this->btnImport->AddAction(new QClickEvent(), new QServerAction("Importar"));

        $this->txtFile = new QFileAsset($this);
        $this->txtFile->Name = "Archivo .csv";

        $this->txtDelim = new QTextBox($this);
        $this->txtDelim->Name = "Delimitador de campos";
        $this->txtDelim->Text = ";";

    }

    public function Importar($strFormId, $strControlId, $strParameter) {
        if (!file_exists($this->txtFile->File)) {
            $this->strMsgs[] = "No existe el archivo csv ".$this->txtFile->FileName;
        }
        if (!$this->txtDelim->Text)
            $this->txtDelim->Text = ";";

        $rscHdl = fopen($this->txtFile->File, "r");
        $arrFichas = $arrHeaders = $arrData = $arrRealData = $arrIds = array();
        $intC = 0;
        while (($arrData = fgetcsv($rscHdl, 1000, trim($this->txtDelim->Text))) !== FALSE) {
            if ($intC === 0)
                $arrHeaders = $arrData;
            else {
                foreach ($arrData as $intIdx => $strData) {
                    $arrRealData[$intC][$arrHeaders[$intIdx]] = $strData;
                    if ($arrHeaders[$intIdx] == "id_fichas")
                        $arrIds[] = (int)$strData;
                }
            }
            $intC++;
        }

        $arrFichas = Fichas::QueryArray(QQ::In(QQN::Fichas()->Id, $arrIds));
        foreach ($arrFichas as $objFicha) {
            $this->arrFichas[$objFicha->Id] = $objFicha;
        }

        $this->intCant = $intC - 1;
        $this->strMsgs[] = "Cantidad $this->intCant ";

        foreach ($arrRealData as $intIdx => $arrDatatmp) {
            foreach ($arrDatatmp as $strCol => $strVal) {
                $arrData2[$strCol] = trim($strVal);
            }
            //$this->strMsgs[] = var_export($arrData2, true);
            $objFicha = $this->arrFichas[$arrData2["id_fichas"]];
            if ($arrData2["marca"] != '' && $arrData2["marca"] != $objFicha->IdMarcaObject->Nombre) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo marca '.$objFicha->IdMarca.' '.$objFicha->IdMarcaObject->Nombre.' por '.$arrData2["marca"];
                if (!$this->blnDebug) {
                    $objMarca = Marcas::Load($objFicha->IdMarca);
                    $objMarca->Nombre = $arrData2["marca"];
                    $objMarca->Save();
                }
            }
            if ($arrData2["modelo"] != '' && $arrData2["modelo"] != $objFicha->IdModeloObject->Nombre) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo modelo '.$objFicha->IdModelo.' '.$objFicha->IdModeloObject->Nombre.' por '.$arrData2["modelo"];
                if (!$this->blnDebug) {
                    $objModelo = Modelo::Load($objFicha->IdModelo);
                    $objModelo->Nombre = $arrData2["modelo"];
                    $objModelo->Save();
                }
            }
            if ($arrData2["version"] != '' && $arrData2["version"] != $objFicha->IdVersionObject->Nombre) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo version '.$objFicha->IdVersion.' '.$objFicha->IdVersionObject->Nombre.' por '.$arrData2["version"];
                if (!$this->blnDebug) {
                    $objVersion = Version::Load($objFicha->IdVersion);
                    $objVersion->Nombre = $arrData2["version"];
                    $objVersion->Save();
                }
            }
            /*
            if ($arrData2["cilindrada"] != '' && $arrData2["cilindrada"] != $objFicha->Cilindrada) {
                if ($this->blnDebug)
                    $this->strMsgs[] = 'Reemplazo '.$objFicha->Cilindrada.' por '.$arrData2["cilindrada"];
                else
                    $objFicha->Cilindrada = $arrData2["cilindrada"];
            }
            */
            if ($arrData2["motor_short"] != '' && $arrData2["motor_short"] != $objFicha->MotorShort) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo motor '.$objFicha->MotorShort.' por '.$arrData2["motor_short"];
                if (!$this->blnDebug)
                    $objFicha->MotorShort = $arrData2["motor_short"];
            }

            if ($arrData2["cilindrada"] != '' && $arrData2["cilindrada"] != $objFicha->Cilindrada) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo cilindrada '.$objFicha->Cilindrada.' por '.$arrData2["cilindrada"];
                if (!$this->blnDebug)
                    $objFicha->Cilindrada = $arrData2["cilindrada"];
            }
            if ($arrData2["consumo_urbano"] != '' && $arrData2["consumo_urbano"] != $objFicha->ConsumoUrbano) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo consumo_urbano '.$objFicha->ConsumoUrbano.' por '.$arrData2["consumo_urbano"];
                if (!$this->blnDebug)
                    $objFicha->ConsumoUrbano = $arrData2["consumo_urbano"];
            }
            if ($arrData2["consumo_interurbano"] != '' && $arrData2["consumo_interurbano"] != $objFicha->ConsumoInterurbano) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo consumo_interurbano '.$objFicha->ConsumoInterurbano.' por '.$arrData2["consumo_interurbano"];
                if (!$this->blnDebug)
                    $objFicha->ConsumoInterurbano = $arrData2["consumo_interurbano"];
            }
            if ($arrData2["consumo_mixto"] != '' && $arrData2["consumo_mixto"] != $objFicha->ConsumoMixto) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo consumo_mixto '.$objFicha->ConsumoMixto.' por '.$arrData2["consumo_mixto"];
                if (!$this->blnDebug)
                    $objFicha->ConsumoMixto = $arrData2["consumo_mixto"];
            }
            if ($arrData2["combustible"] != '' && $arrData2["combustible"] != $objFicha->Combustible) {
                $this->strMsgs[] = $objFicha->Id.' Reemplazo combustible '.$objFicha->Combustible.' por '.$arrData2["combustible"];
                if (!$this->blnDebug)
                    $objFicha->Combustible = $arrData2["combustible"];
            }
        }

        foreach ($this->arrFichas as $objFicha) {
            $objFicha->Save();
        }
    }


}

ImporterForm::Run('ImporterForm');

?>