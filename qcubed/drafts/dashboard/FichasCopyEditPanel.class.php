<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the FichasCopy class.  It uses the code-generated
	 * FichasCopyMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a FichasCopy columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_copy_edit.php AND
	 * fichas_copy_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class FichasCopyEditPanel extends QPanel {
		// Local instance of the FichasCopyMetaControl
		protected $mctFichasCopy;

		// Controls for FichasCopy's Data Fields
		public $lblId;
		public $txtIdMarca;
		public $txtIdTipos;
		public $txtIdModelo;
		public $txtIdVersion;
		public $txtDescripcion;
		public $txtPrecio;
		public $txtCombustible;
		public $txtCilindrada;
		public $txtCilindros;
		public $txtPotenciaMaxima;
		public $txtParMotorTorque;
		public $txtPosicion;
		public $txtAlimentacion;
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
		public $txtIdEstado;

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
			$this->strTemplate = 'FichasCopyEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the FichasCopyMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFichasCopy = FichasCopyMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on FichasCopy's data fields
			$this->lblId = $this->mctFichasCopy->lblId_Create();
			$this->txtIdMarca = $this->mctFichasCopy->txtIdMarca_Create();
			$this->txtIdTipos = $this->mctFichasCopy->txtIdTipos_Create();
			$this->txtIdModelo = $this->mctFichasCopy->txtIdModelo_Create();
			$this->txtIdVersion = $this->mctFichasCopy->txtIdVersion_Create();
			$this->txtDescripcion = $this->mctFichasCopy->txtDescripcion_Create();
			$this->txtPrecio = $this->mctFichasCopy->txtPrecio_Create();
			$this->txtCombustible = $this->mctFichasCopy->txtCombustible_Create();
			$this->txtCilindrada = $this->mctFichasCopy->txtCilindrada_Create();
			$this->txtCilindros = $this->mctFichasCopy->txtCilindros_Create();
			$this->txtPotenciaMaxima = $this->mctFichasCopy->txtPotenciaMaxima_Create();
			$this->txtParMotorTorque = $this->mctFichasCopy->txtParMotorTorque_Create();
			$this->txtPosicion = $this->mctFichasCopy->txtPosicion_Create();
			$this->txtAlimentacion = $this->mctFichasCopy->txtAlimentacion_Create();
			$this->txtValvulas = $this->mctFichasCopy->txtValvulas_Create();
			$this->txtTipo = $this->mctFichasCopy->txtTipo_Create();
			$this->txtMarchas = $this->mctFichasCopy->txtMarchas_Create();
			$this->txtTraccion = $this->mctFichasCopy->txtTraccion_Create();
			$this->txtVelocidadMaxima = $this->mctFichasCopy->txtVelocidadMaxima_Create();
			$this->txtAceleracion0100 = $this->mctFichasCopy->txtAceleracion0100_Create();
			$this->txtConsumoUrbano = $this->mctFichasCopy->txtConsumoUrbano_Create();
			$this->txtConsumoInterurbano = $this->mctFichasCopy->txtConsumoInterurbano_Create();
			$this->txtConsumoMixto = $this->mctFichasCopy->txtConsumoMixto_Create();
			$this->txtPuertas = $this->mctFichasCopy->txtPuertas_Create();
			$this->txtPlazas = $this->mctFichasCopy->txtPlazas_Create();
			$this->txtFilasDeAsientos = $this->mctFichasCopy->txtFilasDeAsientos_Create();
			$this->txtInfoEjes = $this->mctFichasCopy->txtInfoEjes_Create();
			$this->txtPeso = $this->mctFichasCopy->txtPeso_Create();
			$this->txtCapacidadBaul = $this->mctFichasCopy->txtCapacidadBaul_Create();
			$this->txtCapacidadTanque = $this->mctFichasCopy->txtCapacidadTanque_Create();
			$this->txtCapacidadCarga = $this->mctFichasCopy->txtCapacidadCarga_Create();
			$this->txtFrenosDelanteros = $this->mctFichasCopy->txtFrenosDelanteros_Create();
			$this->txtFrenosTraseros = $this->mctFichasCopy->txtFrenosTraseros_Create();
			$this->txtNeumaticos = $this->mctFichasCopy->txtNeumaticos_Create();
			$this->txtSuspensionDelantera = $this->mctFichasCopy->txtSuspensionDelantera_Create();
			$this->txtSuspensionTrasera = $this->mctFichasCopy->txtSuspensionTrasera_Create();
			$this->txtIdEstado = $this->mctFichasCopy->txtIdEstado_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('FichasCopy'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFichasCopy->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the FichasCopyMetaControl
			$this->mctFichasCopy->SaveFichasCopy();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the FichasCopyMetaControl
			$this->mctFichasCopy->DeleteFichasCopy();
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