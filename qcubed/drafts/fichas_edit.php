<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

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
		protected $lstIdEstadoObject;
		protected $chkProcesada;

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
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the FichasMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctFichas = FichasMetaControl::CreateFromPathInfo($this);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Fichas') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctFichas->EditMode;
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
			// Delegate "Save" processing to the FichasMetaControl
			$this->mctFichas->SaveFichas();
			$this->RedirectToListPage();
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
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fichas_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// fichas_edit.tpl.php as the included HTML template file
	FichasEditForm::Run('FichasEditForm');
?>