<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the MagazineNotas class.  It uses the code-generated
	 * MagazineNotasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a MagazineNotas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both magazine_notas_edit.php AND
	 * magazine_notas_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MagazineNotasEditForm extends QForm {
		// Local instance of the MagazineNotasMetaControl
		protected $mctMagazineNotas;

		// Controls for MagazineNotas's Data Fields
		protected $lblId;
		protected $txtTitulo;
		protected $txtSubtitulo;
		protected $txtCopete;
		protected $txtContenido;
		protected $calFechaCreada;
		protected $calFechaPublicada;
		protected $txtVisitas;
		protected $txtIdAutor;
		protected $txtEstado;
		protected $calFechaAPublicar;

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
			// Use the CreateFromPathInfo shortcut (this can also be done manually using the MagazineNotasMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctMagazineNotas = MagazineNotasMetaControl::CreateFromPathInfo($this);

			// Call MetaControl's methods to create qcontrols based on MagazineNotas's data fields
			$this->lblId = $this->mctMagazineNotas->lblId_Create();
			$this->txtTitulo = $this->mctMagazineNotas->txtTitulo_Create();
			$this->txtSubtitulo = $this->mctMagazineNotas->txtSubtitulo_Create();
			$this->txtCopete = $this->mctMagazineNotas->txtCopete_Create();
			$this->txtContenido = $this->mctMagazineNotas->txtContenido_Create();
			$this->calFechaCreada = $this->mctMagazineNotas->calFechaCreada_Create();
			$this->calFechaPublicada = $this->mctMagazineNotas->calFechaPublicada_Create();
			$this->txtVisitas = $this->mctMagazineNotas->txtVisitas_Create();
			$this->txtIdAutor = $this->mctMagazineNotas->txtIdAutor_Create();
			$this->txtEstado = $this->mctMagazineNotas->txtEstado_Create();
			$this->calFechaAPublicar = $this->mctMagazineNotas->calFechaAPublicar_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('MagazineNotas') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctMagazineNotas->EditMode;
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
			// Delegate "Save" processing to the MagazineNotasMetaControl
			$this->mctMagazineNotas->SaveMagazineNotas();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the MagazineNotasMetaControl
			$this->mctMagazineNotas->DeleteMagazineNotas();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/magazine_notas_list.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// magazine_notas_edit.tpl.php as the included HTML template file
	MagazineNotasEditForm::Run('MagazineNotasEditForm');
?>