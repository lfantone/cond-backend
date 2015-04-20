<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Item class.  It uses the code-generated
	 * ItemMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Item columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both item_edit.php AND
	 * item_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class ItemEditPanel extends QPanel {
		// Local instance of the ItemMetaControl
		protected $mctItem;

		// Controls for Item's Data Fields
		public $lblIdItem;
		public $txtNombre;
		public $txtDescripcion;
		public $txtSeccion;
		public $txtOrdenSeccion;
		public $lstIdTipoDatoTypeObject;
		public $lstIdPaisObject;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intIdItem = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'ItemEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ItemMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctItem = ItemMetaControl::Create($this, $intIdItem);

			// Call MetaControl's methods to create qcontrols based on Item's data fields
			$this->lblIdItem = $this->mctItem->lblIdItem_Create();
			$this->txtNombre = $this->mctItem->txtNombre_Create();
			$this->txtDescripcion = $this->mctItem->txtDescripcion_Create();
			$this->txtSeccion = $this->mctItem->txtSeccion_Create();
			$this->txtOrdenSeccion = $this->mctItem->txtOrdenSeccion_Create();
			$this->lstIdTipoDatoTypeObject = $this->mctItem->lstIdTipoDatoTypeObject_Create();
			$this->lstIdPaisObject = $this->mctItem->lstIdPaisObject_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Item'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctItem->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ItemMetaControl
			$this->mctItem->SaveItem();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ItemMetaControl
			$this->mctItem->DeleteItem();
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