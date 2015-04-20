<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
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
	class MagazineNotasEditPanel extends QPanel {
		// Local instance of the MagazineNotasMetaControl
		protected $mctMagazineNotas;

		// Controls for MagazineNotas's Data Fields
		public $lblId;
		public $txtTitulo;
		public $txtSubtitulo;
		public $txtCopete;
		public $txtContenido;
		public $calFechaCreada;
		public $calFechaPublicada;
		public $txtVisitas;
		public $txtIdAutor;
		public $txtEstado;
		public $calFechaAPublicar;

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
			$this->strTemplate = 'MagazineNotasEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the MagazineNotasMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctMagazineNotas = MagazineNotasMetaControl::Create($this, $intId);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('MagazineNotas'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctMagazineNotas->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the MagazineNotasMetaControl
			$this->mctMagazineNotas->SaveMagazineNotas();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the MagazineNotasMetaControl
			$this->mctMagazineNotas->DeleteMagazineNotas();
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