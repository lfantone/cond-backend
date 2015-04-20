<?php
	// Load the QCubed Development Framework
	require('qcubed/includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
	 * of the Version class.  It uses the code-generated
	 * VersionMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Version columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both version_edit.php AND
	 * version_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class VersionEditForm extends QForm {
		// Local instance of the VersionMetaControl
		protected $mctVersion;

		// Controls for Version's Data Fields
		protected $lblIdVersion;
		protected $txtNombre;
		protected $lstIdModeloObject;
        protected $lstIdMarca;
		protected $intIdPais;

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
      if (!$intIdPais = QApplication::QueryString('id_pais'))
        $intIdPais = 2;
      $this->intIdPais = $intIdPais;
				// Use the CreateFromPathInfo shortcut (this can also be done manually using the VersionMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctVersion = VersionMetaControl::CreateFromQueryString($this);

			// Call MetaControl's methods to create qcontrols based on Version's data fields
			$this->lblIdVersion = $this->mctVersion->lblIdVersion_Create();
			$this->txtNombre = $this->mctVersion->txtNombre_Create();
			$this->lstIdModeloObject = $this->mctVersion->lstIdModeloObject_Create();
            //$this->lstIdModeloObject->AddAction(new QChangeEvent(), new QAjaxAction("ActualizarModelo"));

			$this->lstIdMarca = $this->mctVersion->lstIdMarcaObject_Create();
            $this->lstIdMarca->AddAction(new QChangeEvent(), new QAjaxAction("ActualizarModelo"));
            if (QApplication::QueryString('intIdVersion')) {
                $this->ActualizarModelo($this->strFormId, $this->lstIdMarca->ControlId, null);
            }

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Version') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctVersion->EditMode;
		}

        public function ActualizarModelo($strFormId, $strControlId, $strParameter) {
            $objIdModeloObjectArray = Modelo::LoadArrayByIdMarca($this->lstIdMarca->SelectedValue);
            $this->lstIdModeloObject->RemoveAllItems();
			if ($objIdModeloObjectArray) foreach ($objIdModeloObjectArray as $objIdModeloObject) {
				$objListItem = new QListItem(($objIdModeloObject->IdPais == 3 ?'Mex':substr(utf8_encode($objIdModeloObject->IdPaisObject->Nombre),0,3)).' '.$objIdModeloObject->__toString(), $objIdModeloObject->IdModelo);
				if (($this->mctVersion->Version->IdModeloObject) && ($this->mctVersion->Version->IdModeloObject->IdModelo == $objIdModeloObject->IdModelo))
					$objListItem->Selected = true;
				$this->lstIdModeloObject->AddItem($objListItem);
			}
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
			// Delegate "Save" processing to the VersionMetaControl
			$this->mctVersion->SaveVersion();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the VersionMetaControl
			$this->mctVersion->DeleteVersion();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__BACKEND_DIR__ . '/version_list.php?id_pais='.$this->intIdPais);
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// version_edit.tpl.php as the included HTML template file
	VersionEditForm::Run('VersionEditForm');
?>
