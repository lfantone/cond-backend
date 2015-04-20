<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
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
	class EncuestasEditPanel extends QPanel {
		// Local instance of the EncuestasMetaControl
		protected $mctEncuestas;

		// Controls for Encuestas's Data Fields
		public $lblId;
		public $txtTitulo;
		public $txtOpcion1;
		public $txtOpcion2;
		public $txtOpcion3;
		public $txtOpcion4;
		public $txtOpcion5;
		public $txtOpcion6;
		public $txtValor1;
		public $txtValor2;
		public $txtValor3;
		public $txtValor4;
		public $txtValor5;
		public $txtValor6;
		public $txtEstado;

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
			$this->strTemplate = 'EncuestasEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the EncuestasMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctEncuestas = EncuestasMetaControl::Create($this, $intId);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Encuestas'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctEncuestas->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the EncuestasMetaControl
			$this->mctEncuestas->SaveEncuestas();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the EncuestasMetaControl
			$this->mctEncuestas->DeleteEncuestas();
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