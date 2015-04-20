<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Fichas30062010 class.  It uses the code-generated
	 * Fichas30062010MetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Fichas30062010 columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fichas_3_0_0_6_2_0_1_0_edit.php AND
	 * fichas_3_0_0_6_2_0_1_0_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class Fichas30062010EditPanel extends QPanel {
		// Local instance of the Fichas30062010MetaControl
		protected $mctFichas30062010;

		// Controls for Fichas30062010's Data Fields
		public $lblId;
		public $txtIdMarca;
		public $txtIdTipos;
		public $txtIdModelo;
		public $txtIdVersion;
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
		public $txtIdEstado;
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
			$this->strTemplate = 'Fichas30062010EditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the Fichas30062010MetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFichas30062010 = Fichas30062010MetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on Fichas30062010's data fields
			$this->lblId = $this->mctFichas30062010->lblId_Create();
			$this->txtIdMarca = $this->mctFichas30062010->txtIdMarca_Create();
			$this->txtIdTipos = $this->mctFichas30062010->txtIdTipos_Create();
			$this->txtIdModelo = $this->mctFichas30062010->txtIdModelo_Create();
			$this->txtIdVersion = $this->mctFichas30062010->txtIdVersion_Create();
			$this->txtDescripcion = $this->mctFichas30062010->txtDescripcion_Create();
			$this->txtPrecio = $this->mctFichas30062010->txtPrecio_Create();
			$this->txtAnio = $this->mctFichas30062010->txtAnio_Create();
			$this->txtCombustible = $this->mctFichas30062010->txtCombustible_Create();
			$this->txtCilindrada = $this->mctFichas30062010->txtCilindrada_Create();
			$this->txtCilindros = $this->mctFichas30062010->txtCilindros_Create();
			$this->txtPotenciaMaxima = $this->mctFichas30062010->txtPotenciaMaxima_Create();
			$this->txtParMotorTorque = $this->mctFichas30062010->txtParMotorTorque_Create();
			$this->txtPosicion = $this->mctFichas30062010->txtPosicion_Create();
			$this->txtAlimentacion = $this->mctFichas30062010->txtAlimentacion_Create();
			$this->txtMotorShort = $this->mctFichas30062010->txtMotorShort_Create();
			$this->txtValvulas = $this->mctFichas30062010->txtValvulas_Create();
			$this->txtTipo = $this->mctFichas30062010->txtTipo_Create();
			$this->txtMarchas = $this->mctFichas30062010->txtMarchas_Create();
			$this->txtTraccion = $this->mctFichas30062010->txtTraccion_Create();
			$this->txtVelocidadMaxima = $this->mctFichas30062010->txtVelocidadMaxima_Create();
			$this->txtAceleracion0100 = $this->mctFichas30062010->txtAceleracion0100_Create();
			$this->txtConsumoUrbano = $this->mctFichas30062010->txtConsumoUrbano_Create();
			$this->txtConsumoInterurbano = $this->mctFichas30062010->txtConsumoInterurbano_Create();
			$this->txtConsumoMixto = $this->mctFichas30062010->txtConsumoMixto_Create();
			$this->txtPuertas = $this->mctFichas30062010->txtPuertas_Create();
			$this->txtPlazas = $this->mctFichas30062010->txtPlazas_Create();
			$this->txtFilasDeAsientos = $this->mctFichas30062010->txtFilasDeAsientos_Create();
			$this->txtInfoEjes = $this->mctFichas30062010->txtInfoEjes_Create();
			$this->txtPeso = $this->mctFichas30062010->txtPeso_Create();
			$this->txtCapacidadBaul = $this->mctFichas30062010->txtCapacidadBaul_Create();
			$this->txtCapacidadTanque = $this->mctFichas30062010->txtCapacidadTanque_Create();
			$this->txtCapacidadCarga = $this->mctFichas30062010->txtCapacidadCarga_Create();
			$this->txtFrenosDelanteros = $this->mctFichas30062010->txtFrenosDelanteros_Create();
			$this->txtFrenosTraseros = $this->mctFichas30062010->txtFrenosTraseros_Create();
			$this->txtNeumaticos = $this->mctFichas30062010->txtNeumaticos_Create();
			$this->txtSuspensionDelantera = $this->mctFichas30062010->txtSuspensionDelantera_Create();
			$this->txtSuspensionTrasera = $this->mctFichas30062010->txtSuspensionTrasera_Create();
			$this->txtIdEstado = $this->mctFichas30062010->txtIdEstado_Create();
			$this->chkProcesada = $this->mctFichas30062010->chkProcesada_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Fichas30062010'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFichas30062010->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the Fichas30062010MetaControl
			$this->mctFichas30062010->SaveFichas30062010();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the Fichas30062010MetaControl
			$this->mctFichas30062010->DeleteFichas30062010();
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