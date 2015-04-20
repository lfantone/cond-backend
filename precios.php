<?php
		include("classes/mysql.php");
    // Load the QCubed Development Framework
    require('qcubed/includes/prepend.inc.php');

    /**
     * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
     * of the Autores class.  It uses the code-generated
     * AutoresMetaControl class, which has meta-methods to help with
     * easily creating/defining controls to modify the fields of a Autores columns.
     *
     * Any display customizations and presentation-tier logic can be implemented
     * here by overriding existing or implementing new methods, properties and variables.
     *
     * NOTE: This file is overwritten on any code regenerations.  If you want to make
     * permanent changes, it is STRONGLY RECOMMENDED to move both autores_edit.php AND
     * autores_edit.tpl.php out of this Form Drafts directory.
     *
     * @package My Application
     * @subpackage Drafts
     */
    class PreciosForm extends QForm {
        // Local instance of the AutoresMetaControl
        protected $mctAutores;
				protected $db = null;				

        // Controls for Autores's Data Fields
        protected $objFichasAllArray = array();
        protected $objFichasArray = array();
        protected $arrPrecioInputs;
        protected $arrMonedaInputs;
        protected $intItemsPerPage = 50;
        protected $intStart = 0;
        protected $intEnd = 50;
        protected $intCurrentPage = 0;

        // Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

        // Other Controls
        protected $btnSave;
        protected $btnCancel;
        protected $btnDelete;
        protected $btnPrev;
        protected $btnNext;
        protected $btnMostrar;
        protected $btnOrdenar;
        protected $lstOrdenar;
        protected $lstAscDesc;
        protected $lstBuscarPor;
        protected $btnBuscar;
        protected $txtBuscar;
        protected $lstItemsPerPage;
        protected $arrLinks = array();
        const DOLAR = 'DLS';
        const EURO = 'EUR';
        const PESO = 'ARS';
        const MEX = 'MEX';
        const COL = 'COP';

        public $intIdPais;

        // Create QForm Event Handlers as Needed

//        protected function Form_Exit() {}
//        protected function Form_Load() {}
//        protected function Form_PreRender() {}

        protected function Form_Run() {
            // Security check for ALLOW_REMOTE_ADMIN
            // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
            QApplication::CheckRemoteAdmin();
						$database = new db_mysql();
						$database->connect();
						$this->db = $database;						
						
        }

        protected function Form_Create() {
            if (!$intIdPais = QApplication::QueryString('id_pais'))
                $intIdPais = 2;
            $this->intIdPais = $intIdPais;
            // Use the CreateFromPathInfo shortcut (this can also be done manually using the AutoresMetaControl constructor)
            // MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
            #$this->objFichasAllArray = Fichas::LoadAll(QQ::OrderBy(QQN::Fichas()->IdMarcaObject->Nombre));
            $this->objFichasAllArray = Fichas::QueryArray(QQ::Equal(QQN::Fichas()->IdPais, $intIdPais), QQ::OrderBy(QQN::Fichas()->IdMarcaObject->Nombre));
            foreach ($this->objFichasAllArray as $objFicha) {
                $objInput = new QTextBox($this);
								$strMoneda = $this->getMoneda($objFicha->Id);
								$strPrecio = $objFicha->Precio;
                //$objInput->Name = "Precio de ".$objFicha->IdMarcaObject->Nombre." - ".$objFicha->IdModeloObject->Nombre." - ".$objFicha->IdVersionObject->Nombre;
                $objInput->Text = $strPrecio;

                $objMonInput = new QListBox($this);
                $objMonInput->AddItem(self::DOLAR, self::DOLAR, (self::DOLAR==$strMoneda));
                $objMonInput->AddItem(self::PESO, self::PESO, (self::PESO==$strMoneda));
                $objMonInput->AddItem(self::EURO, self::EURO, (self::EURO==$strMoneda));
                $objMonInput->AddItem(self::MEX, self::MEX, (self::MEX==$strMoneda));
                $objMonInput->AddItem(self::COL, self::COL, (self::COL==$strMoneda));

                $this->arrPrecioInputs[$objFicha->Id] = $objInput;
                $this->arrMonedaInputs[$objFicha->Id] = $objMonInput;
            }


            // Create Buttons and Actions on this Form
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = QApplication::Translate('Save');
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnSave->CausesValidation = true;

            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = QApplication::Translate('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

            $this->btnDelete = new QButton($this);
            $this->btnDelete->Text = QApplication::Translate('Delete');
            $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Autores') . '?'));
            $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
            $this->btnDelete->Visible = $this->mctAutores->EditMode;

            $this->btnPrev = new QButton($this);
            $this->btnPrev->Text = 'Anterior';
            $this->btnPrev->AddAction(new QClickEvent(), new QServerAction('Anterior'));

            $this->btnNext = new QButton($this);
            $this->btnNext->Text = 'Proxima';
            $this->btnNext->AddAction(new QClickEvent(), new QServerAction('Proxima'));

            $this->btnMostrar = new QButton($this);
            $this->btnMostrar->Text = 'Aplicar';
            $this->btnMostrar->AddAction(new QClickEvent(), new QServerAction('ChangeItemsPerPage'));

            $this->btnOrdenar = new QButton($this);
            $this->btnOrdenar->Text = 'Ordenar';
            $this->btnOrdenar->AddAction(new QClickEvent(), new QServerAction("OrderItems"));

            $this->lstOrdenar = new QListBox($this);
            $this->lstOrdenar->Name = "Ordenar por:";
            $this->lstOrdenar->AddItem("Marca","Marca");
            $this->lstOrdenar->AddItem("Modelo","Modelo");
            $this->lstOrdenar->AddItem("Version","Version");
            //$this->lstOrdenar->AddItem("Precio","Precio");
            $this->lstOrdenar->AddItem("Id","Id");
            $this->lstOrdenar->AddItem("Estado","Estado");

            $this->lstAscDesc = new QListBox($this);
            $this->lstAscDesc->Name = "Ascendente o descendente:";
            $this->lstAscDesc->AddItem("Asc","Asc");
            $this->lstAscDesc->AddItem("Desc","Desc");

            $this->btnBuscar = new QButton($this);
            $this->btnBuscar->Text = 'Buscar';
            $this->btnBuscar->AddAction(new QClickEvent(), new QServerAction("SearchItems"));

            $this->lstBuscarPor = new QListBox($this);
            $this->lstBuscarPor->Name = "Buscar por:";
            $this->lstBuscarPor->AddItem("Marca","Marca");
            $this->lstBuscarPor->AddItem("Modelo","Modelo");
            $this->lstBuscarPor->AddItem("Version","Version");
            $this->lstBuscarPor->AddItem("Id","Id");

            $this->txtBuscar = new QTextBox($this);
            $this->txtBuscar->CssClass .= ' goright';
            //$this->txtBuscar->

            $this->lstItemsPerPage = new QListBox($this);
            $this->lstItemsPerPage->Name = "Precios por pagina";
            $this->lstItemsPerPage->AddItem(1);
            for ($i=50;$i<1000;$i+=50) {
                $this->lstItemsPerPage->AddItem($i, $i, ($i==$this->intItemsPerPage));
            }
            #$this->lstItemsPerPage->AddAction(new QClickEvent(), new QServerAction('ChangeItemsPerPage'));

            $this->CrearLinks();

            $this->AplicarFiltros();

        }

        public function CrearLinks() {
            $this->arrLinks = array();
            for($i=0;$i<count($this->objFichasAllArray)/$this->intItemsPerPage;$i++) {
                $objLink = new QButton($this);
                $objLink->Text = ($i+1);
                $objLink->ActionParameter = $i;
                $objLink->AddAction(new QClickEvent(), new QServerAction('IrAPagina'));
                array_push($this->arrLinks, $objLink);
            }
        }

        public function SearchItems($strFormId, $strControlId, $strParameter) {
            $this->intCurrentPage = 0;
            $this->intStart = 0;
            $this->intEnd = $this->intItemsPerPage;
            switch ($this->lstBuscarPor->SelectedValue) {
                case "Marca":
                    $objCond = QQ::Like(QQN::Fichas()->IdMarcaObject->Nombre, '%'.$this->txtBuscar->Text.'%');
                break;
                case "Modelo":
                    $objCond = QQ::Like(QQN::Fichas()->IdModeloObject->Nombre, '%'.$this->txtBuscar->Text.'%');
                break;
                case "Version":
                    $objCond = QQ::Like(QQN::Fichas()->IdVersionObject->Nombre, '%'.$this->txtBuscar->Text.'%');
                break;
                case "Id":
                    $objCond = QQ::Like(QQN::Fichas()->Id, '%'.$this->txtBuscar->Text.'%');
                break;
            }
            $objCondition = QQ::AndCondition(QQ::Equal(QQN::Fichas()->IdPais, $this->intIdPais), $objCond);
            $this->objFichasAllArray = Fichas::QueryArray($objCondition);
            $this->AplicarFiltros();
        }

        public function OrderItems($strFormId, $strControlId, $strParameter) {
            $this->intCurrentPage = 0;
            $this->intStart = 0;
            $this->intEnd = $this->intItemsPerPage;
            switch ($this->lstOrdenar->SelectedValue) {
                case "Marca":
                    $objOrderBy = QQ::OrderBy(QQN::Fichas()->IdMarcaObject->Nombre, ($this->lstAscDesc->SelectedValue == "Asc"));
                break;
                case "Modelo":
                    $objOrderBy = QQ::OrderBy(QQN::Fichas()->IdModeloObject->Nombre, ($this->lstAscDesc->SelectedValue == "Asc"));
                break;
                case "Version":
                    $objOrderBy = QQ::OrderBy(QQN::Fichas()->IdVersionObject->Nombre, ($this->lstAscDesc->SelectedValue == "Asc"));
                break;
                case "Precio":
                    $objOrderBy = QQ::OrderBy(QQN::Fichas()->Precio, ($this->lstAscDesc->SelectedValue == "Asc"));
                break;
                case "Id":
                    $objOrderBy = QQ::OrderBy(QQN::Fichas()->Id, ($this->lstAscDesc->SelectedValue == "Asc"));
                break;
                case "Estado":
                    $objOrderBy = QQ::OrderBy(QQN::Fichas()->IdEstadoType, ($this->lstAscDesc->SelectedValue == "Asc"));
                break;
            }
            $this->objFichasAllArray = Fichas::LoadAll($objOrderBy);
            $this->AplicarFiltros();
        }

        public function ChangeItemsPerPage($strFormId, $strControlId, $strParameter) {
            $this->intItemsPerPage = $this->lstItemsPerPage->SelectedValue;
            $this->intCurrentPage = 0;
            $this->intStart = 0;
            $this->intEnd = $this->intItemsPerPage;
            $this->AplicarFiltros();
        }

        public function CheckConfirmar() {
            return true;
            $blnCambios = false;
            $intC = 0;
            foreach ($this->objFichasArray as $objFicha) {
                $strMonedaPrecioNew = $this->GetMonedaInputById($objFicha->Id)->SelectedValue.$this->GetPrecioInputById($objFicha->Id)->Text;
                $strMonedaPrecioOld = $objFicha->Precio;
                if ($strMonedaPrecioNew !== $strMonedaPrecioOld) {
                    $blnCambios = true;
                    $intC++;
                }
            }
        }

        public function IrAPagina($strFormId, $strControlId, $strParameter) {
            if (!$this->CheckConfirmar())
                return false;
            if (!$strParameter) {
                $this->intCurrentPage = 0;
                $this->intStart = 0;
                $this->intEnd = $this->intItemsPerPage;
            }
            $this->intCurrentPage = $strParameter;
            $this->intStart = ($strParameter*$this->intItemsPerPage);
            $this->intEnd = ($this->intStart+$this->intItemsPerPage);
            $this->AplicarFiltros();
        }

        public function Anterior($strFormId, $strControlId, $strParameter) {
            if (!$this->CheckConfirmar())
                return false;
            $this->intCurrentPage--;
            $this->intStart -= $this->intItemsPerPage;
            $this->intEnd -= $this->intItemsPerPage;
            $this->AplicarFiltros();
        }

        public function Proxima($strFormId, $strControlId, $strParameter) {
            if (!$this->CheckConfirmar())
                return false;
            $this->intCurrentPage++;
            $this->intStart += $this->intItemsPerPage;
            $this->intEnd += $this->intItemsPerPage;
            $this->AplicarFiltros();
        }

        public function AplicarFiltros() {
            $this->objFichasArray = array();
            if ($this->intEnd > count($this->objFichasAllArray)) {
                $this->intEnd = count($this->objFichasAllArray);
            }
            for($i=$this->intStart;$i<$this->intEnd;$i++) {
                array_push($this->objFichasArray, $this->objFichasAllArray[$i]);
            }
            $intIndexLink = ($this->intCurrentPage);
            $this->CrearLinks();
            foreach ($this->arrLinks as $intIdx => $objLink) {
                if ($intIdx == $intIndexLink)
                    $objLink->Enabled = false;
                else
                    $objLink->Enabled = true;
            }
            $this->btnNext->Visible = (($this->intCurrentPage+1) != (count($this->objFichasAllArray)/$this->intItemsPerPage));
            $this->btnPrev->Visible = ($this->intCurrentPage > 0);
        }

        public function GetPrecioInputById($intId) {
            if (array_key_exists($intId, $this->arrPrecioInputs))
                return $this->arrPrecioInputs[$intId];
            return false;
        }

        public function GetMonedaInputById($intId) {
            if (array_key_exists($intId, $this->arrMonedaInputs))
                return $this->arrMonedaInputs[$intId];
            return false;
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

        // Button Event Handlers

        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $intC = 0;
            $arrDiff = '';
            $database = new db_mysql();
            $database->connect();

            foreach ($this->objFichasAllArray as $objFicha) {
							
                $strMonedaNew = $this->GetMonedaInputById($objFicha->Id)->SelectedValue;
								$strPrecioNew = $this->GetPrecioInputById($objFicha->Id)->Text;								
                $strMonedaOld = $objFicha->Moneda;
								$strPrecioOld = $objFicha->Precio;
																
                if ($strPrecioNew !== $strPrecioOld || $strMonedaNew !== $strMonedaOld) {

										$arrDiff .= "$strPrecioNew $strMonedaNew != $strPrecioOld $strMonedaOld -- ";
                    $objFicha->Precio = $strPrecioNew;
										$objFicha->Moneda = $strMonedaNew;
                    $intC++;


                    // servicios

                    $ficha_sql = "
                        SELECT precio_desde
                        FROM fichas 
                        WHERE id =".$objFicha->Id."
                    ";
                    $ficha = $database->list_assoc($ficha_sql);
                    $precio_desde = $ficha[0]['precio_desde'];
                    $_POST['precio_desde'] = $precio_desde;
                    $objFicha->Save();

                    $objDb = QApplication::$Database[1];
										
										if ($objFicha->Precio!=0)
											$objDb->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objFicha->Id.", '".date("Y-m-d H:i:s")."', 'modificacion')");
										else
											// si el precio es cero lo doy de baja
											$objDb->NonQuery("insert into fichas_info (id_fichas, fecha, accion) values (".$objFicha->Id.", '".date("Y-m-d H:i:s")."', 'baja')");
                    
                }
            }
            #QApplication::DisplayAlert("Se guardo FichasInfo $intidFichasInfo");
            QApplication::DisplayAlert("Se cambiaron $intC precios de esta pagina.");
            #QApplication::DisplayAlert($arrDiff);
            $database->close();
        }

        protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect("/backend/precios.php");
        }
				
			function getMoneda($id) {

					// obtengo moneda sin qcubed

					$database = $this->db;

					$fichas_sql = "
						SELECT f.moneda
							FROM fichas f
							WHERE f.id = " . $id . "
					";

					$fichas = $database->list_assoc($fichas_sql);


					return $fichas[0]['moneda'];


			}
				

    }

    // Go ahead and run this form object to render the page and its event handlers, implicitly using
    // autores_edit.tpl.php as the included HTML template file
    PreciosForm::Run('PreciosForm');
?>
