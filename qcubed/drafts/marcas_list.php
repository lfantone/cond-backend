<?php
	// Load the QCubed Development Framework
	require('../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Marcas class.  It uses the code-generated
	 * MarcasDataGrid control which has meta-methods to help with
	 * easily creating/defining Marcas columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both marcas_list.php AND
	 * marcas_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class MarcasListForm extends QForm {
		// Local instance of the Meta DataGrid to list Marcases
		protected $dtgMarcases;

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
			$this->dtgMarcases = new MarcasDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgMarcases->CssClass = 'datagrid';
			$this->dtgMarcases->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgMarcases->Paginator = new QPaginator($this->dtgMarcases);
			$this->dtgMarcases->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/marcas_edit.php';
			$this->dtgMarcases->MetaAddEditLinkColumn($strEditPageUrl,  QApplication::Translate('Edit'),  QApplication::Translate('Edit'));

			// Create the Other Columns (note that you can use strings for marcas's properties, or you
			// can traverse down QQN::marcas() to display fields that are down the hierarchy)
			$this->dtgMarcases->MetaAddColumn('Id');
			$this->dtgMarcases->MetaAddColumn('Nombre');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// marcas_list.tpl.php as the included HTML template file
	MarcasListForm::Run('MarcasListForm');
?>