<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Encuestas class.  It uses the code-generated
	 * EncuestasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Encuestas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both encuestas_edit.php AND
	 * encuestas_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class EncuestasEditForm extends QForm {
		// Local instance of the EncuestasMetaControl
		protected $mctEncuestas;

		// Controls for Encuestas's Data Fields
		protected $lblId;
		protected $txtTitulo;
		protected $txtOpcion1;
		protected $txtOpcion2;
		protected $txtOpcion3;
		protected $txtOpcion4;
		protected $txtOpcion5;
		protected $txtOpcion6;
		protected $txtValor1;
		protected $txtValor2;
		protected $txtValor3;
		protected $txtValor4;
		protected $txtValor5;
		protected $txtValor6;
		protected $txtEstado;

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
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the EncuestasMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctEncuestas = EncuestasMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on Encuestas's data fields
			$this->lblId = $this->mctEncuestas->lblId_Create();
			$this->txtTitulo = $this->mctEncuestas->txtTitulo_Create();
			$this->txtOpcion1 = $this->mctEncuestas->txtOpcion1_Create();
			$this->txtOpcion2 = $this->mctEncuestas->txtOpcion2_Create();
			$this->txtOpcion3 = $this->mctEncuestas->txtOpcion3_Create();
			$this->txtOpcion4 = $this->mctEncuestas->txtOpcion4_Create();
			$this->txtOpcion5 = $this->mctEncuestas->txtOpcion5_Create();
			$this->txtOpcion6 = $this->mctEncuestas->txtOpcion6_Create();
			$this->txtValor1 = $this->mctEncuestas->txtValor1_Create();
			$this->txtValor2 = $this->mctEncuestas->txtValor2_Create();
			$this->txtValor3 = $this->mctEncuestas->txtValor3_Create();
			$this->txtValor4 = $this->mctEncuestas->txtValor4_Create();
			$this->txtValor5 = $this->mctEncuestas->txtValor5_Create();
			$this->txtValor6 = $this->mctEncuestas->txtValor6_Create();
			$this->txtEstado = $this->mctEncuestas->txtEstado_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Encuestas') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctEncuestas->EditMode;
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
			// Delegate "Save" processing to the EncuestasMetaControl
			$this->mctEncuestas->SaveEncuestas();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the EncuestasMetaControl
			$this->mctEncuestas->DeleteEncuestas();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/encuestas_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// encuestas_edit.tpl.php as the included HTML template file
	EncuestasEditForm::Run('EncuestasEditForm');
?>