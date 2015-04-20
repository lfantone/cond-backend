<?php

include("classes/mysql.php");

// Load the QCubed Development Framework
require('qcubed/includes/prepend.inc.php');

//require ('fichas_imagenes_edit.php');
/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
 * of the Fichas class.  It uses the code-generated
 * FichasMetaControl class, which has meta-methods to help with
 * easily creating/defining controls to modify the fields of a Fichas columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_edit.php AND
 * fichas_edit.tpl.php out of this Form Drafts directory.
 *
 * @package My Application
 * @subpackage Drafts
 */
class FichasEditForm extends QForm {
    public $txtTest;
		protected $db = null;
    protected $lstFichasCargar;
    protected $btnFichasCargar;
    protected $objWaitIcon;
    protected $intIdFichas;
    protected $objCheckBoxListImages;
    protected $txtFiltroImagenes;
    protected $btnMostrarImagenes;
    protected $btnGuardarMostrarXml;
    protected $objCheckBoxListImagesLoaded;
    protected $arrIdImagenes = array();
    protected $lstTipoMonedaPrecio;
    protected $lstImagenPrincipal;
    //protected $objXml;
    protected $btnMostrarXml;
    protected $arrItemsHidden;

    protected $objItemInputArray;
    protected $objItemArray;
    protected $objItemAllArray;
    protected $objItemInputSeccionArray;

    protected $objItemLinksArray;
    protected $objCloseLinkArray;

    protected $lstAsociarVideo;
    protected $lstAsociarNota;
    protected $lstAsociarNotaImagenes;
    protected $pnlRightPanel;

    const DOLAR = 1;
    const EURO = 2;
    const PESO = 3;
    const MEX = 4;
    const COL = 5;

    // Local instance of the FichasMetaControl
    protected $mctFichas;

    // Controls for Fichas's Data Fields
    protected $lblId;
    protected $lstIdMarcaObject;
    protected $lstIdTiposObject;
    protected $lstIdModeloObject;
    protected $lstIdVersionObject;
    protected $lstIdPaisObject;
    protected $txtIdSeguro;
		protected $txtIdServicio;
		protected $txtMoneda;
		
    protected $txtDescripcion;
    protected $txtPrecio;
    protected $txtAnio;
    protected $txtCombustible;
    protected $txtCilindrada;
    protected $txtCilindros;
    protected $txtPotenciaMaxima;
    protected $txtParMotorTorque;
    protected $txtPosicion;
    protected $txtAlimentacion;
    protected $txtMotorShort;
    protected $txtRelacionDeCompresion;
    protected $txtValvulas;
    protected $txtTipo;
    protected $txtMarchas;
    protected $txtTraccion;
    protected $txtVelocidadMaxima;
    protected $txtAceleracion0100;
    protected $txtConsumoUrbano;
    protected $txtConsumoInterurbano;
    protected $txtConsumoMixto;
    protected $txtEmisionesCo2;
    protected $txtTipoCarroceria;
    protected $txtPuertas;
    protected $txtPlazas;
    protected $txtFilasDeAsientos;
    protected $txtInfoEjes;
    protected $txtPeso;
    protected $txtCapacidadBaul;
    protected $txtCapacidadTanque;
    protected $txtInfoCajaCarga;
    protected $txtVolumenCajaCarga;
    protected $txtCapacidadCarga;
    protected $txtFrenosDelanteros;
    protected $txtFrenosTraseros;
    protected $txtLlantas;
    protected $txtNeumaticos;
    protected $txtSuspensionDelantera;
    protected $txtSuspensionTrasera;

    protected $lstIdEstadoObject;

    // Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

    // Other Controls
    protected $btnSave;
    protected $btnSaveAndStay;
    protected $btnDelete;
    protected $btnCancel;
    protected $pnlFichasEditPanel;
    
    protected $strOldEstado;
    public $intIdPais;

    // Create QForm Event Handlers as Needed

    //    protected function Form_Exit() {}
    //    protected function Form_Load() {}
    //    protected function Form_PreRender() {}

    protected function Form_Run() {
    // Security check for ALLOW_REMOTE_ADMIN
    // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
        
				QApplication::CheckRemoteAdmin();
				$database = new db_mysql();
				$database->connect();
				$this->db = $database;

    }

    protected function Form_Create() {

        if (!$intIdPais = QApplication::QueryString('id_pais')) {
            $intIdPais = 2;
        }
        $this->intIdPais = $intIdPais;

        $this->txtTest = new QCheckBoxListOrTextBox($this);
        $this->txtTest->Name = "txtTest";

        if (QApplication::QueryString('intId')) {
            $this->intIdFichas = QApplication::QueryString('intId');
        }

        $this->objWaitIcon = new QWaitIcon($this);
        $this->objWaitIcon->Name = "Tenga paciencia, este proceso puede tardar. <br />Cargando...";
        // Use the CreateFromPathInfo shortcut (this can also be done manually using the FichasMetaControl constructor)
        // MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
        $this->mctFichas = FichasMetaControl::CreateFromQueryString($this);

        if ($this->intIdFichas) {
            $this->strOldEstado = $this->mctFichas->Fichas->IdEstadoObject->Nombre;
            $this->intIdPais = $this->mctFichas->Fichas->IdPais;
        }

        // Call MetaControl's methods to create qcontrols based on Fichas's data fields
        $this->lblId = $this->mctFichas->lblId_Create();
        $this->lstIdMarcaObject = $this->mctFichas->lstIdMarcaObject_Create();
        $this->lstIdMarcaObject->AddAction(new QChangeEvent(), new QAjaxAction("ActualizarModelo", $this->objWaitIcon));
        $this->lstIdTiposObject = $this->mctFichas->lstIdTiposObject_Create();
        $this->lstIdModeloObject = $this->mctFichas->lstIdModeloObject_Create();
        $this->lstIdModeloObject->AddAction(new QChangeEvent(), new QAjaxAction("ActualizarVersion", $this->objWaitIcon));
        $this->lstIdVersionObject = $this->mctFichas->lstIdVersionObject_Create();
        $this->lstIdPaisObject = $this->mctFichas->lstIdPaisObject_Create();
        $this->txtIdSeguro = $this->mctFichas->txtIdSeguro_Create();
				$this->txtIdServicio = $this->mctFichas->txtIdServicio_Create();;
				$this->txtMoneda = $this->mctFichas->txtMoneda_Create();;
        $this->txtDescripcion = $this->mctFichas->txtDescripcion_Create();
        $this->txtPrecio = $this->mctFichas->txtPrecio_Create();
        $this->txtAnio = $this->mctFichas->txtAnio_Create();
        $this->txtCombustible = $this->mctFichas->txtCombustible_Create();
        $this->txtCilindrada = $this->mctFichas->txtCilindrada_Create();
        $this->txtCilindros = $this->mctFichas->txtCilindros_Create();
        $this->txtPotenciaMaxima = $this->mctFichas->txtPotenciaMaxima_Create();
        $this->txtParMotorTorque = $this->mctFichas->txtParMotorTorque_Create();
        $this->txtPosicion = $this->mctFichas->txtPosicion_Create();
        $this->txtAlimentacion = $this->mctFichas->txtAlimentacion_Create();
        $this->txtMotorShort = $this->mctFichas->txtMotorShort_Create();
        //$this->txtRelacionDeCompresion = $this->mctFichas->txtRelacionDeCompresion_Create();
        $this->txtValvulas = $this->mctFichas->txtValvulas_Create();
        $this->txtTipo = $this->mctFichas->txtTipo_Create();
        $this->txtMarchas = $this->mctFichas->txtMarchas_Create();
        $this->txtTraccion = $this->mctFichas->txtTraccion_Create();
        $this->txtVelocidadMaxima = $this->mctFichas->txtVelocidadMaxima_Create();
        $this->txtAceleracion0100 = $this->mctFichas->txtAceleracion0100_Create();
        $this->txtConsumoUrbano = $this->mctFichas->txtConsumoUrbano_Create();
        $this->txtConsumoInterurbano = $this->mctFichas->txtConsumoInterurbano_Create();
        $this->txtConsumoMixto = $this->mctFichas->txtConsumoMixto_Create();
        //$this->txtEmisionesCo2 = $this->mctFichas->txtEmisionesCo2_Create();
        //$this->txtTipoCarroceria = $this->mctFichas->txtTipoCarroceria_Create();
        $this->txtPuertas = $this->mctFichas->txtPuertas_Create();
        $this->txtPlazas = $this->mctFichas->txtPlazas_Create();
        $this->txtFilasDeAsientos = $this->mctFichas->txtFilasDeAsientos_Create();
        $this->txtInfoEjes = $this->mctFichas->txtInfoEjes_Create();
        $this->txtPeso = $this->mctFichas->txtPeso_Create();
        $this->txtCapacidadBaul = $this->mctFichas->txtCapacidadBaul_Create();
        $this->txtCapacidadTanque = $this->mctFichas->txtCapacidadTanque_Create();
        //$this->txtInfoCajaCarga = $this->mctFichas->txtInfoCajaCarga_Create();
        //$this->txtVolumenCajaCarga = $this->mctFichas->txtVolumenCajaCarga_Create();
        $this->txtCapacidadCarga = $this->mctFichas->txtCapacidadCarga_Create();
        $this->txtFrenosDelanteros = $this->mctFichas->txtFrenosDelanteros_Create();
        $this->txtFrenosTraseros = $this->mctFichas->txtFrenosTraseros_Create();
        //$this->txtLlantas = $this->mctFichas->txtLlantas_Create();
        $this->txtNeumaticos = $this->mctFichas->txtNeumaticos_Create();
        $this->txtSuspensionDelantera = $this->mctFichas->txtSuspensionDelantera_Create();
        $this->txtSuspensionTrasera = $this->mctFichas->txtSuspensionTrasera_Create();

        // de aca en mas son o radio o text

        $this->lstIdPaisObject->Display = false;

        $this->CrearItemsInput();

        // crear array con los Items que existen, links y que aparezca

        //$this->CrearItemLinks();


				$this->txtIdServicio->Text = $this->getIdServicio($this->intIdFichas);
        // despues agregar la opcion de crear nuevos.

        $this->lstIdEstadoObject = $this->mctFichas->lstIdEstadoObject_Create();

        $this->txtPrecio->CssClass .= " precio";
				$moneda = $this->getMoneda();
				
				switch ( $moneda ) {
					case "DLS":
						$intMoneda = self::DOLAR;
						break;
					case "ARS":
						$intMoneda = self::PESO;
						break;
					case "EUR":
						$intMoneda = self::EURO;
						break;
					case "MEX":
						$intMoneda = self::MEX;
						break;
					case "COP":
						$intMoneda = self::COL;
						break;
			
				}
				
				/*
        if (strpos($this->txtPrecio->Text, 'DLS') !== false) {
            $intMoneda = self::DOLAR;
            $this->txtPrecio->Text = str_replace('DLS', '', $this->txtPrecio->Text);
        } elseif (strpos($this->txtPrecio->Text, 'ARS') !== false) {
            $intMoneda = self::PESO;
            $this->txtPrecio->Text = str_replace('ARS', '', $this->txtPrecio->Text);
        } elseif (strpos($this->txtPrecio->Text, 'EUR') !== false) {
            $intMoneda = self::EURO;
            $this->txtPrecio->Text = str_replace('EUR', '', $this->txtPrecio->Text);
        } elseif (strpos($this->txtPrecio->Text, 'MEX') !== false) {
            $intMoneda = self::MEX;
            $this->txtPrecio->Text = str_replace('MEX', '', $this->txtPrecio->Text);
        } elseif (strpos($this->txtPrecio->Text, 'COP') !== false) {
            $intMoneda = self::COL;
            $this->txtPrecio->Text = str_replace('COP', '', $this->txtPrecio->Text);
        }				
				*/

        $this->lstTipoMonedaPrecio = new QListBox($this);
        $this->lstTipoMonedaPrecio->AddItem('DLS', self::DOLAR, ($intMoneda == self::DOLAR));
        $this->lstTipoMonedaPrecio->AddItem('EUR', self::EURO, ($intMoneda == self::EURO));
        $this->lstTipoMonedaPrecio->AddItem('ARS', self::PESO, ($intMoneda == self::PESO));
        $this->lstTipoMonedaPrecio->AddItem('MEX', self::MEX, ($intMoneda == self::MEX));
        $this->lstTipoMonedaPrecio->AddItem('COP', self::COL, ($intMoneda == self::COL));
        $this->lstTipoMonedaPrecio->CssClass .= ' inline smallInput';

        // Create Buttons and Actions on this Form
        $this->btnSave = new QButton($this);
        $this->btnSave->Text = 'Guardar';
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
        $this->btnSave->CausesValidation = true;

        $this->btnSaveAndStay = new QButton($this);
        $this->btnSaveAndStay->Text = 'Guardar y cargar otra';
        $this->btnSaveAndStay->AddAction(new QClickEvent(), new QServerAction('btnSaveAndStay_Click'));
        $this->btnSaveAndStay->CausesValidation = true;

        $this->btnCancel = new QButton($this);
        $this->btnCancel->Text = 'Cancelar';
        $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = 'Borrar';
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction('Esta seguro que desea borrar esta ficha?'));
        $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
        $this->btnDelete->Visible = $this->mctFichas->EditMode;

        $this->lstFichasCargar = new QListBox($this);
        $this->lstFichasCargar->Name = "Elija una ficha para pegar";
        $objFichasArray = Fichas::QueryArray(QQ::Equal(QQN::Fichas()->IdPais, $intIdPais));
        $this->lstFichasCargar->AddItem("--", null);
        foreach ($objFichasArray as $objFicha) {
            $this->lstFichasCargar->AddItem($objFicha->IdMarcaObject->Nombre.' - '.$objFicha->IdModeloObject->Nombre, $objFicha->Id);
        }
        $this->btnFichasCargar = new QButton($this);
        $this->btnFichasCargar->Text = "Cargar Ficha";
        $this->btnFichasCargar->ActionParameter = $this->lstFichasCargar->SelectedValue;
        $this->btnFichasCargar->AddAction(new QClickEvent(), new QAjaxAction("BindFicha", $this->objWaitIcon));

        $this->btnMostrarImagenes = new QButton($this);
        $this->btnMostrarImagenes->Text = 'Mostrar Imagenes';
        $this->btnMostrarImagenes->AddAction(new QClickEvent(), new QAjaxAction('MostrarImagenes'));

        $this->txtFiltroImagenes = new QTextBox($this);
        $this->txtFiltroImagenes->Name = "Filtrar imagenes";
        //$this->txtFiltroImagenes->AddAction(new QClickEvent(), new QAjaxAction(""))

        $this->objCheckBoxListImages = new QCheckBoxListImages($this);
        $this->objCheckBoxListImagesLoaded = new QCheckBoxListImages($this);
        $this->lstImagenPrincipal = new QListBox($this);
        $this->lstImagenPrincipal->AddItem("Seleccione Imagen Principal", null);
        if ($this->intIdFichas) {
            $this->objCheckBoxListImagesLoaded->CssClass .= ' panel  vinculadas';
            //$this->objCheckBoxListImages = new QCheckBoxListImages($this);
            $this->objCheckBoxListImagesLoaded->RepeatDirection = QRepeatDirection::Horizontal;
            $this->objCheckBoxListImagesLoaded->RepeatColumns = 1;
            $this->objCheckBoxListImagesLoaded->CellSpacing = 4;
            //$this->lstIdImagenObject->SelectionMode = QSelectionMode::Multiple;
            $this->objCheckBoxListImagesLoaded->Name = 'Imagenes ya vinculadas';
            //$this->objCheckBoxListImagesLoaded->Required = true;

            $objFichasImagenesArray = FichasImagenes::LoadArrayByIdFicha($this->intIdFichas);
            foreach ($objFichasImagenesArray as $objFichasImagenes) {
                $this->objCheckBoxListImagesLoaded->AddItem($objFichasImagenes->IdImagenObject->Titulo, '/backend/thumbnail.php?id='. $objFichasImagenes->IdImagen.'&size=1', $objFichasImagenes->IdImagen, true);
                $this->lstImagenPrincipal->AddItem($objFichasImagenes->IdImagenObject->Titulo, $objFichasImagenes->IdImagen, $objFichasImagenes->ImagenPrincipal);
                $this->arrIdImagenes[] = $objFichasImagenes->IdImagen;
            }
            /*
            if (is_array($this->arrIdImagenes) && count($this->arrIdImagenes)) {
                $this->arrIdImagenes = array_unique($this->arrIdImagenes);
                $objCondition = QQ::In(QQN::Imagenes()->Id, $this->arrIdImagenes);
                $objImagenesLoadedArray = Imagenes::QueryArray($objCondition);
                foreach ($objImagenesLoadedArray as $objImagenesLoaded) {
                    $this->objCheckBoxListImagesLoaded->AddItem($objImagenesLoaded->Titulo, '/backend/thumbnail.php?id='. $objImagenesLoaded->Id.'&size=1', $objImagenesLoaded->Id, true);
                }
            } else
                $this->arrIdImagenes = array();
            */
        }

        $this->btnMostrarXml = new QButton($this);
        $this->btnMostrarXml->Text = "Generar XML";
        $this->btnMostrarXml->AddAction(new QClickEvent(), new QAjaxAction("GenerateXml"));

        $this->btnGuardarMostrarXml = new QButton($this);
        $this->btnGuardarMostrarXml->Text = "Guardar y generar XML";
        $this->btnGuardarMostrarXml->AddAction(new QClickEvent(), new QAjaxAction("btnSaveAndGenerateXml_Click"));

        $this->lstAsociarNotaImagenes = new QListBox($this);
        $objNotaImagenArray = NotasImagenes::LoadAll();
        $this->lstAsociarNotaImagenes->Name = "Asociar a imagenes de una nota";
        $this->lstAsociarNotaImagenes->AddItem("--", null);

        $this->lstAsociarVideo = new QListBox($this);
        //$objNotaArray = Videos::LoadAll(QQ::Clause(QQ::OrderBy(QQN::Notas()->Titulo)));
        $objVideoArray = Videos::LoadAll(QQ::Clause(QQ::OrderBy(QQN::Videos()->Titulo)));
        $this->lstAsociarVideo->Name = "Asociar a un video";
        $this->lstAsociarVideo->AddItem("--", null);
        if ($this->intIdFichas) {
            $objFichasVideosArray = FichasVideos::LoadArrayByIdFicha($this->intIdFichas);
        }
        foreach ($objVideoArray as $objVideo) {
            if ($this->intIdFichas && $objVideo->Id == $objFichasVideosArray[0]->IdVideo) {
                $blnSelectedVideo = true;
            }
            else
                $blnSelectedVideo = false;
            #$blnSelectedVideo = true;
            $objVideo->Titulo = iconv("ISO-8859-1", "UTF-8", $objVideo->Titulo);
            $this->lstAsociarVideo->AddItem($objVideo->Id . ' - ' .$objVideo->Titulo, $objVideo->Id, $blnSelectedVideo);
        }



        $this->lstAsociarNota = new QListBox($this);
        //$this->lstAsociarNota->SelectionMode = QSelectionMode::Multiple;
        #$this->lstAsociarNota->Rows = 20;
        $objNotaArray = Notas::LoadAll(QQ::Clause(QQ::OrderBy(QQN::Notas()->Titulo)));
        $this->lstAsociarNota->Name = "Asociar a una nota";
        $this->lstAsociarNota->AddItem("--", null);
				
        if ($this->intIdFichas)
            $objNotaFichaArray = FichasNotas::LoadArrayByIdFichas($this->intIdFichas);
        $arrIdNotaFicha = array();
        if (is_array($objNotaFichaArray)) foreach ($objNotaFichaArray as $objNotaFicha)
            $arrIdNotaFicha[] = $objNotaFicha->IdNota;
        $arrIdNotaFicha = array_unique($arrIdNotaFicha);

        foreach ($objNotaArray as $objNota) {
            if ($this->intIdFichas && in_array($objNota->Id, $arrIdNotaFicha)) {
                $blnSelectedNota = true;
            }
            else
                $blnSelectedNota = false;
            $objNota->Titulo = iconv("ISO-8859-1", "UTF-8", $objNota->Titulo);
            $this->lstAsociarNota->AddItem($objNota->Id . ' - ' .$objNota->Titulo, $objNota->Id, $blnSelectedNota);
            $this->lstAsociarNotaImagenes->AddItem($objNota->Id . ' - ' .$objNota->Titulo, $objNota->Id);
        }

        if (QApplication::QueryString('intIdToCopy')) {
            $this->BindFicha(null, null, QApplication::QueryString('intIdToCopy'));
        }

    }

    public function RefreshImagenPrincipal($strFormId, $strControlId, $strParameter) {
        if ($this->objCheckBoxListImagesLoaded->SelectedValues) {
            $objFichasImagenesArray = FichasImagenes::QueryArray(QQ::In(QQN::FichasImagenes()->IdImagen, $this->lstImagenPrincipal->SelectedValues));
            $this->lstImagenPrincipal->RemoveAllItems();
            foreach ($objFichasImagenesArray as $objFichaImagen) {
                $this->lstImagenPrincipal->AddItem($objFichaImagen->IdImagenObject->Titulo, $objFichaImagen->IdImagen, $objFichaImagen->ImagenPrincipal);
            }
            QApplication::DisplayAlert("Refrescando...");
            $this->lstImagenPrincipal->Refresh();
        }
    }

    public function CrearItemsInput() {
        if ($this->intIdFichas) {
            $objFichaItemValorArray = FichasItemValor::QueryArray(QQ::AndCondition(QQ::Equal(QQN::FichasItemValor()->IdFichas, $this->intIdFichas), QQ::Equal(QQN::FichasItemValor()->IdFichasObject->IdPais, $this->intIdPais)));
            if ($objFichaItemValorArray)
            foreach ($objFichaItemValorArray as $objFichaItemValor) {
                $arrIdFichaItem[$objFichaItemValor->IdItem] = $objFichaItemValor;
            }
        }
        #$this->objItemArray = Item::LoadAll(array(QQ::OrderBy(QQN::Item()->OrdenSeccion), QQ::OrderBy(QQN::Item()->OrdenSeccion)));
        $this->objItemArray = Item::QueryArray(QQ::Equal(QQN::Item()->IdPais, $this->intIdPais), array(QQ::OrderBy(QQN::Item()->OrdenSeccion), QQ::OrderBy(QQN::Item()->OrdenSeccion)));
        if ($this->objItemArray)
        foreach ($this->objItemArray as $objItem) {
            switch ($objItem->IdTipoDatoType) {
                case TipoDatoType::checkboxortext:
                //$objCloseLink = new QButton($this);
                //$objCloseLink->Text = 'X';
                //$objCloseLink->CssClass .= ' floatLeft';
                //$objCloseLink->ActionParameter = $objItem->IdItem;
                //$objCloseLink->AddAction(new QClickEvent(), new QAjaxAction("MostrarLinkOcultarInput"));
                    $objInput = new QCheckBoxListOrTextBox($this);
                    $objInput->Name = $objItem->Descripcion;
                    if (is_array($arrIdFichaItem) && in_array($objItem->IdItem, array_keys($arrIdFichaItem))) {
                        if (strlen($arrIdFichaItem[$objItem->IdItem]->Valor) > 1) {
                            $objInput->Text = stripslashes($arrIdFichaItem[$objItem->IdItem]->Valor);
                            $objInput->CheckBoxList->SelectedValue = 1;
                        }
                        if ($arrIdFichaItem[$objItem->IdItem]->Valor == 1) {
                            $objInput->CheckBoxList->SelectedValue = 1;
                        }
                    } else {
                    //if ($this->intIdFichas) {
                    //$objInput->Visible = false;
                    //$this->arrItemsHidden[] = $objItem->IdItem;
                    //} else {
                        $objInput->Visible = true;
                    //}
                    }
                    //array_push($this->objItemArray, $objInput);
                    break;
                default:
                // TODO
                    break;
            }
            $objCloseLink->Visible = $objInput->Visible;
            //$this->objCloseLinkArray[$objInput->ControlId] = $objCloseLink;
            $this->objItemInputSeccionArray[$objItem->Seccion][] = $objInput;
            $this->objItemInputArray[$objItem->IdItem] = $objInput;
            $this->objItemAllArray[$objInput->ControlId] = $objItem;
        }
    }

   public function CrearItemsInputDiffPais($objFichaPegar, $intIdPaisTo) {
        if ($objFichaPegar) {
            $objFichaItemValorArray = FichasItemValor::QueryArray(QQ::AndCondition(QQ::Equal(QQN::FichasItemValor()->IdFichas, $objFichaPegar->Id), QQ::Equal(QQN::FichasItemValor()->IdFichasObject->IdPais, $objFichaPegar->IdPais)));
            if ($objFichaItemValorArray)
            foreach ($objFichaItemValorArray as $objFichaItemValor) {
                $arrIdFichaItem[$objFichaItemValor->IdItemObject->Nombre] = $objFichaItemValor;
            }
        }
#        $arrIdItemToLoad = array();
#        foreach ($arrIdFichaItem as $strNombre => $objFichaItemValor) {
#            if (!in_array($objFichaItemValor->IdItem, $arrIdFichaItem))
#                array_push($arrIdFichaItem, $objFichaItemValor->IdItem);
#        }

        #$this->objItemArray = Item::LoadAll(array(QQ::OrderBy(QQN::Item()->OrdenSeccion), QQ::OrderBy(QQN::Item()->OrdenSeccion)));
        $this->objItemArray = Item::QueryArray(QQ::Equal(QQN::Item()->IdPais, $intIdPaisTo), array(QQ::OrderBy(QQN::Item()->OrdenSeccion), QQ::OrderBy(QQN::Item()->OrdenSeccion)));
        if ($this->objItemArray)
        foreach ($this->objItemArray as $objItem) {
            switch ($objItem->IdTipoDatoType) {
                case TipoDatoType::checkboxortext:
                //$objCloseLink = new QButton($this);
                //$objCloseLink->Text = 'X';
                //$objCloseLink->CssClass .= ' floatLeft';
                //$objCloseLink->ActionParameter = $objItem->IdItem;
                //$objCloseLink->AddAction(new QClickEvent(), new QAjaxAction("MostrarLinkOcultarInput"));
                    $objInput = new QCheckBoxListOrTextBox($this);
                    $objInput->Name = $objItem->Descripcion;
                    if (is_array($arrIdFichaItem) && in_array($objItem->Nombre, array_keys($arrIdFichaItem))) {
                        if (strlen($arrIdFichaItem[$objItem->Nombre]->Valor) > 1) {
                            $objInput->Text = stripslashes($arrIdFichaItem[$objItem->Nombre]->Valor);
                            $objInput->CheckBoxList->SelectedValue = 1;
                        }
                        if ($arrIdFichaItem[$objItem->Nombre]->Valor == 1) {
                            $objInput->CheckBoxList->SelectedValue = 1;
                        }
                    } else {
                    //if ($this->intIdFichas) {
                    //$objInput->Visible = false;
                    //$this->arrItemsHidden[] = $objItem->IdItem;
                    //} else {
                        $objInput->Visible = true;
                    //}
                    }
                    //array_push($this->objItemArray, $objInput);
                    break;
                default:
                // TODO
                    break;
            }
            $objCloseLink->Visible = $objInput->Visible;
            //$this->objCloseLinkArray[$objInput->ControlId] = $objCloseLink;
            $this->objItemInputSeccionArray[$objItem->Seccion][] = $objInput;
            $this->objItemInputArray[$objItem->IdItem] = $objInput;
            $this->objItemAllArray[$objInput->ControlId] = $objItem;
        }
    }

    public function CrearItemLinks() {
    //$objItemArray = Item::LoadAll();
        foreach ($this->objItemArray as $objItem) {
            $objLink = new QButton($this);
            $objLink->HtmlEntities = false;
            $objLink->Text = $objItem->Descripcion;
            $objLink->ActionParameter = $objItem->IdItem;
            $objLink->AddAction(new QClickEvent(), new QAjaxAction("MostrarInputOcultarLink"));
            if (is_array($this->arrItemsHidden) && in_array($objItem->IdItem, $this->arrItemsHidden)) {
                $objLink->Enabled = true;
            } else {
                $objLink->Enabled = false;
            }
            $this->objItemLinksArray[$objItem->IdItem] = $objLink;
        }
    }

    public function MostrarInputOcultarLink($strFormId, $strControlId, $strParameter) {
        if (!$strParameter)
            throw new QCallerException("ERROR: Intenta crear un FichaItemValor sin el IdItem.");

        $this->objItemInputArray[$strParameter]->Visible = true;
        $this->objCloseLinkArray[$this->objItemInputArray[$strParameter]->ControlId]->Visible = true;
        $this->GetControl($strControlId)->Enabled = false;
    //$this->Refresh();
    //foreach ($this->objItemArray as $objItemNew) $objItemNew->Refresh();
    }

    public function MostrarLinkOcultarInput($strFormId, $strControlId, $strParameter) {
        $this->objItemInputArray[$strParameter]->Text = null;
        $this->objItemInputArray[$strParameter]->CheckBoxList->SelectedValue = null;
        $this->objItemInputArray[$strParameter]->Visible = false;
        $this->objCloseLinkArray[$this->objItemInputArray[$strParameter]->ControlId]->Visible = false;
        $this->objItemLinksArray[$strParameter]->Enabled = true;
    }

    public function GetItemArray() {
        return $this->objItemArray;
    }

    public function ActualizarModelo($strFormId, $strControlId, $strParameter) {
        $this->lstIdModeloObject->RemoveAllItems();
        $this->lstIdModeloObject->AddItem("--", null);
 #       if ($this->mctFichas->Fichas->IdPais) {
            $objIdModeloObjectArray = Modelo::QueryArray(QQ::AndCondition(QQ::Equal(QQN::Modelo()->IdMarca, $this->lstIdMarcaObject->SelectedValue), QQ::Equal(QQN::Modelo()->IdPais, $this->intIdPais)));
 #       } else {
 #           $objIdModeloObjectArray = Modelo::LoadArrayByIdMarca($this->lstIdMarcaObject->SelectedValue);
 #       }
        if ($objIdModeloObjectArray) foreach ($objIdModeloObjectArray as $objIdModeloObject) {
                $objListItem = new QListItem(($objIdModeloObject->IdPais == 3 ?'Mex':substr(utf8_encode($objIdModeloObject->IdPaisObject->Nombre),0,3)).' '. $objIdModeloObject->__toString(), $objIdModeloObject->IdModelo);
                if (($this->mctFichas->Fichas->IdModeloObject) && ($this->mctFichas->Fichas->IdModeloObject->IdModelo == $objIdModeloObject->IdModelo))
                    $objListItem->Selected = true;
                $this->lstIdModeloObject->AddItem($objListItem);
            }
        return $this->lstIdModeloObject;
    }

    public function ActualizarVersion($strFormId, $strControlId, $strParameter) {
        $this->lstIdVersionObject->RemoveAllItems();
        $this->lstIdVersionObject->AddItem("--", null);
        $objIdVersionObjectArray = Version::LoadArrayByIdModelo($this->lstIdModeloObject->SelectedValue);
        if ($objIdVersionObjectArray) foreach ($objIdVersionObjectArray as $objIdVersionObject) {
                $objListItem = new QListItem($objIdVersionObject->__toString(), $objIdVersionObject->IdVersion);
                if (($this->mctFichas->Fichas->IdVersionObject) && ($this->mctFichas->Fichas->IdVersionObject->IdVersion == $objIdVersionObject->IdVersion))
                    $objListItem->Selected = true;
                $this->lstIdVersionObject->AddItem($objListItem);
            }
        return $this->lstIdVersionObject;
    }

    public function GenerateXml($strFormId, $strControlId, $strParameter) {
    //ob_end_clean();
    //header("Location: /backend/fichas_xml.php?intId=".$this->intIdFichas);
    //exit;
        QApplication::Redirect('/backend/fichas_xml.php?intId='.$this->intIdFichas);
    }

    public function MostrarImagenes() {
        if ($this->objCheckBoxListImages)
            $this->objCheckBoxListImages->RemoveAllItems();
        if ($this->objCheckBoxListImagesLoaded)
            $this->objCheckBoxListImagesLoaded->RemoveAllItems();
        if (strlen(trim($this->txtFiltroImagenes->Text)) < 3) {
            QApplication::DisplayAlert("El filtro debe contener al menos 3 caracteres");
            return ;
        }
/*
            if ($this->intIdFichas) {


                $objFichasImagenesArray = FichasImagenes::LoadArrayByIdFicha($this->intIdFichas);
                foreach ($objFichasImagenesArray as $objFichasImagenes) {
                    $arrIdImagenes[] = $objFichasImagenes->IdImagen;
                }
                if (count($arrIdImagenes))
                    $arrIdImagenes = array_unique($arrIdImagenes);
                else
                    $arrIdImagenes = array();
            }
 * 
 */
        //$objImagenesArray = Imagenes::LoadAll();
        $objCondition = QQ::Like(QQN::Imagenes()->Titulo, '%'.trim($this->txtFiltroImagenes->Text).'%');
        $objImagenesArray = Imagenes::QueryArray($objCondition, $objOptionalClauses = null);
        $this->objCheckBoxListImages->CssClass .= ' panel';
        //$this->objCheckBoxListImages = new QCheckBoxListImages($this);
        $this->objCheckBoxListImages->RepeatDirection = QRepeatDirection::Horizontal;
        $this->objCheckBoxListImages->RepeatColumns = 1;
        $this->objCheckBoxListImages->CellSpacing = 4;
        //$this->lstIdImagenObject->SelectionMode = QSelectionMode::Multiple;
        $this->objCheckBoxListImages->Name = 'Imagenes';
        //$this->objCheckBoxListImages->Required = true;
        foreach ($objImagenesArray as $objImagenes) {
            if (!$this->arrIdImagenes || !in_array($objImagenes->Id, $this->arrIdImagenes))
                $this->objCheckBoxListImages->AddItem($objImagenes->Titulo, '/backend/thumbnail.php?id='. $objImagenes->Id.'&size=1', $objImagenes->Id, (is_array($this->arrIdImagenes) && in_array($objImagenes->Id, $this->arrIdImagenes)) );
        }
    }


    /**
     * This Form_Validate event handler allows you to specify any custom Form Validation rules.
     * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
     */
    protected function Form_Validate() {
    // By default, we report that Custom Validations passed
        $blnToReturn = true;

        // Custom Validation Rules
        // TODO: Be sure to set $blnToReturn to false if any custom validation fails!

        $blnFocused = false;
        foreach ($this->GetErrorControls() as $objControl) {
        // Set Focus to the top-most invalid control
            if (!$blnFocused) {
                $objControl->Focus();
                $blnFocused = true;
            }
            // Blink on ALL invalid controls
            $objControl->Blink();
        }

        return $blnToReturn;
    }

    public function SaveFichasImagenes() {
    //$this->mctFichas->objFichas->Id;
        if (is_array($this->objCheckBoxListImagesLoaded->SelectedValues) && count($this->objCheckBoxListImagesLoaded->SelectedValues)) {
            foreach ($this->objCheckBoxListImagesLoaded->SelectedValues as $mixValue)
                $objImagenesVinculadas[] = $mixValue;
            $objImagenesVinculadas = array_unique($objImagenesVinculadas);
        }
        $objDatabase = QApplication::$Database[1];
        if ($this->intIdFichas) {
            $intId = $this->intIdFichas;
            $strSubQuery = '';
            if (is_array($objImagenesVinculadas) && count($objImagenesVinculadas)) {
                #$strSubQuery =  " and id_imagen NOT IN (".implode(",", $objImagenesVinculadas).")";
            }
            $objDatabase->NonQuery("delete from fichas_imagenes where id_ficha = ".$objDatabase->SqlVariable($intId) . $strSubQuery);
        } else {
            $intId = $this->mctFichas->Fichas->Id;
        }
        foreach ($this->objCheckBoxListImages->SelectedValues as $mixValue) {
            $objDatabase->NonQuery("insert into fichas_imagenes (id_ficha, id_imagen) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($mixValue).")");
        }
        foreach ($this->objCheckBoxListImagesLoaded->SelectedValues as $mixValue) {
            $objDatabase->NonQuery("insert into fichas_imagenes (id_ficha, id_imagen) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($mixValue).")");
        }
    }

    // Button Event Handlers

    protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
    // Delegate "Save" processing to the FichasMetaControl
			
				$numeric_price = (int)$this->txtPrecio->Text;				
				$string_price  = $this->txtPrecio->Text;
				
        switch ($this->lstTipoMonedaPrecio->SelectedValue) {
            case self::DOLAR:
                $this->txtMoneda->Text = "DLS";
                break;
            case self::PESO:
                $this->txtMoneda->Text = "ARS";
                break;
            case self::EURO:
                $this->txtMoneda->Text = "EUR";
                break;
            case self::MEX:
                $this->txtMoneda->Text = "MEX";
                break;
            case self::COL:
                $this->txtMoneda->Text = "COP";
                break;
        }
				
				//echo $this->txtMoneda->Text;exit;
				
				

        $this->mctFichas->Fichas->Procesada = 0;
        if (!$this->lstIdPaisObject->SelectedValue) {
            $this->lstIdPaisObject->SelectedValue = 2;
        }

        $objDatabase = QApplication::$Database[1];
        $this->mctFichas->SaveFichas();
        if ($this->objCheckBoxListImages) {
            $this->SaveFichasImagenes();
        }
        if ($this->intIdFichas) {
            $intId = $this->intIdFichas;
            $objDatabase->NonQuery("delete from fichas_item_valor where id_fichas = ".$objDatabase->SqlVariable($intId));

        } else {
            $intId = $this->mctFichas->Fichas->Id;
        }

        file_put_contents("error_log.log", "Paso por fichas_item_valor query\n", FILE_APPEND);

        if ($this->objItemInputArray)
        foreach ($this->objItemInputArray as $intIdItem => $objItemInput) {
            if (strlen($objItemInput->Text) > 0) {
                $strToInsert = $objItemInput->Text;
            } elseif ($objItemInput->CheckBoxList->SelectedValue == 1) {
                $strToInsert = 1;
            } else {
                $strToInsert = null;
            }
            if (!is_null($strToInsert))
                $objDatabase->NonQuery("insert into fichas_item_valor (id_fichas, id_item, valor) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($intIdItem).", ".$objDatabase->SqlVariable($strToInsert).")");
        }

        if ($this->lstAsociarNotaImagenes->SelectedValue) {
            $blnImagenPrincipal = false;
            $objNotasImagenesArray = NotasImagenes::LoadArrayByIdNota($this->lstAsociarNotaImagenes->SelectedValue);
            foreach ($objNotasImagenesArray as $objNotasImagenes) {
                if ($objNotasImagenes->Predeterminada == 1 && !$blnImagenPrincipal) {
                    $blnImagenPrincipal = true;
                    $objDatabase->NonQuery("insert into fichas_imagenes (id_ficha, id_imagen, imagen_principal) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($objNotasImagenes->IdImagen).", 1) ");
                } else {
                    $objDatabase->NonQuery("insert into fichas_imagenes (id_ficha, id_imagen) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($objNotasImagenes->IdImagen).") ");
                }
            }
        }
        file_put_contents("error_log.log", "Paso por asociar notas query\n", FILE_APPEND);

        if ($this->lstImagenPrincipal->SelectedValue) {
            $objDatabase->NonQuery("update fichas_imagenes set imagen_principal = NULL where id_ficha = ".$intId);
            $objDatabase->NonQuery("update fichas_imagenes set imagen_principal = 1 where id_imagen = ".$this->lstImagenPrincipal->SelectedValue." and id_ficha = ".$intId);
        } else {
            $objDatabase->NonQuery("update fichas_imagenes set imagen_principal = NULL where id_ficha = ".$intId);
        }

        file_put_contents("error_log.log", "Paso por fichas_item_valor query\n", FILE_APPEND);
        $objDatabase->NonQuery("delete from fichas_notas where id_fichas = ".$objDatabase->SqlVariable($intId));
        if ($this->lstAsociarNota->SelectedValue) {
            #$objDatabase->NonQuery("delete from fichas_notas where id_fichas = ".$objDatabase->SqlVariable($intId));
            //foreach ($this->lstAsociarNota->SelectedValues as $intIdNota) {
                //$objDatabase->NonQuery("insert into fichas_notas (id_fichas, id_nota) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($intIdNota).") ");
            //}
            $objDatabase->NonQuery("insert into fichas_notas (id_fichas, id_nota) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($this->lstAsociarNota->SelectedValue).") ");
        }
        $objDatabase->NonQuery("delete from fichas_videos where id_ficha = ".$objDatabase->SqlVariable($intId));
        if ($this->lstAsociarVideo->SelectedValue) {
            #$objDatabase->NonQuery("delete from fichas_video where id_ficha = ".$objDatabase->SqlVariable($intId));
            //foreach ($this->lstAsociarNota->SelectedValues as $intIdNota) {
                //$objDatabase->NonQuery("insert into fichas_notas (id_fichas, id_nota) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($intIdNota).") ");
            //}
            $objDatabase->NonQuery("insert into fichas_videos (id_ficha, id_video) values (".$objDatabase->SqlVariable($intId).", ".$objDatabase->SqlVariable($this->lstAsociarVideo->SelectedValue).") ");
        }
        file_put_contents("error_log.log", "Paso por fichas_videos query\n", FILE_APPEND);

        if (!$this->lstIdEstadoObject->SelectedName) {
            if (!$this->intIdFichas) {
                $objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('alta').") ");
            } elseif ($numeric_price!=0) {
                $objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('modificacion').") ");
            } else {
								$objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('baja').") ");
						}
        } else {
        switch ($this->lstIdEstadoObject->SelectedName) {
            case 'Borrador':
            case 'Eliminada':
                if (($this->intIdFichas && $this->strOldEstado == 'Publicada') || $numeric_price == 0);
                    $objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('baja').") ");
            break;
            case 'Publicada':
                if ($this->intIdFichas) {
                    if (($this->strOldEstado == 'Eliminada' || $this->strOldEstado == 'Borrador') && $numeric_price!=0)
                        $objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('alta').") ");
                    elseif ($numeric_price!=0) 
                        $objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('modificacion').") ");
										else
												$objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('baja').") ");											
                } elseif ($numeric_price!=0) {
                    $objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('alta').") ");
                } else {
									$objDatabase->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objDatabase->SqlVariable($intId).", NOW(), ".$objDatabase->SqlVariable('baja').") ");																				
								}
            break;
        }
        }

        /** servicios **/

        $database = $this->db;
                    
        $servicios_sql = "
        SELECT fs.id_fichas_servicio,fs.id_servicio
            FROM fichas_servicios fs
            WHERE fs.id_ficha = " . $intId . "                
        ";

        $servicios = $database->list_assoc($servicios_sql);     
        
        //echo $this->strIdServicio;
        //echo $servicios[0]['id_servicio'];
        //var_dump($_POST['id_servicio']);
        

        $id_servicio = $this->txtIdServicio->Text;
        if (!empty($servicios)) {
            // si el id de servicio se cambio desde el combo
            if (isset($_POST['id_servicio']) && $_POST['id_servicio']!="" && $_POST['id_servicio']!=$servicios[0]['id_servicio']) {
                $id_servicio = $_POST['id_servicio'];                               
            }
            $id_fichas_servicio = $servicios[0]['id_fichas_servicio'];
            if ($id_servicio != 0 && $id_servicio != "" ) {
                $database->update("fichas_servicios","id_servicio = ".$objDatabase->SqlVariable($id_servicio), "id_fichas_servicio = $id_fichas_servicio");
                $database->insert("fichas_servicios_tracking","id_servicio = ".$objDatabase->SqlVariable($id_servicio).", id_ficha = " . $intId.", action = 'U|".$id_servicio."'" );                          
            }   
            else {
                $database->query("DELETE FROM fichas_servicios WHERE id_servicio = $id_fichas_servicio");
                $database->insert("fichas_servicios_tracking","id_servicio = ".$objDatabase->SqlVariable($id_fichas_servicio).", id_ficha = " . $intId.", action = 'D|".$id_servicio."'" );
            }
            
        } else {
            if (isset($_POST['id_servicio']) && $_POST['id_servicio']!="" && $_POST['id_servicio']!=$id_servicio) {
                $id_servicio = $_POST['id_servicio'];                               
            }                        
            $database->insert("fichas_servicios","id_servicio = ".$objDatabase->SqlVariable($id_servicio).", id_ficha = " . $intId);
            $database->insert("fichas_servicios_tracking","id_servicio = $id_servicio, id_ficha = " . $intId.", action = 'I|$id_servicio'" );
        }
                            
        $this->txtIdServicio->Text = $id_servicio;        


        /*** fin servicios **/

        file_put_contents("error_log.log", "Paso por estado query\n", FILE_APPEND);

        QApplication::DisplayAlert("Ficha guardada correctamente");
        file_put_contents("error_log.log", "Paso por displayalert query\n", FILE_APPEND);

        $this->intIdFichas = $intId;
				$this->txtPrecio->Text = $numeric_price;
        return $this->intIdFichas;
    //$this->RedirectToListPage();
    }

    protected function btnSaveAndStay_Click($strFormId, $strControlId, $strParameter) {
    // Delegate "Save" processing to the FichasMetaControl
        $this->btnSave_Click($strFormId, $strControlId, $strParameter);
        $this->RedirectToEditPage();
    }

    protected function btnSaveAndGenerateXml_Click($strFormId, $strControlId, $strParameter) {
    // Delegate "Save" processing to the FichasMetaControl
        $intIdFichas = $this->btnSave_Click($strFormId, $strControlId, $strParameter);
        $this->GenerateXml($intIdFichas);
    }

    protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
    // Delegate "Delete" processing to the FichasMetaControl
        $this->mctFichas->DeleteFichas();
        $this->RedirectToListPage();
    }

    protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
        $this->RedirectToListPage();
    }

    // Other Methods

    protected function RedirectToListPage() {
        QApplication::Redirect(__BACKEND_DIR__ . '/fichas_list.php');
    }

    protected function RedirectToEditPage() {
        QApplication::Redirect(__BACKEND_DIR__ . '/fichas_edit.php');
    }

    public function BindFicha($strFormId, $strControlId, $strParameter) {
        if (!$strParameter && !$this->lstFichasCargar->SelectedValue) {
            QApplication::DisplayAlert("Debe elegir una ficha para cargar");
            return ;
        } elseif ($this->lstFichasCargar->SelectedValue > 0) {
            $strParameter = $this->lstFichasCargar->SelectedValue;
        }

        if (!$intIdPais = QApplication::QueryString('id_pais')) {
            $intIdPais = 2;
        } 

        $objFichas = Fichas::LoadById($strParameter);
        $strMoneda = $this->getMoneda();
        //$objFichas->Precio = str_replace($strMoneda, '', $objFichas->Precio);
        switch ($strMoneda) {
            case 'DLS':
                $this->lstTipoMonedaPrecio->SelectedValue = self::DOLAR;
                break;
            case 'EUR':
                $this->lstTipoMonedaPrecio->SelectedValue = self::EURO;
                break;
            case 'MEX':
                $this->lstTipoMonedaPrecio->SelectedValue = self::MEX;
                break;
            case 'COP':
                $this->lstTipoMonedaPrecio->SelectedValue = self::COL;
                break;
            case 'ARS':
                $this->lstTipoMonedaPrecio->SelectedValue = self::PESO;
                break;
        }

        $this->lstIdMarcaObject->SelectedValue = $objFichas->IdMarca;
        $this->lstIdTiposObject->SelectedValue = $objFichas->IdTipos;
        $this->lstIdModeloObject->SelectedValue = $objFichas->IdModelo;
        $this->lstIdVersionObject->SelectedValue = $objFichas->IdVersion;
        $this->lstIdPaisObject->SelectedValue = ($this->intIdPais?$this->intIdPais:$objFichas->IdPais) ;
        $this->txtDescripcion->Text = $objFichas->Descripcion;
				$this->txtMoneda->Text = $objFichas->Moneda;
        $this->txtPrecio->Text = $objFichas->Precio;
        $this->txtAnio->Text = $objFichas->Anio;
        $this->txtCombustible->Text = $objFichas->Combustible;
        $this->txtCilindrada->Text = $objFichas->Cilindrada;
        $this->txtCilindros->Text = $objFichas->Cilindros;
        $this->txtPotenciaMaxima->Text = $objFichas->PotenciaMaxima;
        $this->txtParMotorTorque->Text = $objFichas->ParMotorTorque;
        $this->txtPosicion->Text = $objFichas->Posicion;
        $this->txtAlimentacion->Text = $objFichas->Alimentacion;
        $this->txtMotorShort->Text = $objFichas->MotorShort;
        //$this->txtRelacionDeCompresion->Text = $objFichas->RelacionDeCompresion;
        $this->txtValvulas->Text = $objFichas->Valvulas;
        $this->txtTipo->Text = $objFichas->Tipo;
        $this->txtMarchas->Text = $objFichas->Marchas;
        $this->txtTraccion->Text = $objFichas->Traccion;
        $this->txtVelocidadMaxima->Text = $objFichas->VelocidadMaxima;
        $this->txtAceleracion0100->Text = $objFichas->Aceleracion0100;
        $this->txtConsumoUrbano->Text = $objFichas->ConsumoUrbano;
        $this->txtConsumoInterurbano->Text = $objFichas->ConsumoInterurbano;
        $this->txtConsumoMixto->Text = $objFichas->ConsumoMixto;
        //$this->txtEmisionesCo2->Text = $objFichas->EmisionesCo2;
        //$this->txtTipoCarroceria->Text = $objFichas->TipoCarroceria;
        $this->txtPuertas->Text = $objFichas->Puertas;
        $this->txtPlazas->Text = $objFichas->Plazas;
        $this->txtFilasDeAsientos->Text = $objFichas->FilasDeAsientos;
        $this->txtInfoEjes->Text = $objFichas->InfoEjes;
        $this->txtPeso->Text = $objFichas->Peso;
        $this->txtCapacidadBaul->Text = $objFichas->CapacidadBaul;
        $this->txtCapacidadTanque->Text = $objFichas->CapacidadTanque;
        //$this->txtInfoCajaCarga->Text = $objFichas->InfoCajaCarga;
        //$this->txtVolumenCajaCarga->Text = $objFichas->VolumenCajaCarga;
        $this->txtCapacidadCarga->Text = $objFichas->CapacidadCarga;
        $this->txtFrenosDelanteros->Text = $objFichas->FrenosDelanteros;
        $this->txtFrenosTraseros->Text = $objFichas->FrenosTraseros;
        //$this->txtLlantas->Text = $objFichas->Llantas;
        $this->txtNeumaticos->Text = $objFichas->Neumaticos;
        $this->txtSuspensionDelantera->Text = $objFichas->SuspensionDelantera;
        $this->txtSuspensionTrasera->Text = $objFichas->SuspensionTrasera;

        $this->lstIdEstadoObject->SelectedValue = $objFichas->IdEstado;

        $intIdFichasAnt = $this->intIdFichas;
        $this->intIdFichas = $strParameter;
        $this->objItemArray = null;
        $this->objItemInputArray = null;
        $this->objItemLinksArray = null;
        $this->objItemInputSeccionArray = null;
        //$this->objCloseLinkArray = null;


        if ($this->intIdFichas) {
            $this->objCheckBoxListImagesLoaded->CssClass .= ' panel  vinculadas';
            //$this->objCheckBoxListImages = new QCheckBoxListImages($this);
            $this->objCheckBoxListImagesLoaded->RepeatDirection = QRepeatDirection::Horizontal;
            $this->objCheckBoxListImagesLoaded->RepeatColumns = 1;
            $this->objCheckBoxListImagesLoaded->CellSpacing = 4;
            //$this->lstIdImagenObject->SelectionMode = QSelectionMode::Multiple;
            $this->objCheckBoxListImagesLoaded->Name = 'Imagenes ya vinculadas';
            //$this->objCheckBoxListImagesLoaded->Required = true;

            $objFichasImagenesArray = FichasImagenes::LoadArrayByIdFicha($this->intIdFichas);
            foreach ($objFichasImagenesArray as $objFichasImagenes) {
                $this->objCheckBoxListImagesLoaded->AddItem($objFichasImagenes->IdImagenObject->Titulo, '/backend/thumbnail.php?id='. $objFichasImagenes->IdImagen.'&size=1', $objFichasImagenes->IdImagen, true);
                $this->lstImagenPrincipal->AddItem($objFichasImagenes->IdImagenObject->Titulo, $objFichasImagenes->IdImagen, $objFichasImagenes->ImagenPrincipal);
                $this->arrIdImagenes[] = $objFichasImagenes->IdImagen;
            }
        }


        if ($objFichas->IdPais != $intIdPais)
            $this->CrearItemsInputDiffPais($objFichas, $intIdPais);
        else
            $this->CrearItemsInput();

        // crear array con los Items que existen, links y que aparezca

        //$this->CrearItemLinks();
        if ($this->objItemInputArray)
        foreach ($this->objItemInputArray as $objItemInput) $objItemInput->Refresh();
        //foreach ($this->objItemLinksArray as $objItemLink) $objItemLink->Refresh();
        //foreach ($this->objItemInputSeccionArray as $objItemInputSeccion) $objItemInputSeccion-
        //foreach ($this->objCloseLinkArray as $objCloseLink) $objCloseLink->Refresh();

        $this->intIdFichas = $intIdFichasAnt;


    }
		
		function getMoneda() {
			
				// obtengo moneda sin qcubed
				
				$database = $this->db;
				
				$fichas_sql = "
					SELECT f.moneda
						FROM fichas f
						WHERE f.id = " . $this->intIdFichas . "
				";
				
				$fichas = $database->list_assoc($fichas_sql);
				
				
				return $fichas[0]['moneda'];
			
			
		}
		function getIdServicio($id) {
			
				// servicios sin usar qcubed
				
				$database = $this->db;
				
				$servicios_sql = "
					SELECT fs.id_servicio
						FROM fichas_servicios fs
						WHERE fs.id_ficha = " . $this->intIdFichas . "
				";
				
				$servicios = $database->list_assoc($servicios_sql);
				
				//var_dump($servicios);exit;
				
				return $servicios[0]['id_servicio'];
				
			
			
		}

}


// Go ahead and run this form object to render the page and its event handlers, implicitly using
// fichas_edit.tpl.php as the included HTML template file
FichasEditForm::Run('FichasEditForm');
//  FichasImagenesEditForm::Run('FichasImagenesEditForm');
?>
