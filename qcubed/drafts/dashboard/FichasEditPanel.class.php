<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
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
	class FichasEditPanel extends QPanel {
		// Local instance of the FichasMetaControl
		protected $mctFichas;

		// Controls for Fichas's Data Fields
		public $lblId;
		public $lstIdMarcaObject;
		public $lstIdTiposObject;
		public $lstIdModeloObject;
		public $lstIdVersionObject;
		public $lstIdPaisObject;
		public $txtIdSeguro;
		public $txtDescripcion;
		public $txtPrecio;
		public $txtAnio;
		public $txtCombustible;
		public $txtCilindrada;
		public $txtCilindros;
		public $txtPotenciaMaxima;
		public $txtParMotorTorque;
		public $txtPosicion;
		public $txtAlimentacion;
		public $txtMotorShort;
		public $txtValvulas;
		public $txtTipo;
		public $txtMarchas;
		public $txtTraccion;
		public $txtVelocidadMaxima;
		public $txtAceleracion0100;
		public $txtConsumoUrbano;
		public $txtConsumoInterurbano;
		public $txtConsumoMixto;
		public $txtPuertas;
		public $txtPlazas;
		public $txtFilasDeAsientos;
		public $txtInfoEjes;
		public $txtPeso;
		public $txtCapacidadBaul;
		public $txtCapacidadTanque;
		public $txtCapacidadCarga;
		public $txtFrenosDelanteros;
		public $txtFrenosTraseros;
		public $txtNeumaticos;
		public $txtSuspensionDelantera;
		public $txtSuspensionTrasera;
		public $lstIdEstadoObject;
		public $chkProcesada;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'FichasEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the FichasMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFichas = FichasMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on Fichas's data fields
			$this->lblId = $this->mctFichas->lblId_Create();
			$this->lstIdMarcaObject = $this->mctFichas->lstIdMarcaObject_Create();
			$this->lstIdTiposObject = $this->mctFichas->lstIdTiposObject_Create();
			$this->lstIdModeloObject = $this->mctFichas->lstIdModeloObject_Create();
			$this->lstIdVersionObject = $this->mctFichas->lstIdVersionObject_Create();
			$this->lstIdPaisObject = $this->mctFichas->lstIdPaisObject_Create();
			$this->txtIdSeguro = $this->mctFichas->txtIdSeguro_Create();
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
			$this->txtValvulas = $this->mctFichas->txtValvulas_Create();
			$this->txtTipo = $this->mctFichas->txtTipo_Create();
			$this->txtMarchas = $this->mctFichas->txtMarchas_Create();
			$this->txtTraccion = $this->mctFichas->txtTraccion_Create();
			$this->txtVelocidadMaxima = $this->mctFichas->txtVelocidadMaxima_Create();
			$this->txtAceleracion0100 = $this->mctFichas->txtAceleracion0100_Create();
			$this->txtConsumoUrbano = $this->mctFichas->txtConsumoUrbano_Create();
			$this->txtConsumoInterurbano = $this->mctFichas->txtConsumoInterurbano_Create();
			$this->txtConsumoMixto = $this->mctFichas->txtConsumoMixto_Create();
			$this->txtPuertas = $this->mctFichas->txtPuertas_Create();
			$this->txtPlazas = $this->mctFichas->txtPlazas_Create();
			$this->txtFilasDeAsientos = $this->mctFichas->txtFilasDeAsientos_Create();
			$this->txtInfoEjes = $this->mctFichas->txtInfoEjes_Create();
			$this->txtPeso = $this->mctFichas->txtPeso_Create();
			$this->txtCapacidadBaul = $this->mctFichas->txtCapacidadBaul_Create();
			$this->txtCapacidadTanque = $this->mctFichas->txtCapacidadTanque_Create();
			$this->txtCapacidadCarga = $this->mctFichas->txtCapacidadCarga_Create();
			$this->txtFrenosDelanteros = $this->mctFichas->txtFrenosDelanteros_Create();
			$this->txtFrenosTraseros = $this->mctFichas->txtFrenosTraseros_Create();
			$this->txtNeumaticos = $this->mctFichas->txtNeumaticos_Create();
			$this->txtSuspensionDelantera = $this->mctFichas->txtSuspensionDelantera_Create();
			$this->txtSuspensionTrasera = $this->mctFichas->txtSuspensionTrasera_Create();
			$this->lstIdEstadoObject = $this->mctFichas->lstIdEstadoObject_Create();
			$this->chkProcesada = $this->mctFichas->chkProcesada_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Fichas'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFichas->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the FichasMetaControl
			$this->mctFichas->SaveFichas();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the FichasMetaControl
			$this->mctFichas->DeleteFichas();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>