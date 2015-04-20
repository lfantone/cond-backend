<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Notas class.  It uses the code-generated
	 * NotasMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Notas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both notas_edit.php AND
	 * notas_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class NotasEditPanel extends QPanel {
		// Local instance of the NotasMetaControl
		protected $mctNotas;

		// Controls for Notas's Data Fields
		public $lblId;
		public $txtTitulo;
		public $txtSubtitulo;
		public $txtCopete;
		public $txtContenido;
		public $txtContenidoRtf;
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
			$this->strTemplate = 'NotasEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the NotasMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctNotas = NotasMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on Notas's data fields
			$this->lblId = $this->mctNotas->lblId_Create();
			$this->txtTitulo = $this->mctNotas->txtTitulo_Create();
			$this->txtSubtitulo = $this->mctNotas->txtSubtitulo_Create();
			$this->txtCopete = $this->mctNotas->txtCopete_Create();
			$this->txtContenido = $this->mctNotas->txtContenido_Create();
			$this->txtContenidoRtf = $this->mctNotas->txtContenidoRtf_Create();
			$this->calFechaCreada = $this->mctNotas->calFechaCreada_Create();
			$this->calFechaPublicada = $this->mctNotas->calFechaPublicada_Create();
			$this->txtVisitas = $this->mctNotas->txtVisitas_Create();
			$this->txtIdAutor = $this->mctNotas->txtIdAutor_Create();
			$this->txtEstado = $this->mctNotas->txtEstado_Create();
			$this->calFechaAPublicar = $this->mctNotas->calFechaAPublicar_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Notas'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctNotas->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the NotasMetaControl
			$this->mctNotas->SaveNotas();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the NotasMetaControl
			$this->mctNotas->DeleteNotas();
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