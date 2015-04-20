<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
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
	class FichasCopyEditForm extends QForm {
		// Local instance of the FichasCopyMetaControl
		protected $mctFichasCopy;

		// Controls for FichasCopy's Data Fields
		protected $lblId;
		protected $txtIdMarca;
		protected $txtIdTipos;
		protected $txtIdModelo;
		protected $txtIdVersion;
		protected $txtDescripcion;
		protected $txtPrecio;
		protected $txtCombustible;
		protected $txtCilindrada;
		protected $txtCilindros;
		protected $txtPotenciaMaxima;
		protected $txtParMotorTorque;
		protected $txtPosicion;
		protected $txtAlimentacion;
		protected $txtValvulas;
		protected $txtTipo;
		protected $txtMarchas;
		protected $txtTraccion;
		protected $txtVelocidadMaxima;
		protected $txtAceleracion0100;
		protected $txtConsumoUrbano;
		protected $txtConsumoInterurbano;
		protected $txtConsumoMixto;
		protected $txtPuertas;
		protected $txtPlazas;
		protected $txtFilasDeAsientos;
		protected $txtInfoEjes;
		protected $txtPeso;
		protected $txtCapacidadBaul;
		protected $txtCapacidadTanque;
		protected $txtCapacidadCarga;
		protected $txtFrenosDelanteros;
		protected $txtFrenosTraseros;
		protected $txtNeumaticos;
		protected $txtSuspensionDelantera;
		protected $txtSuspensionTrasera;
		protected $txtIdEstado;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		protected $btnSave;
		protected $btnDelete;
		protected $btnCancel;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the FichasCopyMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFichasCopy = FichasCopyMetaControl::CreateFromPathInfo($this);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('FichasCopy') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFichasCopy->EditMode;
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
			// Delegate "Save" processing to the FichasCopyMetaControl
			$this->mctFichasCopy->SaveFichasCopy();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the FichasCopyMetaControl
			$this->mctFichasCopy->DeleteFichasCopy();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_copy_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// fichas_copy_edit.tpl.php as the included HTML template file
	FichasCopyEditForm::Run('FichasCopyEditForm');
?>