<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the MonedaPais class.  It uses the code-generated
	 * MonedaPaisDataGrid control which has meta-methods to help with
	 * easily creating/defining MonedaPais columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both moneda_pais_list.php AND
	 * moneda_pais_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MonedaPaisListForm extends QForm {
		// Local instance of the Meta DataGrid to list MonedaPaises
		protected $dtgMonedaPaises;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgMonedaPaises = new MonedaPaisDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMonedaPaises->CssClass = 'datagrid';
			$this->dtgMonedaPaises->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMonedaPaises->Paginator = new QPaginator($this->dtgMonedaPaises);
			$this->dtgMonedaPaises->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/moneda_pais_edit.php';
			$this->dtgMonedaPaises->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for moneda_pais's properties, or you
			// can traverse down QQN::moneda_pais() to display fields that are down the hierarchy)
			$this->dtgMonedaPaises->MetaAddColumn('IdMoneda');
			$this->dtgMonedaPaises->MetaAddColumn('IdPais');
			$this->dtgMonedaPaises->MetaAddColumn('Orden');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// moneda_pais_list.tpl.php as the included HTML template file
	MonedaPaisListForm::Run('MonedaPaisListForm');
?>